<?php
session_start();
include('../include/db_conn.php');
$id = $_POST['id'];

$sql = mysqli_query($conn, "DELETE FROM `practicearea` WHERE id = '$id'");

if ($sql) {
    $_SESSION['msg'] = "Practice area deleted successfully";
    exit(0);
} else {
    $_SESSION['msg'] = "Practice area could not be deleted";
    exit(0);
}
