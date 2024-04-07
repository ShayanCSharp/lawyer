<?php
session_start();
include("db_conn.php");

$name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$hash_pass = password_hash($password,PASSWORD_DEFAULT);

$sql = mysqli_query($conn, "SELECT * FROM `registeruser` WHERE email = '$email'");

if (mysqli_num_rows($sql) > 0) {
    $_SESSION['msg'] = "Email already exists";
    echo "register.php";
} else {
    $sql1 = mysqli_query($conn, "INSERT INTO `registeruser`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$number','$hash_pass')");
    if ($sql1) {
        $_SESSION['msg'] = "Account created successfully";
        echo "login.php";
    } else {
        $_SESSION['msg'] = "Account could not be created";
        echo "register.php";
    }
}
