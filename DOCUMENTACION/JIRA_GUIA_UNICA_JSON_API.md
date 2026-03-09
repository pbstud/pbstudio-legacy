# Guia Unica - Jira por JSON API

Esta es la unica guia oficial para operar Jira sin CSV.
Todo se hace por API JSON desde PowerShell.

## 1. Datos minimos requeridos
1. `BaseUrl` (ejemplo: `https://tu-dominio.atlassian.net`)
2. `Email` (usuario Jira)
3. `ApiToken` (Atlassian API token)
4. `ProjectKey` (ejemplo: `SCRUM`)
5. `BoardId` (si vas a mover issues a sprint)

## 2. Autenticacion base (una sola vez por sesion)
```powershell
$baseUrl = "https://TU-DOMINIO.atlassian.net"
$email = "TU_EMAIL"
$token = "TU_API_TOKEN"

$pair = "{0}:{1}" -f $email, $token
$auth = [Convert]::ToBase64String([Text.Encoding]::UTF8.GetBytes($pair))
$headers = @{
  Authorization = "Basic $auth"
  Accept = "application/json"
  "Content-Type" = "application/json"
}
```

## 3. Descubrir metadatos antes de crear issues

### 3.1 Campos personalizados
```powershell
Invoke-RestMethod -Method Get -Uri "$baseUrl/rest/api/2/field" -Headers $headers |
  Select-Object id, name | Format-Table -AutoSize
```

### 3.2 Tipos de issue por proyecto
```powershell
$meta = Invoke-RestMethod -Method Get -Uri "$baseUrl/rest/api/2/issue/createmeta?projectKeys=TU_PROYECTO&expand=projects.issuetypes.fields" -Headers $headers
$meta.projects[0].issuetypes | Select-Object id, name | Format-Table -AutoSize
```

### 3.3 Sprints por board
```powershell
Invoke-RestMethod -Method Get -Uri "$baseUrl/rest/agile/1.0/board/TU_BOARD_ID/sprint" -Headers $headers |
  Select-Object -ExpandProperty values |
  Select-Object id, name, state | Format-Table -AutoSize
```

## 4. Flujo recomendado (Epic -> Story -> Subtasks)

## 4.1 Crear Epic
```powershell
$epicPayload = @{
  fields = @{
    project = @{ key = "TU_PROYECTO" }
    issuetype = @{ id = "ID_EPIC" }
    summary = "EPIC - Titulo"
    description = "Descripcion del epic"
    labels = @("backend", "audit")
  }
} | ConvertTo-Json -Depth 10

$epicResp = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $epicPayload
$epicKey = $epicResp.key
```

## 4.2 Crear Story/Historia hija del Epic
```powershell
$storyPayload = @{
  fields = @{
    project = @{ key = "TU_PROYECTO" }
    issuetype = @{ id = "ID_STORY_O_HISTORIA" }
    parent = @{ key = $epicKey }
    summary = "Story - Titulo"
    description = "Descripcion de la historia"
    customfield_10016 = 5
  }
} | ConvertTo-Json -Depth 10

$storyResp = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $storyPayload
$storyKey = $storyResp.key
```

## 4.3 Crear subtareas en bulk
```powershell
$bulkPayload = @{
  issueUpdates = @(
    @{
      fields = @{
        project = @{ key = "TU_PROYECTO" }
        parent = @{ key = $storyKey }
        issuetype = @{ id = "ID_SUBTASK" }
        summary = "Subtask 1"
      }
    },
    @{
      fields = @{
        project = @{ key = "TU_PROYECTO" }
        parent = @{ key = $storyKey }
        issuetype = @{ id = "ID_SUBTASK" }
        summary = "Subtask 2"
      }
    }
  )
} | ConvertTo-Json -Depth 20

Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue/bulk" -Headers $headers -Body $bulkPayload
```

## 5. Operaciones comunes por JSON

### 5.1 Agregar issues a sprint
```powershell
$sprintBody = @{ issues = @("SCRUM-15", "SCRUM-16") } | ConvertTo-Json
Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/agile/1.0/sprint/TU_SPRINT_ID/issue" -Headers $headers -Body $sprintBody
```

### 5.2 Comentar una issue
```powershell
$commentBody = @{ body = "Implementacion completada" } | ConvertTo-Json
Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue/SCRUM-15/comment" -Headers $headers -Body $commentBody
```

### 5.3 Cambiar estatus (transicion)
```powershell
Invoke-RestMethod -Method Get -Uri "$baseUrl/rest/api/2/issue/SCRUM-15/transitions" -Headers $headers |
  Select-Object -ExpandProperty transitions |
  Select-Object id, name | Format-Table -AutoSize

$transitionBody = @{ transition = @{ id = "41" } } | ConvertTo-Json -Depth 5
Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue/SCRUM-15/transitions" -Headers $headers -Body $transitionBody
```

## 6. Como pedirmelo para que yo lo ejecute directo
Usa este formato y yo lo corro por JSON API sin volver a armar archivos intermedios:

1. "Crear Epic + Story + N subtareas en proyecto `SCRUM` y meterlas al sprint `1`."
2. "Comentar y cerrar `SCRUM-15` y `SCRUM-16`."
3. "Mover estas issues al sprint activo del board `1`: ..."

Con eso puedo ejecutar directamente llamadas JSON a Jira desde terminal.

## 7. Buenas practicas
1. No guardar tokens en archivos del repo.
2. Usar `issuetype.id` en vez de `issuetype.name`.
3. Consultar `transitions` antes de mover a otro estatus.
4. Confirmar `BoardId` y `SprintId` antes de asignar issues.
