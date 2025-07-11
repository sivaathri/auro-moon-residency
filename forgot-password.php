<?php
include('dbconfig.php');
$message = '';
$showPasswordForm = false;
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && !isset($_POST['new_password'])) {
        $email = trim($_POST['email']);
        $query = "SELECT * FROM tbladmin WHERE admin_email = :email";
        $stmt = $dbconn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $showPasswordForm = true;
        } else {
            $message = '<div class="alert alert-danger">This email is not registered as an admin.</div>';
        }
    } elseif (isset($_POST['email']) && isset($_POST['new_password'])) {
        $email = trim($_POST['email']);
        $newPassword = trim($_POST['new_password']);
        if (strlen($newPassword) < 6) {
            $message = '<div class="alert alert-danger">Password must be at least 6 characters.</div>';
            $showPasswordForm = true;
        } else {
            $query = "UPDATE tbladmin SET admin_pwd = :newpwd WHERE admin_email = :email";
            $stmt = $dbconn->prepare($query);
            $stmt->bindParam(':newpwd', $newPassword, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            if ($stmt->execute()) {
                $message = '<div class="alert alert-success">Password changed successfully! You can now <a href="login.php">login</a> with your new password.</div>';
            } else {
                $message = '<div class="alert alert-danger">Failed to update password. Please try again.</div>';
                $showPasswordForm = true;
            }
        }
    }
}
?>
<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password || AAHA Serenity Stay</title>
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f8fafc; margin: 0; }
        .container { display: flex; align-items: center; justify-content: center; min-height: 88vh; padding: 20px; }
        .card { display: flex; flex-direction: column; width: 100%; max-width: 1100px; background-color: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); overflow: hidden; }
        @media (min-width: 768px) { .card { flex-direction: row; } }
        .card-left { background: linear-gradient(to bottom right, #127873, #0a4d4a); color: white; flex: 1; text-align: center; padding: 40px 20px; display: flex; flex-direction: column; justify-content: center; }
        .illustration { width: 80%; margin: 0 auto; }
        .card-left h2 { font-size: 24px; font-weight: 700; margin-top: 24px; }
        .card-left p { margin-top: 12px; opacity: 0.9; font-size: 14px; padding: 0 10px; }
        .card-right { flex: 1; padding: 40px; display: flex; flex-direction: column; justify-content: center; }
        .logo-box { text-align: center; margin-bottom: 30px; }
        .logo { width: 104px; height: 64px; margin: 0 auto 12px auto; display: block; }
        .logo-box h1 { font-size: 28px; font-weight: bold; color: #1f2937; }
        .logo-box p { color: #6b7280; font-size: 14px; margin-top: 6px; }
        .forgot-form { display: flex; flex-direction: column; gap: 20px; }
        .input-group { position: relative; }
        .input-group input { width: 100%; padding: 14px 16px 14px 40px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 14px; outline: none; transition: box-shadow 0.3s; }
        .input-group input:focus { box-shadow: 0 0 0 2px #127873; border-color: transparent; }
        .icon { position: absolute; top: 50%; left: 12px; transform: translateY(-50%); color: #9ca3af; }
        .btn-forgot { background-color: #127873; color: white; font-weight: 700; padding: 14px; border-radius: 8px; border: none; cursor: pointer; font-size: 16px; transition: all 0.3s ease; }
        .btn-forgot:hover { background-color: #0a4d4a; transform: translateY(-2px); box-shadow: 0 4px 12px rgba(18, 120, 115, 0.3); }
        .support { text-align: center; margin-top: 24px; font-size: 14px; color: #6b7280; }
        .support a { color: #127873; font-weight: 500; text-decoration: none; }
        .wave { position: fixed; top: 0; left: 0; width: 100%; z-index: -1; }
    </style>
</head>
<body>
  <img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png" alt="Wave Background" />
  <div class="container">
    <div class="card">
      <!-- Left Side -->
      <div class="card-left">
        <img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg" class="illustration" alt="Forgot Password Illustration" />
        <h2>Forgot Your Password?</h2>
        <p>Enter your email address and you can reset your password here.</p>
      </div>
      <!-- Right Side -->
      <div class="card-right">
        <div class="logo-box">
          <img src="./assect/logo/aaha home stay.png" alt="Logo" class="logo" />
          <h1>AAHA SERENITY STAY</h1>
          <p>Admin Portal</p>
        </div>
        <?php if ($message) echo $message; ?>
        <?php if ($showPasswordForm): ?>
        <form method="POST" action="#" class="forgot-form">
          <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>" />
          <div class="input-group">
            <i class="fas fa-lock icon"></i>
            <input type="password" name="new_password" placeholder="New Password" required />
          </div>
          <button type="submit" class="btn-forgot">Change Password</button>
        </form>
        <?php else: ?>
        <form method="POST" action="#" class="forgot-form">
          <div class="input-group">
            <i class="fas fa-envelope icon"></i>
            <input type="email" name="email" placeholder="Email Address" required />
          </div>
          <button type="submit" class="btn-forgot">Next</button>
        </form>
        <?php endif; ?>
        <div class="support">
          <a href="login.php">Back to Login</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html> 