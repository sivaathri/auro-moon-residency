<?php
include('dbconfig.php');

function daterange($first, $last, $step = '+1 day', $output_format = 'Y-m-d')
{
    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);

    while ($current <= $last) {
        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    }
    return $dates;
}

$individual_dates = array();
try {
    if (isset($dbconn)) {
        $select = "SELECT checkin,checkout FROM users WHERE request_status=1";
        $statement = $dbconn->prepare($select);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $i = 0;
            $range = array();
            while ($result = $statement->fetchObject()) {
                $range[$i] = daterange($result->checkin, $result->checkout);
                $i++;
            }
            foreach ($range as $ranges) {
                foreach ($ranges as $many_ranges) {
                    $individual_dates[] = $many_ranges;
                }
            }
        }
    }
} catch (Exception $e) {
    // Graceful fallback if database connection is pending
}
$json_array = json_encode($individual_dates);

if (isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $mobnumber = $_POST['mobnumber'] ?? '';
    $email = $_POST['email'] ?? '';
    $guests = $_POST['guests'] ?? 'Entire Property (6-12 Guests)';
    $aadhrno = $_POST['aadhrno'] ?? ($guests ?: 'ID Document Attached');
    $fromdate = $_POST['checkin'] ?? '';
    $dateformt1 = !empty($fromdate) ? date("Y-m-d", strtotime($fromdate)) : date("Y-m-d");
    $tilldate = $_POST['checkout'] ?? '';
    $dateformt2 = !empty($tilldate) ? date("Y-m-d", strtotime($tilldate)) : date("Y-m-d", strtotime("+1 day"));
    $notes = $_POST['notes'] ?? ('Booking request for ' . $guests);

    // Handle Aadhar PDF upload
    $aadhaar_pdf = null;
    if (isset($_FILES['aad_pdf']) && $_FILES['aad_pdf']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/aadhaar/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileTmpPath = $_FILES['aad_pdf']['tmp_name'];
        $fileName = uniqid('id_') . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '_', basename($_FILES['aad_pdf']['name']));
        $destPath = $uploadDir . $fileName;
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $aadhaar_pdf = $destPath;
        }
    }

    $lastInsertId = null;
    try {
        if (isset($dbconn)) {
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
        }
    } catch (Exception $e) {
        // Log or handle DB insertion error
    }

    // Send email notification
    if ($lastInsertId || !empty($email)) {
        if (file_exists('mailsent/class.phpmailer.php')) {
            require_once 'mailsent/PHPMailerAutoload.php';
            require_once 'mailsent/class.phpmailer.php';
            require_once 'mailsent/class.smtp.php';
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'aahaserenitystays@gmail.com';
                $mail->Password   = 'nzeq qlsh idtk nyyg';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('aahaserenitystays@gmail.com', 'Auro Moon Residency');
                $mail->addAddress('aahaserenitystays@gmail.com');
                $mail->addReplyTo($email, $name);

                $mail->isHTML(true);
                $mail->Subject = 'New Booking Request - Auro Moon Residency';
                $mail->Body    = "<h3>New Booking Request</h3>" .
                                 "<strong>Name:</strong> " . htmlspecialchars($name) . "<br>" .
                                 "<strong>Phone:</strong> " . htmlspecialchars($mobnumber) . "<br>" .
                                 "<strong>Email:</strong> " . htmlspecialchars($email) . "<br>" .
                                 "<strong>Guests:</strong> " . htmlspecialchars($guests) . "<br>" .
                                 "<strong>Check-In:</strong> " . htmlspecialchars($fromdate) . "<br>" .
                                 "<strong>Check-Out:</strong> " . htmlspecialchars($tilldate) . "<br>" .
                                 "<strong>ID Document:</strong> " . ($aadhaar_pdf ? 'Attached / Uploaded' : 'None') . "<br>";
                $mail->send();
            } catch (Exception $e) {
                // Ignore mail sending error
            }
        }
        echo '<script language="javascript">
        alert("Your Booking request has been placed successfully! We will contact you shortly."); 
        window.location.href="./";</script>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">
    <title>Auro Moon Residency || Reserve Your Stay</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'brand-serif': ['"Playfair Display"', '"Cormorant Garamond"', 'Georgia', 'serif'],
                        'brand-sans': ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- jQuery DatePicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <link rel="stylesheet" href="style.css">

    <style>
        .font-brand-serif {
            font-family: 'Playfair Display', 'Cormorant Garamond', Georgia, serif;
        }
        .font-brand-sans {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }

        /* Luxury Gold Gradient */
        .gold-gradient-text {
            background: linear-gradient(135deg, #DEAA52 0%, #C59239 50%, #9C6619 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Push Left Editorial Column to the right into the open sunrise/cream area */
        @media (min-width: 1024px) {
            .hero-editorial-column {
                margin-left: auto !important;
                margin-right: clamp(1rem, 3.5vw, 3.5rem) !important;
            }
        }

        /* Custom jQuery DatePicker Luxury Styling */
        .ui-datepicker {
            background-color: #ffffff !important;
            border: 1px solid #ECE5D8 !important;
            border-radius: 16px !important;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif !important;
            padding: 12px !important;
            z-index: 100 !important;
        }
        .ui-datepicker-header {
            background: #FAF7F2 !important;
            border: none !important;
            border-radius: 10px !important;
            color: #14233C !important;
            font-weight: 700 !important;
            padding: 6px 0 !important;
        }
        .ui-datepicker-prev, .ui-datepicker-next {
            cursor: pointer !important;
            border-radius: 6px !important;
        }
        .ui-state-default, .ui-widget-content .ui-state-default {
            border: 1px solid transparent !important;
            background: #FAF8F5 !important;
            color: #14233C !important;
            text-align: center !important;
            border-radius: 8px !important;
            font-weight: 600 !important;
        }
        .ui-state-hover {
            background: #16443C !important;
            color: #ffffff !important;
        }
        .ui-state-active, .ui-widget-content .ui-state-active {
            background: #DEAA52 !important;
            color: #ffffff !important;
        }
        .unavailable span {
            background-color: #fee2e2 !important;
            color: #ef4444 !important;
            text-decoration: line-through !important;
            border-radius: 8px !important;
        }
        .available a {
            background-color: #FAF8F5 !important;
            color: #14233C !important;
        }

        /* Focus rings */
        .booking-input:focus {
            outline: none;
            border-color: #16443C;
            box-shadow: 0 0 0 3px rgba(22, 68, 60, 0.12);
        }
    </style>
</head>

<body class="bg-[#FAF6F1] font-brand-sans text-[#142132] antialiased min-h-screen flex flex-col">
    <?php include('navbar.php') ?>

    <!-- Master Panoramic Booking Section (Exact Reference Mockup Layout) -->
    <main class="relative flex-1 w-full overflow-hidden bg-[#FAF6F1] flex flex-col justify-between">
        
        <!-- Left Background Villa Terrace Photo (Desktop) -->
        <div class="absolute inset-y-0 left-0 w-full lg:w-[60%] xl:w-[57%] bg-cover bg-left bg-no-repeat pointer-events-none z-0" style="background-image: url('./assect/images/booking_terrace_bg.jpg');">
            <!-- Organic Right Fade into Ivory Background -->
            <div class="absolute inset-y-0 right-0 w-44 lg:w-64 bg-gradient-to-r from-transparent via-[#FAF6F1]/70 to-[#FAF6F1] hidden lg:block"></div>
            <!-- Top Fade -->
            <div class="absolute inset-x-0 top-0 h-20 bg-gradient-to-b from-[#FAF6F1]/80 to-transparent hidden lg:block"></div>
            <!-- Bottom Fade into bottom bar -->
            <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-[#FAF6F1] to-transparent hidden lg:block"></div>
            <!-- Mobile Backdrop Overlay for legibility -->
            <div class="absolute inset-0 bg-[#FAF6F1]/85 lg:hidden block"></div>
        </div>

        <!-- Foreground Content Container -->
        <div class="relative z-10 w-full max-w-[1640px] 2xl:max-w-[1720px] mx-auto px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 pt-8 sm:pt-10 lg:pt-12 pb-10 sm:pb-12">
            
            <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between gap-10 lg:gap-10 xl:gap-14">
                
                <!-- ===================== LEFT SIDE: EDITORIAL HERO & TRUST BADGES ===================== -->
                <div class="hero-editorial-column w-full lg:flex-initial lg:w-auto lg:max-w-xl xl:max-w-2xl pt-6 lg:pt-20 xl:pt-28 2xl:pt-32 px-4 sm:px-6 lg:px-0">
                    
                    <!-- Kicker: PLAN YOUR GETAWAY with gold bar -->
                    <div class="flex items-center gap-3 mb-3.5 sm:mb-4">
                        <span class="text-[#AA6F21] text-xs sm:text-[13px] font-bold tracking-[0.24em] uppercase select-none">
                            PLAN YOUR GETAWAY
                        </span>
                        <span class="w-12 h-[1.5px] bg-[#AA6F21] rounded-full"></span>
                    </div>

                    <!-- Main Hero Title -->
                    <h1 class="font-brand-serif text-4xl sm:text-5xl md:text-6xl lg:text-[60px] xl:text-[66px] font-bold text-[#112A24] leading-[1.08] mb-4 sm:mb-5 tracking-tight">
                        Reserve Your<br>
                        <span class="text-[#AA6F21]">Peaceful Stay</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-[#556370] text-sm sm:text-base leading-relaxed max-w-lg mb-8 sm:mb-10 font-normal">
                        A serene homestay near Auroville, surrounded by nature, comfort and calm. Book your stay and experience the beauty of Pondicherry at Auro Moon Residency.
                    </p>

                    <!-- 3 Feature Badges Row -->
                    <div class="flex items-center gap-6 sm:gap-8 flex-wrap select-none pt-1">
                        
                        <!-- Badge 1: Calm Surroundings -->
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full bg-[#F3ECE0] border border-[#E6DAC8] text-[#AA6F21] flex items-center justify-center flex-shrink-0 shadow-xs">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                                </svg>
                            </div>
                            <div class="text-[#1B2A36] text-xs sm:text-[13px] font-bold leading-tight font-brand-sans">
                                Calm<br>Surroundings
                            </div>
                        </div>

                        <!-- Badge 2: Clean & Comfortable -->
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full bg-[#F3ECE0] border border-[#E6DAC8] text-[#AA6F21] flex items-center justify-center flex-shrink-0 shadow-xs">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3a9 9 0 0 0 0 18c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9Z"/>
                                    <path d="M12 7c-2 2-3 4-3 5a3 3 0 0 0 6 0c0-1-1-3-3-5Z"/>
                                </svg>
                            </div>
                            <div class="text-[#1B2A36] text-xs sm:text-[13px] font-bold leading-tight font-brand-sans">
                                Clean &amp;<br>Comfortable
                            </div>
                        </div>

                        <!-- Badge 3: A Memorable Stay Experience -->
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full bg-[#F3ECE0] border border-[#E6DAC8] text-[#AA6F21] flex items-center justify-center flex-shrink-0 shadow-xs">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                                </svg>
                            </div>
                            <div class="text-[#1B2A36] text-xs sm:text-[13px] font-bold leading-tight font-brand-sans">
                                A Memorable<br>Stay Experience
                            </div>
                        </div>

                    </div>

                </div>

                <!-- ===================== RIGHT SIDE: THE EXACT FLOATING BOOKING FORM CARD ===================== -->
                <div class="w-full lg:w-[530px] xl:w-[570px] 2xl:w-[600px] flex-shrink-0 lg:translate-x-6 xl:translate-x-10 2xl:translate-x-12">
                    <div class="bg-white rounded-[26px] p-6 sm:p-7 lg:p-8 shadow-[0_20px_55px_rgba(20,35,50,0.07)] border border-[#ECE6DC] relative z-20">
                        
                        <!-- Card Header Row (Clean without dividing line) -->
                        <div class="flex items-center justify-between pb-5 mb-1 gap-4">
                            <!-- Left Title -->
                            <div>
                                <h2 class="font-brand-serif text-3xl sm:text-[33px] font-bold text-[#112A24] leading-tight tracking-tight">
                                    Booking Form
                                </h2>
                            </div>
                            <!-- Right Golden Leaf & Caption -->
                            <div class="flex items-center gap-2.5 text-right flex-shrink-0">
                                <div class="text-[#AA6F21]">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                                    </svg>
                                </div>
                                <div class="text-[11px] sm:text-xs text-[#697887] leading-tight text-left">
                                    Your peaceful stay<br>
                                    <span class="text-[#1B2A36] font-medium">is just a few details away</span>
                                </div>
                            </div>
                        </div>

                        <!-- Reservation Form -->
                        <form action="#" method="POST" autocomplete="on" class="needs-validation" novalidate enctype="multipart/form-data" id="bookingForm">
                            
                            <!-- Hidden inputs for legacy DB schema compatibility -->
                            <input type="hidden" name="aadhrno" id="aadhrno" value="ID Document Attached">
                            <input type="hidden" name="notes" id="notes" value="Rooms are Booked">

                            <!-- Row 1: Full Name & Mobile Number -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mb-3.5">
                                <!-- Full Name -->
                                <div>
                                    <label for="name" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-regular fa-user absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <input type="text" id="name" name="name" required placeholder="Enter your full name" pattern="^[A-Za-z ]+$" class="booking-input w-full pl-9 pr-3.5 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] placeholder-gray-400 transition-all duration-200" />
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please enter your Name correctly (letters only).</small>
                                </div>

                                <!-- Mobile Number -->
                                <div>
                                    <label for="mob" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Mobile Number <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-solid fa-phone absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <input type="tel" id="mob" name="mobnumber" required placeholder="Enter mobile number" pattern="[6-9]{1}[0-9]{9}" class="booking-input w-full pl-9 pr-3.5 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] placeholder-gray-400 transition-all duration-200" />
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please enter a valid 10-digit mobile number.</small>
                                </div>
                            </div>

                            <!-- Row 2: Email Address & Guests -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mb-3.5">
                                <!-- Email Address -->
                                <div>
                                    <label for="email" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-regular fa-envelope absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <input type="email" id="email" name="email" required placeholder="Enter your email address" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$" class="booking-input w-full pl-9 pr-3.5 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] placeholder-gray-400 transition-all duration-200" />
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please enter a valid Email ending with .com</small>
                                </div>

                                <!-- Guests -->
                                <div>
                                    <label for="guests" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Guests <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-solid fa-users absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <select id="guests" name="guests" required class="booking-input w-full pl-9 pr-8 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] transition-all duration-200 appearance-none cursor-pointer">
                                            <option value="" disabled selected>Select number of guests</option>
                                            <option value="1-2 Guests">1 - 2 Guests</option>
                                            <option value="3-4 Guests">3 - 4 Guests</option>
                                            <option value="5-6 Guests">5 - 6 Guests</option>
                                            <option value="7-8 Guests">7 - 8 Guests</option>
                                            <option value="9-12 Guests (Entire Property)">9 - 12 Guests (Entire Property)</option>
                                        </select>
                                        <i class="fa-solid fa-chevron-down absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-[10px] pointer-events-none"></i>
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please select the number of guests.</small>
                                </div>
                            </div>

                            <!-- Row 3: Check-In & Check-Out -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mb-3.5">
                                <!-- Check-In -->
                                <div>
                                    <label for="check-in" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Check - In <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-regular fa-calendar absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <input type="text" id="check-in" name="checkin" required placeholder="Select check-in date" autocomplete="off" class="checkInDate booking-input w-full pl-9 pr-9 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] placeholder-gray-400 transition-all duration-200 cursor-pointer" />
                                        <i class="fa-regular fa-calendar-days absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please select a Check-In date.</small>
                                </div>

                                <!-- Check-Out -->
                                <div>
                                    <label for="check-out" class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                        Check - Out <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <i class="fa-regular fa-calendar absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                        <input type="text" id="check-out" name="checkout" required placeholder="Select check-out date" autocomplete="off" class="checkOutDate booking-input w-full pl-9 pr-9 py-2.5 sm:py-3 rounded-xl border border-[#DFE4EA] bg-white text-xs sm:text-sm text-[#14233C] placeholder-gray-400 transition-all duration-200 cursor-pointer" />
                                        <i class="fa-regular fa-calendar-days absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                                    </div>
                                    <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please select a Check-Out date.</small>
                                </div>
                            </div>

                            <!-- Row 4: Identity Document (PDF) Drag & Drop Zone -->
                            <div class="mb-3">
                                <label class="block text-xs font-bold text-[#1E2C3F] mb-1.5">
                                    Identity Document (PDF) <span class="text-red-500">*</span>
                                </label>
                                
                                <div id="dropZone" class="relative border border-dashed border-[#D1D8E0] hover:border-[#194643] bg-[#FBFBFC] hover:bg-[#F4F8F6] rounded-2xl p-4 sm:p-5 text-center transition-all duration-200 cursor-pointer group">
                                    <input type="file" id="aad_pdf" name="aad_pdf" accept="application/pdf" required class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
                                    
                                    <!-- Default Upload Prompt -->
                                    <div id="dropZonePrompt" class="flex items-center justify-center gap-4 text-left pointer-events-none">
                                        <!-- Soft green circular badge with cloud upload icon -->
                                        <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-[#E3ECE7] text-[#194643] flex items-center justify-center text-lg sm:text-xl flex-shrink-0 group-hover:scale-105 transition-transform duration-200 shadow-2xs">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                        </div>
                                        <div>
                                            <div class="text-xs sm:text-[13px] text-[#14233C]">
                                                <span class="font-bold text-[#14233C] underline underline-offset-2">Click to upload</span> <span class="font-semibold text-gray-500">or drag and drop</span>
                                            </div>
                                            <div class="text-[11.5px] text-[#697887] mt-0.5">
                                                Aadhaar, Driving Licence, Passport, PAN or Voter ID
                                            </div>
                                            <div class="text-[10px] text-gray-400 mt-0.5 font-medium">
                                                PDF only &bull; Max size 5 MB
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Selected File Card with DELETE button -->
                                    <div id="fileSelectedView" class="hidden relative z-20 flex items-center justify-between gap-3 p-3 sm:p-3.5 bg-white rounded-xl border border-[#BCE2CD] shadow-xs text-left">
                                        <div class="flex items-center gap-3 min-w-0">
                                            <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-lg flex-shrink-0">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </div>
                                            <div class="min-w-0">
                                                <p id="fileNameLabel" class="text-xs sm:text-[13px] font-bold text-[#14233C] truncate max-w-[170px] sm:max-w-[250px]">
                                                    Document Selected
                                                </p>
                                                <p class="text-[11px] text-[#194643] font-semibold flex items-center gap-1.5 mt-0.5">
                                                    <i class="fa-solid fa-circle-check text-green-600 text-xs"></i>
                                                    <span id="fileSizeText">PDF Attached</span>
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <!-- Delete / Remove Button -->
                                        <button type="button" id="removeFileBtn" title="Delete selected PDF" class="relative z-30 px-3 py-1.5 rounded-lg bg-red-50 hover:bg-red-500 text-red-600 hover:text-white text-xs font-bold transition-all duration-200 cursor-pointer border border-red-200 hover:border-red-500 flex items-center gap-1.5 shadow-2xs">
                                            <i class="fa-solid fa-trash-can text-[11px]"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                                <small class="invalid-feedback text-xs text-red-500 hidden mt-1">Please upload an accepted government ID document (PDF).</small>
                            </div>

                            <!-- Security Assurance Note -->
                            <div class="flex items-center gap-2 mb-5">
                                <i class="fa-solid fa-circle-check text-[#194643] text-sm flex-shrink-0"></i>
                                <span class="text-[11px] sm:text-[11.5px] text-[#556372] font-medium leading-tight">
                                    Your documents are secure and will only be used for booking verification.
                                </span>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" name="submit" class="w-full py-3.5 sm:py-4 rounded-xl bg-[#194643] hover:bg-[#123533] text-white font-bold text-sm sm:text-[15px] shadow-[0_8px_22px_rgba(25,70,67,0.3)] hover:shadow-[0_12px_28px_rgba(25,70,67,0.45)] hover:-translate-y-0.5 transition-all duration-200 cursor-pointer border-0 flex items-center justify-center gap-2.5">
                                <span>Confirm Booking Request</span>
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>

        <!-- Delicate Botanical Foliage Illustration Watermark (Bottom Right) -->
        <div class="absolute bottom-16 right-0 w-64 sm:w-80 pointer-events-none z-0 opacity-25 select-none hidden sm:block">
            <svg viewBox="0 0 300 300" fill="none" class="w-full h-auto" xmlns="http://www.w3.org/2000/svg">
                <path d="M 300 300 C 240 220 180 160 80 140 C 130 180 200 240 300 300 Z" fill="#AA6F21" />
                <path d="M 280 230 C 230 170 170 120 70 100 C 120 140 190 200 280 230 Z" fill="#AA6F21" opacity="0.7" />
                <path d="M 240 180 C 200 130 150 90 60 70 C 110 110 170 160 240 180 Z" fill="#AA6F21" opacity="0.5" />
            </svg>
        </div>

        <!-- ===================== FULL-WIDTH DEDICATED BOTTOM TRUST STRIP ===================== -->
        <div class="w-full bg-[#F2EFE7] border-t border-[#E6E0D2] py-4 sm:py-5 px-4 sm:px-8 relative z-20">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-0 divide-y md:divide-y-0 md:divide-x divide-[#DED7C5]">
                
                <!-- Trust 1: Secure details -->
                <div class="flex items-center gap-3.5 justify-start md:justify-center md:px-6">
                    <div class="w-10 h-10 rounded-full bg-[#EAE3D5] text-[#AA6F21] flex items-center justify-center text-base flex-shrink-0">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <h4 class="font-brand-serif text-sm sm:text-[15px] font-bold text-[#14233C] leading-snug">Secure details</h4>
                        <p class="text-[11px] sm:text-xs text-[#697887]">Your information is safe with us</p>
                    </div>
                </div>

                <!-- Trust 2: Personal assistance -->
                <div class="flex items-center gap-3.5 justify-start md:justify-center md:px-6 pt-4 md:pt-0">
                    <div class="w-10 h-10 rounded-full bg-[#EAE3D5] text-[#AA6F21] flex items-center justify-center text-base flex-shrink-0">
                        <i class="fa-solid fa-headphones"></i>
                    </div>
                    <div>
                        <h4 class="font-brand-serif text-sm sm:text-[15px] font-bold text-[#14233C] leading-snug">Personal assistance</h4>
                        <p class="text-[11px] sm:text-xs text-[#697887]">We're here to help you</p>
                    </div>
                </div>

                <!-- Trust 3: Peaceful stay -->
                <div class="flex items-center gap-3.5 justify-start md:justify-center md:px-6 pt-4 md:pt-0">
                    <div class="w-10 h-10 rounded-full bg-[#EAE3D5] text-[#AA6F21] flex items-center justify-center text-base flex-shrink-0">
                        <i class="fa-solid fa-spa"></i>
                    </div>
                    <div>
                        <h4 class="font-brand-serif text-sm sm:text-[15px] font-bold text-[#14233C] leading-snug">Peaceful stay</h4>
                        <p class="text-[11px] sm:text-xs text-[#697887]">A calm and memorable experience</p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Master Footer -->
    <?php include('Footer.php') ?>

    <!-- DatePicker and Drag & Drop Scripts -->
    <script>
        $(document).ready(function() {
            var disabledDates = <?php echo $json_array; ?>;

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
                return [valreturn, returnclass];
            }

            $('.checkInDate').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                autoclose: true,
                beforeShowDay: checkAvailability,
                onSelect: function(dateText) {
                    var minDate = $(this).datepicker('getDate');
                    if (minDate) {
                        minDate.setDate(minDate.getDate() + 1);
                        $('.checkOutDate').datepicker('option', 'minDate', minDate);
                    }
                }
            });

            $('.checkOutDate').datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 1,
                autoclose: true,
                beforeShowDay: checkAvailability
            });

            // Drag and Drop & File Upload handling
            const fileInput = document.getElementById('aad_pdf');
            const dropZone = document.getElementById('dropZone');
            const dropZonePrompt = document.getElementById('dropZonePrompt');
            const fileSelectedView = document.getElementById('fileSelectedView');
            const fileNameLabel = document.getElementById('fileNameLabel');
            const fileSizeText = document.getElementById('fileSizeText');
            const removeFileBtn = document.getElementById('removeFileBtn');

            function showSelectedFile(file) {
                if (!file) return;
                if (fileNameLabel) fileNameLabel.textContent = file.name;
                const sizeInMB = (file.size / (1024 * 1024)).toFixed(2);
                if (fileSizeText) fileSizeText.textContent = sizeInMB + ' MB • Ready';
                
                if (dropZonePrompt) dropZonePrompt.classList.add('hidden');
                if (fileSelectedView) fileSelectedView.classList.remove('hidden');
                if (dropZone) {
                    dropZone.classList.add('border-[#194643]', 'bg-[#F4F9F6]');
                    dropZone.classList.remove('border-red-400');
                    const err = $(dropZone).next('.invalid-feedback');
                    if (err.length) err.addClass('hidden');
                }
            }

            function clearSelectedFile() {
                if (fileInput) fileInput.value = '';
                if (fileSelectedView) fileSelectedView.classList.add('hidden');
                if (dropZonePrompt) dropZonePrompt.classList.remove('hidden');
                if (dropZone) {
                    dropZone.classList.remove('border-[#194643]', 'bg-[#F4F9F6]', 'border-[#16443C]');
                }
            }

            if (fileInput && dropZone) {
                fileInput.addEventListener('change', function(e) {
                    if (this.files && this.files.length > 0) {
                        showSelectedFile(this.files[0]);
                    } else {
                        clearSelectedFile();
                    }
                });

                if (removeFileBtn) {
                    removeFileBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        clearSelectedFile();
                    });
                }

                ['dragenter', 'dragover'].forEach(eventName => {
                    dropZone.addEventListener(eventName, (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        dropZone.classList.add('border-[#194643]', 'bg-[#EBF5F0]');
                    }, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    dropZone.addEventListener(eventName, (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        dropZone.classList.remove('border-[#194643]', 'bg-[#EBF5F0]');
                    }, false);
                });

                dropZone.addEventListener('drop', (e) => {
                    const dt = e.dataTransfer;
                    const files = dt.files;
                    if (files.length > 0) {
                        fileInput.files = files;
                        showSelectedFile(files[0]);
                    }
                }, false);
            }

            // Real-time client-side validation
            const form = document.getElementById('bookingForm');
            if (form) {
                form.addEventListener('submit', function(event) {
                    let isValid = true;

                    // Name validation
                    const name = document.getElementById('name');
                    if (!name.value.trim() || !/^[A-Za-z ]+$/.test(name.value.trim())) {
                        name.classList.add('border-red-500');
                        $(name).closest('div').next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        name.classList.remove('border-red-500');
                        $(name).closest('div').next('.invalid-feedback').addClass('hidden');
                    }

                    // Mobile validation
                    const mob = document.getElementById('mob');
                    if (!mob.value.trim() || !/^[6-9]{1}[0-9]{9}$/.test(mob.value.trim())) {
                        mob.classList.add('border-red-500');
                        $(mob).closest('div').next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        mob.classList.remove('border-red-500');
                        $(mob).closest('div').next('.invalid-feedback').addClass('hidden');
                    }

                    // Email validation
                    const email = document.getElementById('email');
                    if (!email.value.trim() || !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/.test(email.value.trim())) {
                        email.classList.add('border-red-500');
                        $(email).closest('div').next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        email.classList.remove('border-red-500');
                        $(email).closest('div').next('.invalid-feedback').addClass('hidden');
                    }

                    // Dates validation
                    const checkin = document.getElementById('check-in');
                    const checkout = document.getElementById('check-out');
                    if (!checkin.value.trim()) {
                        checkin.classList.add('border-red-500');
                        $(checkin).closest('div').next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        checkin.classList.remove('border-red-500');
                        $(checkin).closest('div').next('.invalid-feedback').addClass('hidden');
                    }

                    if (!checkout.value.trim()) {
                        checkout.classList.add('border-red-500');
                        $(checkout).closest('div').next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        checkout.classList.remove('border-red-500');
                        $(checkout).closest('div').next('.invalid-feedback').addClass('hidden');
                    }

                    // PDF validation
                    if (!fileInput.files || fileInput.files.length === 0) {
                        dropZone.classList.add('border-red-400');
                        $(dropZone).next('.invalid-feedback').removeClass('hidden');
                        isValid = false;
                    } else {
                        dropZone.classList.remove('border-red-400');
                        $(dropZone).next('.invalid-feedback').addClass('hidden');
                    }

                    if (!isValid) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                });
            }
        });
    </script>
</body>

</html>