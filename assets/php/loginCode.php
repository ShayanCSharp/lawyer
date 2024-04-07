<?php
session_start();
include("db_conn.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM `registeruser` WHERE email = '$email' LIMIT 1");

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);

    if (password_verify($password, $row['password'])) {
        if($row['isAdmin'] == 1){
            $_SESSION['adminLoggedIn'] = true;
            $_SESSION['msg'] = "Logged in";
            echo "admin/";

        }else if($row['isAdmin'] == 0){
            $_SESSION['userLoggedIn'] = true;
            $_SESSION['userId'] = $row['id'];
            $_SESSION['msg'] = "Logged in";
            echo "user-profile.php?id={$row['id']}";
        }
    } else {
        $_SESSION['msg'] = "password incorrect";
        echo "login.php";
    }
} else {
    $_SESSION['msg'] = "email does not found";
    echo "login.php";
}
