<?php

include('dbconfig.php');
require 'mailsent/PHPMailerAutoload.php';
require 'mailsent/class.phpmailer.php';
require 'mailsent/class.smtp.php';

function sendEmail($toEmail, $toName, $subject, $htmlBody, $altBody) {
    $mail = new PHPMailer;
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aahaserenitystays@gmail.com';
    $mail->Password = 'nzeq qlsh idtk nyyg'; // App password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('aahaserenitystays@gmail.com', 'AAHA-Home-Stay');
    $mail->addReplyTo('aahaserenitystays@gmail.com', 'AAHA-Home-Stay');
    $mail->addAddress($toEmail, $toName);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $htmlBody;
    $mail->AltBody = $altBody;

    // DKIM Configuration
    $mail->DKIM_domain = 'gmail.com';
    $mail->DKIM_private = './mailsent/dkim_private.pem';
    $mail->DKIM_selector = 'default';
    $mail->DKIM_passphrase = '';
    $mail->DKIM_identity = $mail->From;
    $mail->DKIM_copyHeaderFields = false;

    if (!$mail->send()) {
        return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return true;
    }
}

if (isset($_POST['action'])) {

    if ($_POST['action'] == 'request_accecpt') {
        $req_id = $_POST['id'];

        $query = "SELECT * FROM users WHERE id = ?";
        $statement = $dbconn->prepare($query);
        $statement->execute([$req_id]);

        if ($statement->rowCount() > 0) {
            $result = $statement->fetchAll();

            foreach ($result as $row) {
                $userid = $row['id'];
                $userName = $row['name'];
                $userEmail = $row['email'];

                $update = "UPDATE users SET request_status = 1 WHERE id = ?";
                $run_update = $dbconn->prepare($update);
                $run_update->execute([$userid]);

                if ($run_update->rowCount()) {
                    $htmlBody = '<html><body>
                        <h2>Booking Confirmation</h2>
                        <p>Hi ' . htmlspecialchars($userName) . ',</p>
                        <p>We are happy to confirm your booking at AAHA Serenity Stay!</p>
                        <p>Your booking details have been processed and confirmed.</p>
                        <p>Thank you for choosing to stay with us.</p>
                        <br>
                        <p>Best regards,<br>AAHA Serenity Stay Team</p>
                    </body></html>';

                    $altBody = 'Hi ' . $userName . ', We are happy to confirm your booking at AAHA Serenity Stay! Your booking details have been processed and confirmed. Thank you for choosing to stay with us.';

                    $emailStatus = sendEmail(
                        $userEmail,
                        $userName,
                        'Booking Confirmation - AAHA Serenity Stay',
                        $htmlBody,
                        $altBody
                    );

                    if ($emailStatus === true) {
                        echo 'success';
                    } else {
                        echo $emailStatus;
                    }
                    exit();
                } else {
                    echo 'Something went wrong during the update.';
                    exit();
                }
            }
        }
    }

    if ($_POST['action'] == 'request_rejected') {
        $reject_id = $_POST['id'];

        $select_query = "SELECT email, name FROM users WHERE id = ?";
        $stmt = $dbconn->prepare($select_query);
        $stmt->execute([$reject_id]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            $userMail = $user['email'];
            $username = $user['name'];

            $delete_query = "DELETE FROM users WHERE id = ?";
            $del_stmt = $dbconn->prepare($delete_query);
            $del_response = $del_stmt->execute([$reject_id]);

            if ($del_response) {
                $emailStatus = sendEmail(
                    $userMail,
                    $username,
                    'Sorry...Your Room Booking Request in AAHA Serenity Stay is Rejected!',
                    'Hi ' . htmlspecialchars($username) . ',<br>We are sorry to cancel your booking.',
                    'Hi there, sorry to cancel your booking.'
                );

                if ($emailStatus === true) {
                    echo 'Booking rejected and email sent.';
                } else {
                    echo $emailStatus;
                }
                exit();
            }
        } else {
            echo 'User not found.';
            exit();
        }
    }

    if ($_POST['action'] == 'cancel_booking') {
        $cid = $_POST['id'];

        // Fetch user details before deleting
        $select_query = "SELECT email, name FROM users WHERE id = ?";
        $stmt = $dbconn->prepare($select_query);
        $stmt->execute([$cid]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            $userMail = $user['email'];
            $username = $user['name'];

            // Delete the user
            $delete_query = "DELETE FROM users WHERE id = ?";
            $del_stmt = $dbconn->prepare($delete_query);
            $response = $del_stmt->execute([$cid]);

            if ($response) {
                // Send cancellation email
                $emailStatus = sendEmail(
                    $userMail,
                    $username,
                    'Your Booking at AAHA Serenity Stay has been Cancelled',
                    'Hi ' . htmlspecialchars($username) . ',<br>Your booking at AAHA Serenity Stay has been cancelled as per your request.<br>If you have any questions, please contact us.<br><br>Best regards,<br>AAHA Serenity Stay Team',
                    'Hi ' . $username . ', Your booking at AAHA Serenity Stay has been cancelled as per your request. If you have any questions, please contact us.'
                );

                echo $emailStatus === true ? 'success' : $emailStatus;
            } else {
                echo 'Failed to cancel booking.';
            }
        } else {
            echo 'User not found.';
        }
        exit();
    }

    // ------------------------------------------
    // CONTACT SUBMISSION ACTIONS
    // ------------------------------------------
    
    if ($_POST['action'] == 'mark_contact_read') {
        $contact_id = $_POST['id'];
        
        $query = "UPDATE contact_submissions SET status = 'read', read_at = NOW() WHERE id = ?";
        $stmt = $dbconn->prepare($query);
        $response = $stmt->execute([$contact_id]);
        
        if ($response) {
            echo 'success';
        } else {
            echo 'error';
        }
        exit();
    }

    if ($_POST['action'] == 'delete_contact') {
        $contact_id = $_POST['id'];
        
        $query = "DELETE FROM contact_submissions WHERE id = ?";
        $stmt = $dbconn->prepare($query);
        $response = $stmt->execute([$contact_id]);
        
        if ($response) {
            echo 'success';
        } else {
            echo 'error';
        }
        exit();
    }
}
?>