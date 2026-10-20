<link rel="shortcut icon" href="./assect/logo/logo.svg" type="image/x-icon">

<?php
include('dbconfig.php');
function daterange($first, $last, $step = '+1 day', $output_format = 'Y-m-d')
{ //if it was simple y example y-m-d then it will show 17 instead of 2017

    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);

    while ($current <= $last) {

        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    } //end of while loop

    return $dates; //returns a array
} //
$select = "SELECT checkin,checkout FROM users WHERE request_status=1";
//echo $select;
$statement = $dbconn->prepare($select);

$statement->execute();
$json_array = '';
$individual_dates = array();
if ($statement->rowCount() > 0) {
    $i = 0;
    while ($result = $statement->fetchObject()) {
        //print_r($result->checkin);
        $range[$i] = daterange($result->checkin, $result->checkout);

        $i++;
    }


    //converts the associative array  into a regular array
    foreach ($range as $ranges) {
        foreach ($ranges as $many_ranges) {
            $individual_dates[] = $many_ranges;
        }
    }
    // print_r($rowData);
    $json_array = json_encode($individual_dates);
    //print_r($json_array);
} else {
    $json_array = json_encode($individual_dates);
}

if (isset($_POST['submit'])) {
    //print_r($_POST);

    $name = $_POST['name'];
    $mobnumber = $_POST['mobnumber'];
    $aadhrno = $_POST['aadhrno'];
    $email = $_POST['email'];
    $fromdate = $_POST['checkin'];
    $dateformt1 = date("Y-m-d", strtotime($fromdate));
    $tilldate = $_POST['checkout'];
    $dateformt2 = date("Y-m-d", strtotime($tilldate));
    $notes = $_POST['notes'];

    // Handle Aadhar PDF upload
    $aadhaar_pdf = null;
    if (!isset($_FILES['aad_pdf']) || $_FILES['aad_pdf']['error'] != UPLOAD_ERR_OK) {
        // Handle the error, e.g. show a message or prevent form submission
        echo '<script>alert("Please upload a PDF document."); window.history.back();</script>';
        exit;
    } else {
        $uploadDir = 'uploads/aadhaar/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileTmpPath = $_FILES['aad_pdf']['tmp_name'];
        $fileName = uniqid('aadhaar_') . '.pdf';
        $destPath = $uploadDir . $fileName;
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $aadhaar_pdf = $destPath;
        }
    }

    $sql = "INSERT INTO users (name,mobnumber,email,aadhrno,checkin,checkout,notes,aadhaar_pdf) 
            VALUES (:name,:mobnumber,:email,:aadhrno,:dateformt1,:dateformt2,:notes,:aadhaar_pdf)";

    $insert = $dbconn->prepare($sql);

    $insert->bindParam(':name', $name, PDO::PARAM_STR);
    $insert->bindParam(':mobnumber', $mobnumber, PDO::PARAM_STR);
    $insert->bindParam(':aadhrno', $aadhrno, PDO::PARAM_STR);
    $insert->bindParam(':dateformt1', $dateformt1, PDO::PARAM_STR);
    $insert->bindParam(':dateformt2', $dateformt2, PDO::PARAM_STR);
    $insert->bindParam(':notes', $notes, PDO::PARAM_STR);
    $insert->bindParam(':email', $email, PDO::PARAM_STR);
    $insert->bindParam(':aadhaar_pdf', $aadhaar_pdf, PDO::PARAM_STR);

    $insert->execute();
    $lastInsertId = $dbconn->lastInsertId();

    //echo $lastInsertId;
    //die();
    if ($lastInsertId) {

        require 'mailsent/PHPMailerAutoload.php';                    //PHPMailerAutoload.php
        require 'mailsent/class.phpmailer.php';
        require 'mailsent/class.smtp.php';

        $mail = new PHPMailer(true);  // Enable exceptions

        try {
            $mail->isSMTP();                                         // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Gmail SMTP server
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'aahaserenitystays@gmail.com';            // SMTP username
            $mail->Password   = 'nzeq qlsh idtk nyyg';        // Use App Password for Gmail
            $mail->SMTPSecure = 'tls';                              // Enable TLS encryption
            $mail->Port       = 587;                                // TCP port to connect to

            $mail->setFrom('aahaserenitystays@gmail.com', 'Auro-Moon-Residency');
            $mail->addAddress('aahaserenitystays@gmail.com');
            $mail->addReplyTo($email, $name);
            
            $mail->isHTML(true);
            $mail->Subject = 'Enquiry for Room booking';
            $mail->Body    = 'Name: ' . $name . '<br>Phone No.: ' . $mobnumber . '<br>Email: ' . $email . '<br>';
            $mail->AltBody = 'This message from ' . $name . ' for enquire of the Room booking';

            $mail->send();
            echo '<script language="javascript">
            alert("Your Booking is placed successfully..!"); 
            window.location.href="./";</script>';
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo '<script language="javascript">alert("Something went wrong??..please check the booking details..")</script>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">
    <title>Auro Moon Residency || Booking</title>
    <!-- jquery date picker cdn -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css        "> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- css path -->
    <link rel="stylesheet" href="style.css">
    <style>
        .font-brand-serif {
            font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
        }
        .font-brand-sans {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        .form-control:focus {
            border-color: #DE9E36 !important;
            box-shadow: 0 0 0 3px rgba(222, 158, 54, 0.2) !important;
        }
    </style>
</head>

<body class="bg-[#FAF7F2] font-brand-sans text-[#142132] antialiased min-h-screen flex flex-col">
    <?php include('navbar.php') ?>

    <main class="flex-1 max-w-3xl w-full mx-auto px-4 sm:px-6 py-10 sm:py-16">
        
        <!-- Form Card -->
        <div class="bg-white rounded-3xl p-6 sm:p-9 md:p-10 border border-[#ECE5D8] shadow-[0_15px_40px_rgba(0,0,0,0.06)]">
            
            <!-- Header -->
            <div class="text-center mb-8 sm:mb-10">
                <p class="text-[#B88028] text-xs sm:text-sm font-bold tracking-[0.24em] uppercase mb-2 select-none">
                    RESERVATIONS
                </p>
                <h1 class="font-brand-serif text-3xl sm:text-4xl font-bold text-[#1A2839] leading-tight">
                    Book Your Stay
                </h1>
                <div class="w-12 h-1 bg-[#DE9E36] rounded-full mx-auto mt-3 mb-3"></div>
                <p class="text-xs sm:text-sm text-[#556270]">
                    Reserve the entire property for your family or friends in Pondicherry.
                </p>
            </div>

            <form action="#" method="POST" autocomplete="on" class="needs-validation" novalidate enctype="multipart/form-data">
                
                <!-- Row 1: Name & Mobile -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 mb-4">
                    <div>
                        <label for="name" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" class="form-control rounded-xl py-3 px-3.5 border-stone-200 text-sm shadow-none" placeholder="Enter your full name" required pattern="^[A-Za-z ]+$" />
                        <small class="invalid-feedback text-xs">Please enter your Name correctly (letters only).</small>
                    </div>
                    <div>
                        <label for="mob" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Mobile Number <span class="text-red-500">*</span></label>
                        <input type="tel" id="mob" name="mobnumber" class="form-control rounded-xl py-3 px-3.5 border-stone-200 text-sm shadow-none" placeholder="10-digit mobile number" pattern="[7-9]{1}[0-9]{9}" required />
                        <small class="invalid-feedback text-xs">Please enter a valid 10-digit Indian mobile number.</small>
                    </div>
                </div>

                <!-- Row 2: Email Address -->
                <div class="mb-4">
                    <label for="email" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="form-control rounded-xl py-3 px-3.5 border-stone-200 text-sm shadow-none" placeholder="name@example.com" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$" />
                    <small class="invalid-feedback text-xs">Please enter a valid Email Address ending with .com</small>
                </div>

                <!-- Row 3: Check-in & Check-out -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 mb-4">
                    <div>
                        <label for="check-in" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Check-In Date <span class="text-red-500">*</span></label>
                        <input type="text" id="check-in" name="checkin" class="checkInDate form-control rounded-xl py-3 px-3.5 border-stone-200 text-sm shadow-none" aria-describedby="check-in" required placeholder="Select Check-In Date" autocomplete="off">
                        <small class="invalid-feedback text-xs">Please select a Check-In date.</small>
                    </div>
                    <div>
                        <label for="check-out" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Check-Out Date <span class="text-red-500">*</span></label>
                        <input type="text" id="check-out" name="checkout" class="checkOutDate form-control rounded-xl py-3 px-3.5 border-stone-200 text-sm shadow-none" aria-describedby="check-out" required placeholder="Select Check-Out Date" autocomplete="off">
                        <small class="invalid-feedback text-xs">Please select a Check-Out date.</small>
                    </div>
                </div>

                <!-- Row 4: ID Document Upload -->
                <div class="mb-6">
                    <label for="aad_pdf" class="form-label text-xs sm:text-sm font-bold text-[#1A2839]">Government ID Document (PDF) <span class="text-red-500">*</span></label>
                    <input type="file" id="aad_pdf" name="aad_pdf" class="form-control rounded-xl py-2.5 px-3.5 border-stone-200 text-xs sm:text-sm shadow-none" accept="application/pdf" required />
                    <span class="text-[11px] text-gray-500 block mt-1">Accepted: Aadhaar, Driving Licence, Passport, PAN Card, Voter ID (PDF format)</span>
                    <small class="invalid-feedback text-xs">Please upload a valid PDF document.</small>
                </div>

                <input type="hidden" name='notes' value="Rooms are Booked">

                <!-- Submit Button -->
                <button type="submit" name="submit" class="w-full py-4 rounded-xl bg-[#E5A93C] hover:bg-[#d69829] text-[#1a140c] font-bold text-base sm:text-lg shadow-md hover:shadow-lg transition-all cursor-pointer border-0 flex items-center justify-center gap-2.5">
                    <i class="fa-regular fa-calendar-check text-lg"></i>
                    <span>Confirm Booking Request</span>
                </button>
            </form>

        </div>
    </main>
    <?php include('Footer.php') ?>
    <script>
        $(document).ready(function() {
            // var startDate;
            // var endDate;
            var disabledDates = '';
            $('.checkInDate').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 'new date()',
                autoclose: true,
                beforeShowDay: checkAvailability
            });
            $('.checkOutDate').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 'new date()',
                autoclose: true,
                beforeShowDay: checkAvailability
            });
            //   $('.checkInDate').change(function() {
            //     startDate = $(this).datepicker('getDate');
            //     $('.checkOutDate').datepicker('option', 'minDate', startDate);
            // });

            var disabledDates = <?php echo $json_array; ?>;
            //console.log(date);

            function checkAvailability(mydate) {
                var valreturn = true;
                var returnclass = "available";
                var checkdate = $.datepicker.formatDate('yy-mm-dd', mydate);
                for (var i = 0; i < disabledDates.length; i++) {
                    if (disabledDates[i] == checkdate) {
                        valreturn = false;
                        returnclass = "unavailable";
                    }
                }
                return [
                    valreturn, returnclass
                ];
            }

        });
    
    </script>
    <script>
    (function() {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    // Custom validation for name (no only spaces, only letters and spaces)
                    var nameInput = form.querySelector('#name');
                    var nameValue = nameInput.value.trim();
                    var namePattern = /^[A-Za-z ]+$/;
                    if (nameInput && (nameValue === "" || !namePattern.test(nameValue))) {
                        nameInput.setCustomValidity('Please enter your Name correctly (letters and spaces only)');
                    } else {
                        nameInput.setCustomValidity('');
                    }
                    // Custom validation for email (must end with .com)
                    var emailInput = form.querySelector('#email');
                    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/;
                    if (emailInput && !emailPattern.test(emailInput.value)) {
                        emailInput.setCustomValidity('Please enter a valid Email Address ending with .com (e.g., user@example.com)');
                    } else {
                        emailInput.setCustomValidity('');
                    }
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                // Real-time validation for name
                var nameInput = form.querySelector('#name');
                if (nameInput) {
                    function validateNameInput() {
                        var nameValue = nameInput.value.trim();
                        var namePattern = /^[A-Za-z ]+$/;
                        if (nameValue === "" || !namePattern.test(nameValue)) {
                            nameInput.setCustomValidity('Please enter your Name correctly (letters and spaces only)');
                        } else {
                            nameInput.setCustomValidity('');
                        }
                    }
                    nameInput.addEventListener('input', validateNameInput);
                    nameInput.addEventListener('paste', function() { setTimeout(validateNameInput, 0); });
                }
                // Real-time validation for email (must end with .com)
                var emailInput = form.querySelector('#email');
                if (emailInput) {
                    function validateEmailInput() {
                        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/;
                        if (!emailPattern.test(emailInput.value)) {
                            emailInput.setCustomValidity('Please enter a valid Email Address ending with .com (e.g., user@example.com)');
                        } else {
                            emailInput.setCustomValidity('');
                        }
                    }
                    emailInput.addEventListener('input', validateEmailInput);
                    emailInput.addEventListener('paste', function() { setTimeout(validateEmailInput, 0); });
                }
                // Real-time and paste validation for all fields
                var mobInput = form.querySelector('#mob');
                if (mobInput) {
                    function validateMobInput() {
                        var mobPattern = /^[7-9]{1}[0-9]{9}$/;
                        if (!mobPattern.test(mobInput.value)) {
                            mobInput.setCustomValidity('Please enter a valid Mobile Number');
                        } else {
                            mobInput.setCustomValidity('');
                        }
                    }
                    mobInput.addEventListener('input', validateMobInput);
                    mobInput.addEventListener('paste', function() { setTimeout(validateMobInput, 0); });
                }
                var aadInput = form.querySelector('#aad');
                if (aadInput) {
                    function validateAadInput() {
                        aadInput.setCustomValidity(''); // Optional, always valid
                    }
                    aadInput.addEventListener('input', validateAadInput);
                    aadInput.addEventListener('paste', function() { setTimeout(validateAadInput, 0); });
                }
                var checkinInput = form.querySelector('#check-in');
                if (checkinInput) {
                    function validateCheckinInput() {
                        if (checkinInput.value.trim() === "") {
                            checkinInput.setCustomValidity('Please select a Check-In date');
                        } else {
                            checkinInput.setCustomValidity('');
                        }
                    }
                    checkinInput.addEventListener('input', validateCheckinInput);
                    checkinInput.addEventListener('paste', function() { setTimeout(validateCheckinInput, 0); });
                }
                var checkoutInput = form.querySelector('#check-out');
                if (checkoutInput) {
                    function validateCheckoutInput() {
                        if (checkoutInput.value.trim() === "") {
                            checkoutInput.setCustomValidity('Please select a Check-Out date');
                        } else {
                            checkoutInput.setCustomValidity('');
                        }
                    }
                    checkoutInput.addEventListener('input', validateCheckoutInput);
                    checkoutInput.addEventListener('paste', function() { setTimeout(validateCheckoutInput, 0); });
                }
            });
    })();
    </script>
</body>

</html>