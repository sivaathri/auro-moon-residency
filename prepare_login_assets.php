<?php
// prepare_login_assets.php
$sourceImg = 'C:/Users/DELL/.gemini/antigravity-ide/brain/c77ac826-1e08-4b8b-bef8-4b1a760fe156/.user_uploaded/media_1792495261188.png';
$outputDir = __DIR__ . '/assect/images/';

if (!file_exists($sourceImg)) {
    die("Source image not found: " . $sourceImg);
}

$info = getimagesize($sourceImg);
$w = $info[0];
$h = $info[1];

$im = imagecreatefrompng($sourceImg);
if (!$im) {
    die("Failed to load PNG");
}

// Find card boundaries
// The card has a left half with dark / villa colors, and right half with pure or near pure white (#FFFFFF or #FEFEFE)
// Let's sample horizontal line at Y = round($h * 0.5)
$midY = (int)($h * 0.5);

// Let's find where the card starts on the left and ends on the right
// Looking for the card left edge: outer background is warm wall / greenery.
// The card has rounded corners.
// Let's scan from left to right along midY to find the left edge of the card, the split between left and right halves, and the right edge of the card.
// Also scan along vertical line in right half to find top and bottom of card.

// Sample points
$samples = [];
for ($x = 0; $x < $w; $x += 2) {
    $rgb = imagecolorat($im, $x, $midY);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;
    $samples[$x] = [$r, $g, $b];
}

// Find right half: region where background is white/near white (R > 250, G > 250, B > 250)
$whiteStart = null;
$whiteEnd = null;
for ($x = (int)($w * 0.4); $x < (int)($w * 0.95); $x += 2) {
    $r = $samples[$x][0];
    $g = $samples[$x][1];
    $b = $samples[$x][2];
    if ($r > 248 && $g > 248 && $b > 248) {
        if ($whiteStart === null) $whiteStart = $x;
        $whiteEnd = $x;
    }
}

// Top and bottom of the card can be found by scanning Y at a known white column, e.g., $whiteStart + 100
$probeX = $whiteStart ? ($whiteStart + 80) : (int)($w * 0.65);
$cardTop = null;
$cardBottom = null;
for ($y = 0; $y < $h; $y += 2) {
    $rgb = imagecolorat($im, $probeX, $y);
    $r = ($rgb >> 16) & 0xFF;
    $g = ($rgb >> 8) & 0xFF;
    $b = $rgb & 0xFF;
    if ($r > 248 && $g > 248 && $b > 248) {
        if ($cardTop === null) $cardTop = $y;
        $cardBottom = $y;
    }
}

// Left edge of card: at $midY, the card left is the villa image.
// Top-left of the card can also be found at Y = $cardTop + 20, scanning from left
// Or the card width is symmetric or left half width = right half width
$cardRight = $whiteEnd;
// In standard 2-column cards, left half width is roughly equal to right half width:
// Or let's detect the outer boundary of the card
// Let's scan along Y = $midY from x = 100 to $whiteStart to find where the card begins
// Let's look at the card border/shadow or top edge
$cardHeight = $cardBottom - $cardTop;
// Let's scan top edge at Y = $cardTop:
$cardLeft = null;
for ($x = 10; $x < $whiteStart; $x += 2) {
    $rgb = imagecolorat($im, $x, (int)($cardTop + $cardHeight * 0.5));
    // Check if x is within the card
    // The left edge of the card in the mockup:
    // Let's check color difference between (x, Y) and outer background
}

// Let's write out an analysis result into a json or text file
$result = [
    'w' => $w,
    'h' => $h,
    'midY' => $midY,
    'whiteStart' => $whiteStart,
    'whiteEnd' => $whiteEnd,
    'cardTop' => $cardTop,
    'cardBottom' => $cardBottom,
    'probeX' => $probeX
];

file_put_contents(__DIR__ . '/card_analysis.json', json_encode($result, JSON_PRETTY_PRINT));
echo "Analysis written successfully:\n" . json_encode($result);
?>
