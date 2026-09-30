<?php
// Smart Asset Processor for "Our Location" Section
$mockupPath = 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\89618c7a-ad8a-4a19-bfcc-59de820a4221\\.user_uploaded\\media_1790770434241.png';
$outDir = __DIR__ . '/assect/images';

if (!is_dir($outDir)) {
    @mkdir($outDir, 0777, true);
}

if (file_exists($mockupPath)) {
    // 1. Copy original high-res mockup as reference
    @copy($mockupPath, $outDir . '/location_mockup_full.png');

    $info = @getimagesize($mockupPath);
    if ($info) {
        $w = $info[0];
        $h = $info[1];
        
        $src = @imagecreatefrompng($mockupPath);
        if ($src) {
            // 2. Extract Left Sunset Lighthouse Background (0 to 58.4% of width)
            $leftW = (int)($w * 0.584);
            $leftImg = imagecreatetruecolor($leftW, $h);
            imagecopyresampled($leftImg, $src, 0, 0, 0, 0, $leftW, $h, $leftW, $h);
            imagejpeg($leftImg, $outDir . '/location_sunset_left.jpg', 95);
            imagedestroy($leftImg);

            // 3. Extract Map Card on the right side
            // In the 1200x200 (approx) image:
            // Map card starts around x = 77.2% and ends at 98.2%
            // y starts around 7.5% and ends at 92.5%
            $mapX = (int)($w * 0.772);
            $mapY = (int)($h * 0.075);
            $mapW = (int)($w * 0.212);
            $mapH = (int)($h * 0.85);

            $mapImg = imagecreatetruecolor($mapW, $mapH);
            imagealphablending($mapImg, false);
            imagesavealpha($mapImg, true);
            imagecopyresampled($mapImg, $src, 0, 0, $mapX, $mapY, $mapW, $mapH, $mapW, $mapH);
            imagepng($mapImg, $outDir . '/location_map_card.png');
            imagedestroy($mapImg);

            imagedestroy($src);
        }
    }
}
?>
