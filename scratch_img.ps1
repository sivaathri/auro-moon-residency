Add-Type -AssemblyName System.Drawing
$b1 = New-Object System.Drawing.Bitmap('C:\Users\DELL\.gemini\antigravity-ide\brain\c77ac826-1e08-4b8b-bef8-4b1a760fe156\.user_uploaded\media_1792480972050.png')

$minX = 9999; $maxX = 0; $minY = 9999; $maxY = 0;
for ($y = 60; $y -lt 120; $y++) {
    for ($x = 200; $x -lt 450; $x++) {
        $c = $b1.GetPixel($x, $y)
        if ($c.R -lt 50 -and $c.G -lt 60 -and $c.B -lt 60) {
            if ($x -lt $minX) { $minX = $x }
            if ($x -gt $maxX) { $maxX = $x }
            if ($y -lt $minY) { $minY = $y }
            if ($y -gt $maxY) { $maxY = $y }
        }
    }
}
Write-Host "Mockup 'Reserve Your' bounding box: X: $minX .. $maxX (Width = $($maxX - $minX)), Y: $minY .. $maxY (Height = $($maxY - $minY))"

$b1.Dispose()
