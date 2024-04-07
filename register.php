<?php session_start();
if (isset($_SESSION['userLoggedIn'])) {
  $_SESSION['msg'] = "You are already logged in";
  header("Location: index.php");
  exit(0);
} else if (isset($_SESSION['adminLoggedIn'])) {
  $_SESSION['msg'] = "You are already registered";
  header("Location: admin/");
  exit(0);
} ?>
<!DOCTYPE html>
<html>

<head>
  <title>Animated Login Form</title>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <img class="wave" src="assets/images/login/wave.png" />
  <?php include("message.php") ?>
  <div class="main">
    <div class="main-img">
      <img src="assets/images/login/bg.svg" />
    </div>
    <div class="login-content">
      <form>
        <img src="assets/images/login/avatar.svg" />
        <h2 class="title">Register</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user "></i>
          </div>
          <div class="div">
            <h5>Full Name</h5>
            <input type="text" id="username" class="input" onkeyup="usernameValidate()" />
            <i class="fa-solid fa-xmark error" id="userError" style="display: none;"></i>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="div">
            <h5>Email</h5>
            <input type="email" id="email" class="input" onkeyup="emailValidate()" />
            <i class="fa-solid fa-xmark error" id="emailError" style="display: none;"></i>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Phone</h5>
            <input type="tel" id="number" class="input" onkeyup="numValidate()" />
            <i class="fa-solid fa-xmark error" id="phoneE" style="display: none;"></i>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password</h5>
            <input type="password" id="password" class="input" onkeyup="passwordValidate()" />
            <i class="fa-solid fa-xmark error" id="passError" style="display: none;"></i>
          </div>
        </div>
        <a href="#" class="login">Forgot Password?</a>
        <input type="submit" class="submit" value="Register" />
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/register.js"></script>
</body>

</html>