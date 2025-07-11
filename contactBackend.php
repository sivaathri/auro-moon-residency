<?php
// if (isset($_POST["eqSubmit"])) {
//    $userName = $_POST["userName"];
//    $userMailId = $_POST["userEmail"];
//    $userPhNum = $_POST["userPhnumber"];
//    $userMsg = $_POST["userMsg"];

//    require './mailsent/PHPMailerAutoload.php';
//    require './mailsent/class.phpmailer.php';
//    require './mailsent/class.smtp.php';
   
// //   $mail->SMTPDebug = 3;

//   $mail = new PHPMailer;

//   $mail->isMail();                                        // Set mailer to use SMTP
//   $mail->Host = 'aahahomestay.com';  // Specify main and backup SMTP servers
//   $mail->SMTPAuth = true;                               // Enable SMTP authentication
//   $mail->Username = "info@aahahomestay.com";                 // SMTP username
//   $mail->Password = 'Monday@123';                           // SMTP password
//   $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//   $mail->Port = 465;               

//   $mail->setFrom("info@aahahomestay.com",'AAHA-Home-Stay');

//   $mail->isHTML(true);

//   $mail->addAddress('anita.aroulradjy@gmail.com');
// //   $mail->addAddress('reguramachandran007@gmail.com');
//   $mail->addReplyTo($userMailId, $userName);
//   $mail->Subject = 'Enquiry for Homestay';
//   $mail->Body    = 'Name: ' . $userName . '<br>Phone No.: ' . $userPhNum . '<br>Email: ' . $userMailId . '<br> <strong>Message: ' . $userMsg . '</strong>';
//   $mail->AltBody = 'This message from ' . $userName . ' for enquire the \"' . $userMsg . ' \"';

//    if (!$mail->send()) {
//       echo 'Message could not be sent.';
//       echo 'Mailer Error: ' . $mail->ErrorInfo;
//    } else {
//       echo 'Message has been sent';
//       header('Location: index.php');
//    }
// } else {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    header('Location: index.php');
// }

// <?php 
if (isset($_POST["eqSubmit"])) {
   $userName   = $_POST["userName"];
   $userMailId = $_POST["userEmail"];
   $userPhNum  = $_POST["userPhnumber"];
   $userMsg    = $_POST["userMsg"];

   // JavaScript console logs for debugging in browser
   echo "<script>
           console.log('Name: " . addslashes($userName) . "');
           console.log('Email: " . addslashes($userMailId) . "');
           console.log('Phone: " . addslashes($userPhNum) . "');
           console.log('Message: " . addslashes($userMsg) . "');
         </script>";

   // Include PHPMailer classes manually (if not using Composer)
   require './mailsent/PHPMailerAutoload.php';
   require './mailsent/class.phpmailer.php';
   require './mailsent/class.smtp.php';

   $mail = new PHPMailer;

   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'aahaserenitystays@gmail.com';       // ✅ Your Gmail address
   $mail->Password = 'bcrp rvsb lwam mhxx';     // ✅ Your App Password (not your Gmail password)
   $mail->SMTPSecure = 'tls';                     // ✅ Encryption
   $mail->Port = 587;                             // ✅ Gmail SMTP TLS port
   
   $mail->setFrom('aahaserenitystay@gmail.com', 'AAHA Homestay');
   $mail->addAddress('aahaserenitystays@gmail.com'); // Recipient
   $mail->addReplyTo($userMailId, $userName);
   
   $mail->isHTML(true);
   $mail->Subject = 'Enquiry for Homestay';
   $mail->Body = "
      <strong>Name:</strong> $userName<br>
      <strong>Phone No.:</strong> $userPhNum<br>
      <strong>Email:</strong> $userMailId<br>
      <strong>Message:</strong><br>$userMsg
   ";
   $mail->AltBody = "Name: $userName\nPhone: $userPhNum\nEmail: $userMailId\nMessage: $userMsg";
   

echo "<script>
   console.log(" . json_encode("AltBody: $mail->AltBody") . ");
</script>";

  
   // Send email
   if (!$mail->send()) {
      echo 'Message could not be sent.<br>';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      // Email sent successfully
      // Optional: redirect after logging
       header('Location:/aahaserenittystay.com/');
       exit;
  }
}
  