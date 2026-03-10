$baseUrl = "https://devpbstudio.atlassian.net"
$email = "desarrollo.pbstudio@outlook.com"
$token = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$auth = [Convert]::ToBase64String([Text.Encoding]::ASCII.GetBytes("${email}:${token}"))
$headers = @{
    Authorization = "Basic $auth"
    "Content-Type" = "application/json"
}

$stories = 34..41
$results = @()

foreach($num in $stories){
    $key = "SCRUM-$num"
    $body = @{
        fields = @{
            customfield_10014 = "SCRUM-33"
        }
    } | ConvertTo-Json
    
    try {
        Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/$key" -Headers $headers -Body $body
        $results += "OK: $key vinculado a SCRUM-33"
    } catch {
        $msg = $_.Exception.Message
        $results += "ERROR en ${key}: $msg"
    }
    
    Start-Sleep -Milliseconds 600
}

$results | Out-File "link_results.txt"
