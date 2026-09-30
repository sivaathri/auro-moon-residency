<?php
$mockupPath = 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\89618c7a-ad8a-4a19-bfcc-59de820a4221\\.user_uploaded\\media_1790770434241.png';
if (file_exists($mockupPath)) {
    $info = getimagesize($mockupPath);
    echo "WIDTH: " . $info[0] . ", HEIGHT: " . $info[1];
} else {
    echo "NOT FOUND";
}
?>
