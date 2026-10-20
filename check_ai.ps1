Add-Type -AssemblyName System.Drawing

$ai = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\booking_villa_terrace_1792480533650.jpg"
$bmp = New-Object System.Drawing.Bitmap($ai)
Write-Output "AI Image size: $($bmp.Width) x $($bmp.Height)"
$bmp.Dispose()
