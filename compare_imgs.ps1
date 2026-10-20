Add-Type -AssemblyName System.Drawing

$aiPath = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\booking_villa_terrace_1792480533650.jpg"
$origPath = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792480972050.png"

$ai = New-Object System.Drawing.Bitmap($aiPath)
$orig = New-Object System.Drawing.Bitmap($origPath)

Write-Output "AI: $($ai.Width)x$($ai.Height) - Pixel(100,100): $($ai.GetPixel(100,100).ToString())"
Write-Output "Orig: $($orig.Width)x$($orig.Height) - Pixel(100,100): $($orig.GetPixel(100,100).ToString())"

$ai.Dispose()
$orig.Dispose()
