# fetch_all_issues.ps1 - Trae todos los issues del proyecto SCRUM y los guarda en JSON
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$baseUrl = "https://devpbstudio.atlassian.net"
$outFile = "$PSScriptRoot\all_issues.json"
$txtFile = "$PSScriptRoot\all_issues_tabla.txt"

$bytes   = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64     = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Accept"        = "application/json"
}

$jql    = [uri]::EscapeDataString("project = SCRUM ORDER BY key ASC")
$fields = "summary,issuetype,status,parent,customfield_10014"
$uri    = "$baseUrl/rest/api/3/search?jql=$jql&maxResults=200&fields=$fields"

$r = Invoke-RestMethod -Uri $uri -Method Get -Headers $headers
Write-Host "Total issues: $($r.total)"

# Guardar JSON raw
$r | ConvertTo-Json -Depth 20 | Set-Content $outFile -Encoding UTF8

# Armar tabla legible
$rows = $r.issues | ForEach-Object {
    $parent = if ($_.fields.parent) { $_.fields.parent.key } else { "-" }
    $epic   = if ($_.fields.customfield_10014) { $_.fields.customfield_10014 } else { "-" }
    [PSCustomObject]@{
        Key    = $_.key
        Type   = $_.fields.issuetype.name
        Status = $_.fields.status.name
        Parent = $parent
        Epic   = $epic
        Summary = $_.fields.summary
    }
}

$rows | Format-Table -AutoSize | Out-String -Width 220 | Tee-Object $txtFile
Write-Host "Guardado en: $txtFile"
