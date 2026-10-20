Add-Type -AssemblyName System.Drawing

$src = "C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792480972050.png"
$bmp = New-Object System.Drawing.Bitmap($src)

# Find card left edge by scanning row y=200 for pure white (#FFFFFF)
for ($x = 400; $x -lt 600; $x++) {
    $p = $bmp.GetPixel($x, 200)
    if ($p.R -gt 250 -and $p.G -gt 250 -and $p.B -gt 250) {
        Write-Output "Card left starts at x=$x"
        break
    }
}

# Find card right edge
for ($x = 1000; $x -gt 700; $x--) {
    $p = $bmp.GetPixel($x, 200)
    if ($p.R -gt 250 -and $p.G -gt 250 -and $p.B -gt 250) {
        Write-Output "Card right ends at x=$x"
        break
    }
}

# Find card top edge
for ($y = 0; $y -lt 100; $y++) {
    $p = $bmp.GetPixel(700, $y)
    if ($p.R -gt 250 -and $p.G -gt 250 -and $p.B -gt 250) {
        Write-Output "Card top starts at y=$y"
        break
    }
}

# Find card bottom edge
for ($y = 400; $y -gt 250; $y--) {
    $p = $bmp.GetPixel(700, $y)
    if ($p.R -gt 250 -and $p.G -gt 250 -and $p.B -gt 250) {
        Write-Output "Card bottom ends at y=$y"
        break
    }
}

# Find bottom bar top edge by checking where background turns into #F2EFE7
for ($y = 330; $y -lt 400; $y++) {
    $p = $bmp.GetPixel(300, $y)
    if ($p.R -lt 246 -and $p.G -lt 242 -and $p.B -lt 235) {
        Write-Output "Bottom bar starts at y=$y (R=$($p.R), G=$($p.G), B=$($p.B))"
        break
    }
}

$bmp.Dispose()
