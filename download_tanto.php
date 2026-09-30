<?php
$url = "https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800&auto=format&fit=crop&q=85";
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
    ]
];
$ctx = stream_context_create($opts);
$img = file_get_contents($url, false, $ctx);
if ($img !== false) {
    file_put_contents(__DIR__ . "/assect/images/cafe_tanto.jpg", $img);
    echo "SUCCESS: " . strlen($img) . " bytes";
} else {
    echo "ERROR";
}
