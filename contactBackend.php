<?php
ob_start();
date_default_timezone_set('Asia/Kolkata');

if (isset($_POST["eqSubmit"])) {

    // ------------------------------------------
    // 1️⃣ GET FORM VALUES
    // ------------------------------------------
    $userName   = $_POST["userName"];
    $userMailId = $_POST["userEmail"];
    $userPhNum  = $_POST["userPhnumber"];
    $userMsg    = $_POST["userMsg"];

    // ------------------------------------------
    // 2️⃣ CAPTCHA VALIDATION
    // ------------------------------------------
    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
        echo "<script>alert('Please verify the captcha'); window.history.back();</script>";
        exit;
    }

    $captcha = $_POST['g-recaptcha-response'];

    // Correct Secret Key
    $secretKey = "6LdsiREsAAAAAIpGLCCluNvkFfxtXegLUA5_SGaC";
    $ip = $_SERVER['REMOTE_ADDR'];

    $verifyURL = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$ip";

    $response = file_get_contents($verifyURL);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        echo "<script>alert('Captcha verification failed! Try again.'); window.history.back();</script>";
        exit;
    }

    // ------------------------------------------
    // 3️⃣ SAVE TO DATABASE
    // ------------------------------------------
    require_once 'dbconfig.php';
    
    try {
        $query = "INSERT INTO contact_submissions (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $dbconn->prepare($query);
        $stmt->bindParam(':name', $userName);
        $stmt->bindParam(':email', $userMailId);
        $stmt->bindParam(':phone', $userPhNum);
        $stmt->bindParam(':message', $userMsg);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "<script>alert('Error saving your message. Please try again.'); window.history.back();</script>";
        exit;
    }

    // ------------------------------------------
    // 4️⃣ SUCCESS - REDIRECT TO HOME
    // ------------------------------------------
    echo "<script>alert('Thank you for contacting us! We will get back to you soon.'); window.location.href='https://aahaserenitystay.com/';</script>";
    exit;
}
?>