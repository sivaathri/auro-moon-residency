Add-Type -AssemblyName System.Drawing

$src = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792480972050.png"
$bmp = New-Object System.Drawing.Bitmap($src)

Write-Output "Mockup dimensions: $($bmp.Width) x $($bmp.Height)"

# Find dark pixels of "Reserve Your" in mockup
for ($x = 50; $x -lt 400; $x++) {
    for ($y = 70; $y -lt 110; $y++) {
        $p = $bmp.GetPixel($x, $y)
        if ($p.R -lt 50 -and $p.G -lt 60 -and $p.B -lt 60) {
            Write-Output "In mockup, title starts at x=$x, y=$y"
            $found = $true
            break
        }
    }
    if ($found) { break }
}

$bmp.Dispose()
