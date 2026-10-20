<?php
session_start();
include('dbconfig.php');
require_once __DIR__ . '/setup_login_assets.php';

$message = '';
$email = '';

if (isset($_POST['submit'])) {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    $query = "SELECT * FROM tbladmin WHERE LOWER(TRIM(admin_email)) = LOWER(:email) AND TRIM(admin_pwd) = :passWord LIMIT 1";
    $run_query = $dbconn->prepare($query);
    $run_query->bindParam(':email', $email, PDO::PARAM_STR);
    $run_query->bindParam(':passWord', $password, PDO::PARAM_STR);
    $run_query->execute();
    $admin = $run_query->fetch(PDO::FETCH_ASSOC);
    
    if ($admin) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_email'] = $admin['admin_email'];
        header('Location: Admin.php');
        exit();
    } else {
        $message = 'Invalid email or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auro Moon Residency || Admin Portal</title>
    <link rel="shortcut icon" href="./assect/logo/auro_moon_logo.png" type="image/png">

    <!-- Google Fonts: Playfair Display, Plus Jakarta Sans, Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-amber: #e5a43b;
            --primary-amber-dark: #d69324;
            --dark-teal: #0d6b59;
            --dark-teal-hover: #084c3e;
            --text-heading: #172422;
            --text-muted: #6b7280;
            --input-border: #e2e8f0;
            --input-icon: #3e685f;
            --card-radius: 22px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Poppins', sans-serif;
            background-color: #efe8db;
            background-image: url('./assect/images/login_bg.jpg?v=3');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
            position: relative;
        }

        /* Subtle dark gradient overlay to ensure contrast on ultra-wide screens */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.08);
            pointer-events: none;
            z-index: 1;
        }

        /* Back to website button */
        .back-home-badge {
            position: fixed;
            top: 20px;
            left: 24px;
            z-index: 20;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.95);
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            color: #1a2e2a;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.25s ease;
        }

        .back-home-badge:hover {
            background: #ffffff;
            color: var(--dark-teal);
            transform: translateX(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }

        /* Master Card Container */
        .login-card-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1060px;
            border-radius: var(--card-radius);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.22), 0 5px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            background: #ffffff;
            display: flex;
            flex-direction: row;
            min-height: 520px;
        }

        /* Left Side: Luxury Villa Visual */
        .card-visual-side {
            flex: 1.05;
            background-color: #0e2a26;
            background-image: url('./assect/images/login_card_left.jpg?v=3');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
            min-height: 520px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        /* Right Side: Clean White Portal Form */
        .card-form-side {
            flex: 1;
            background-color: #ffffff;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 44px 48px;
            z-index: 2;
        }

        /* Tropical Leaf Watermark in Bottom-Right Corner */
        .watermark-overlay {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 190px;
            height: auto;
            pointer-events: none;
            opacity: 0.9;
            z-index: 1;
        }

        .form-content-inner {
            position: relative;
            z-index: 3;
            width: 100%;
            max-width: 380px;
            margin: 0 auto;
        }

        /* Brand Logo */
        .brand-logo-container {
            text-align: center;
            margin-bottom: 12px;
        }

        .brand-logo-img {
            height: 58px;
            width: auto;
            object-fit: contain;
            display: inline-block;
        }

        /* Titles */
        .portal-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--text-heading);
            text-align: center;
            margin-bottom: 2px;
            letter-spacing: -0.3px;
        }

        .portal-subtitle {
            font-size: 13.5px;
            color: var(--text-muted);
            text-align: center;
            font-weight: 500;
            margin-bottom: 24px;
        }

        /* Alert error message */
        .custom-error-alert {
            background-color: #fde8e8;
            border: 1px solid #f8b4b4;
            color: #9b1c1c;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 13.5px;
            font-weight: 500;
            text-align: center;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-4px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Form Inputs */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .input-wrapper {
            position: relative;
            width: 100%;
        }

        .input-icon-left {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--input-icon);
            font-size: 15px;
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .custom-form-input {
            width: 100%;
            height: 48px;
            background-color: #fafbfd;
            border: 1.5px solid var(--input-border);
            border-radius: 10px;
            padding: 10px 16px 10px 44px;
            font-size: 14px;
            font-weight: 500;
            color: #1f2937;
            outline: none;
            transition: all 0.25s ease;
        }

        .custom-form-input::placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        .custom-form-input:focus {
            background-color: #ffffff;
            border-color: var(--primary-amber);
            box-shadow: 0 0 0 3.5px rgba(229, 164, 59, 0.16);
        }

        .custom-form-input:focus + .input-icon-left {
            color: var(--dark-teal);
        }

        /* Password with show/hide toggle */
        .password-input {
            padding-right: 44px;
        }

        .toggle-pwd-btn {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #9ca3af;
            cursor: pointer;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            transition: color 0.2s ease;
        }

        .toggle-pwd-btn:hover {
            color: #4b5563;
        }

        /* Form Options Row: Remember me + Forgot password */
        .form-options-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 2px;
            margin-bottom: 8px;
            font-size: 13.5px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #374151;
            font-weight: 500;
            cursor: pointer;
            user-select: none;
            margin: 0;
        }

        .remember-label input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--dark-teal);
            cursor: pointer;
            border-radius: 4px;
        }

        .forgot-link {
            color: var(--dark-teal);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: var(--dark-teal-hover);
            text-decoration: underline;
        }

        /* Golden Amber Login Button */
        .btn-golden-submit {
            width: 100%;
            height: 48px;
            background: linear-gradient(135deg, #e8a838 0%, #db9220 100%);
            color: #ffffff;
            font-size: 15.5px;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 10px 22px rgba(229, 164, 59, 0.38);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.25s ease;
            margin-top: 4px;
        }

        .btn-golden-submit:hover {
            background: linear-gradient(135deg, #e09f30 0%, #ce8717 100%);
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(229, 164, 59, 0.48);
            filter: brightness(1.02);
        }

        .btn-golden-submit:active {
            transform: translateY(0);
            box-shadow: 0 6px 14px rgba(229, 164, 59, 0.35);
        }

        /* Responsive Breakpoints */
        @media (max-width: 900px) {
            .login-card-wrapper {
                flex-direction: column;
                max-width: 480px;
            }

            .card-visual-side {
                min-height: 280px;
                flex: none;
            }

            .card-form-side {
                padding: 34px 28px;
            }

            .watermark-overlay {
                width: 130px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 12px;
            }

            .card-visual-side {
                min-height: 220px;
            }

            .card-form-side {
                padding: 28px 20px;
            }

            .portal-title {
                font-size: 22px;
            }

            .back-home-badge {
                top: 12px;
                left: 12px;
                font-size: 12px;
                padding: 5px 12px;
            }
        }
    </style>
</head>

<body>

    <!-- Back to public website button -->
    <a href="./" class="back-home-badge" title="Go back to the website">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Website</span>
    </a>

    <!-- Exact UI Login Card -->
    <div class="login-card-wrapper">

        <!-- Left Column: Illuminated Villa Visual + Welcome Back + Badges -->
        <div class="card-visual-side" aria-label="Auro Moon Residency Villa Exterior"></div>

        <!-- Right Column: Admin Portal Authentication -->
        <div class="card-form-side">

            <!-- Faint Tropical Leaf Watermark in bottom right -->
            <img src="./assect/images/login_watermark.png" alt="" class="watermark-overlay" onerror="this.style.display='none';">

            <div class="form-content-inner">

                <!-- AM Logo -->
                <div class="brand-logo-container">
                    <img src="./assect/logo/auro_moon_logo.png" alt="Auro Moon Residency Logo" class="brand-logo-img">
                </div>

                <!-- Portal Title -->
                <h1 class="portal-title">Auro Moon Residency</h1>
                <p class="portal-subtitle">Admin Portal</p>

                <!-- Error Message Alert -->
                <?php if (!empty($message)): ?>
                    <div class="custom-error-alert" role="alert">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span><?php echo htmlspecialchars($message); ?></span>
                    </div>
                <?php endif; ?>

                <!-- Form -->
                <form method="POST" action="" class="login-form" autocomplete="on">

                    <!-- Email Input -->
                    <div class="input-wrapper">
                        <i class="fa-solid fa-envelope input-icon-left"></i>
                        <input 
                            type="email" 
                            name="email" 
                            id="adminEmail"
                            class="custom-form-input" 
                            placeholder="Email Address" 
                            value="<?php echo htmlspecialchars($email); ?>" 
                            required 
                            autofocus
                        >
                    </div>

                    <!-- Password Input with Toggle -->
                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock input-icon-left"></i>
                        <input 
                            type="password" 
                            name="password" 
                            id="adminPassword" 
                            class="custom-form-input password-input" 
                            placeholder="Password" 
                            required
                        >
                        <button 
                            type="button" 
                            class="toggle-pwd-btn" 
                            id="togglePasswordBtn" 
                            title="Show or hide password"
                            aria-label="Toggle password visibility"
                        >
                            <i class="fa-regular fa-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>

                    <!-- Options Row -->
                    <div class="form-options-row">
                        <label class="remember-label" for="rememberMe">
                            <input type="checkbox" name="remember-me" id="rememberMe">
                            <span>Remember me</span>
                        </label>
                        <a href="forgot-password.php" class="forgot-link">Forgot password?</a>
                    </div>

                    <!-- Golden Amber Submit Button -->
                    <button type="submit" name="submit" class="btn-golden-submit">
                        <span>Login</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                </form>

            </div>
        </div>

    </div>

    <!-- Interactive Scripts: Password Visibility Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('togglePasswordBtn');
            const pwdInput = document.getElementById('adminPassword');
            const toggleIcon = document.getElementById('toggleIcon');

            if (toggleBtn && pwdInput && toggleIcon) {
                toggleBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (pwdInput.type === 'password') {
                        pwdInput.type = 'text';
                        toggleIcon.classList.remove('fa-eye-slash');
                        toggleIcon.classList.add('fa-eye');
                    } else {
                        pwdInput.type = 'password';
                        toggleIcon.classList.remove('fa-eye');
                        toggleIcon.classList.add('fa-eye-slash');
                    }
                });
            }
        });
    </script>

</body>

</html>