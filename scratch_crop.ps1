Add-Type -AssemblyName System.Drawing
$img = [System.Drawing.Bitmap]::FromFile("C:/Users/DELL/.gemini/antigravity-ide/brain/c77ac826-1e08-4b8b-bef8-4b1a760fe156/.user_uploaded/media_1792494883744.png")
Write-Output "Size: $($img.Width) x $($img.Height)"

# Sample horizontal scanline through middle (Y = 220) to find left edge of card, divider, and right edge:
# The right side of the card has white background (#FFFFFF)
for ($x = 0; $x -lt $img.Width; $x += 5) {
    $c = $img.GetPixel($x, 220)
    if ($x -gt 450 -and $x -lt 580) {
        Write-Output "x=$x: R=$($c.R), G=$($c.G), B=$($c.B)"
    }
}

# Scan across Y at X = 550 (inside right white side of card)
for ($y = 0; $y -lt $img.Height; $y += 5) {
    $c = $img.GetPixel(550, $y)
    if ($c.R -gt 240 -and $c.G -gt 240 -and $c.B -gt 240) {
        Write-Output "White at y=$y"
    }
}

$img.Dispose()