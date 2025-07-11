<?php
include('dbconfig.php');

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tbladmin where admin_email=:email and admin_pwd=:passWord";

    $run_query = $dbconn->prepare($query);

    $run_query->bindParam(':email', $email, PDO::PARAM_STR);
    $run_query->bindParam(':passWord', $password, PDO::PARAM_STR);

    $run_query->execute();

    //$result = $run_query->fetchAll();

    $_count = $run_query->rowCount();

    if ($_count > 0) {
        echo '<script language="javascript">
            alert("Welcome Admin..!"); window.location.href="Admin.php";</script>';
        exit();
    } else {
        echo '<script language="javascript">
            alert("Invalid login creational..!"); window.location.href="login.php";</script>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAHA Serenity Stay || Login </title>
    <link rel="shortcut icon" href="./assect/logo/aaha home stay.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- css link    -->
    <link rel="stylesheet" href="style.css">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f8fafc;
  margin: 0;
}

.wave {
  position: fixed;
  bottom: 0;
  left: 0;
  height: 100%;
  z-index: -1;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 88vh;
  padding: 20px;
}

.card {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 1100px;
  background-color: #ffffff;
  border-radius: 16px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

@media (min-width: 768px) {
  .card {
    flex-direction: row;
  }
}

.card-left {
  background: linear-gradient(to bottom right, #127873, #0a4d4a);
  color: white;
  flex: 1;
  text-align: center;
  padding: 40px 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.illustration {
  width: 80%;
  margin: 0 auto;
}

.card-left h2 {
  font-size: 24px;
  font-weight: 700;
  margin-top: 24px;
}

.card-left p {
  margin-top: 12px;
  opacity: 0.9;
  font-size: 14px;
  padding: 0 10px;
}

.card-right {
  flex: 1;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.logo-box {
  text-align: center;
  margin-bottom: 30px;

}

.logo {
  width: 104px;
  height: 64px;
  margin: 0 auto 12px auto; /* Top: 0, Left & Right: auto (centers), Bottom: 12px */
  display: block; /* Ensures margin:auto works */
}

.logo-box h1 {
  font-size: 28px;
  font-weight: bold;
  color: #1f2937;
}

.logo-box p {
  color: #6b7280;
  font-size: 14px;
  margin-top: 6px;
}


.login-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.input-group {
  position: relative;
}

.input-group input {
  width: 100%;
  padding: 14px 16px 14px 40px;
  border: 1px solid #d1d5db;
  border-radius: 8px;
  font-size: 14px;
  outline: none;
  transition: box-shadow 0.3s;
}

.input-group input:focus {
  box-shadow: 0 0 0 2px #127873;
  border-color: transparent;
}

.icon {
  position: absolute;
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
  color: #9ca3af;
}

.options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 14px;
}

.options label {
  display: flex;
  align-items: center;
  gap: 6px;
  color: #374151;
}

.options a {
  color: #127873;
  text-decoration: none;
  transition: color 0.3s;
}

.options a:hover {
  color: #0a4d4a;
}

.btn-login {
  background-color: #127873;
  color: white;
  font-weight: 700;
  padding: 14px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.3s ease;
}

.btn-login:hover {
  background-color: #0a4d4a;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(18, 120, 115, 0.3);
}

.btn-login i {
  margin-left: 8px;
}

.support {
  text-align: center;
  margin-top: 24px;
  font-size: 14px;
  color: #6b7280;
}

.support a {
  color: #127873;
  font-weight: 500;
  text-decoration: none;
}



    </style>
</head>

<body>
  <?php include('navbar.php') ?>
  <img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png" alt="Wave Background" />
    
  
  



  
  <div class="container">
    <div class="card">
      <!-- Left Side -->
      <div class="card-left">
        <img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg" class="illustration" alt="Login Illustration" />
        <h2>Welcome Back!</h2>
        <p>Enter your credentials to access your admin dashboard and manage your homestay.</p>
      </div>

      <!-- Right Side -->
      <div class="card-right">
        <div class="logo-box">
          <img src="./assect/logo/aaha home stay.png" alt="Logo" class="logo" />
          <h1>AAHA SERENITY STAY</h1>
          <p>Admin Portal</p>
        </div>

        <form method="POST" action="" class="login-form">
          <div class="input-group">
            <i class="fas fa-envelope icon"></i>
            <input type="email" name="email" placeholder="Email Address" required />
          </div>

          <div class="input-group">
            <i class="fas fa-lock icon"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <div class="options">
            <label><input type="checkbox" name="remember-me" /> Remember me</label>
            <a href="#">Forgot password?</a>
          </div>

          <button type="submit" name="submit" class="btn-login">
            Login <i class="fas fa-sign-in-alt"></i>
          </button>
        </form>

        
      </div>
    </div>
  </div>
  
  
    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    
</body>

</html>