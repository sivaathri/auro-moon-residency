Add-Type -AssemblyName System.Drawing

$src = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792480457077.png"
$bmp = New-Object System.Drawing.Bitmap($src)

Write-Output "User original mockup dimensions: $($bmp.Width) x $($bmp.Height)"

# Check where the roof ends in the user's mockup:
# Scan row y=80 from x=0 to x=500 to find where the roof edge is
# The roof has dark wood / ceiling, after which is light sky (R > 230, G > 220)
for ($x = 100; $x -lt 500; $x++) {
    $p = $bmp.GetPixel($x, 80)
    if ($p.R -gt 230 -and $p.G -gt 220 -and $p.B -gt 210) {
        Write-Output "In user mockup, roof ends at x=$x (which is $([math]::Round($x / $bmp.Width * 100, 1))% of width)"
        break
    }
}

# Scan row y=120 from x=0 to x=500 to find where the pillar/wall ends
for ($x = 100; $x -lt 500; $x++) {
    $p = $bmp.GetPixel($x, 120)
    if ($p.R -gt 230 -and $p.G -gt 220 -and $p.B -gt 210) {
        Write-Output "In user mockup, pillar ends at x=$x (which is $([math]::Round($x / $bmp.Width * 100, 1))% of width)"
        break
    }
}

$bmp.Dispose()
