<?php
// setup_login_assets.php - Copies generated images to destination
$brainDir = 'C:/Users/DELL/.gemini/antigravity-ide/brain/c77ac826-1e08-4b8b-bef8-4b1a760fe156/';
$destDir  = __DIR__ . '/assect/images/';

if (!is_dir($destDir)) {
    @mkdir($destDir, 0777, true);
}

// 1. Copy Left Villa Visual
$genVillaImg = $brainDir . 'login_villa_visual_1792495829650.jpg';
$destVillaImg = $destDir . 'login_card_left.jpg';

if (file_exists($genVillaImg)) {
    copy($genVillaImg, $destVillaImg);
}

// 2. Copy Resort Backdrop
$genBgImg = $brainDir . 'login_resort_bg_1792495858766.jpg';
$destBgImg = $destDir . 'login_bg.jpg';

if (file_exists($genBgImg)) {
    copy($genBgImg, $destBgImg);
}

?>
