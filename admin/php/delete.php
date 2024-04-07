<?php
session_start();
include("../include/db_conn.php");
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $sql = mysqli_query($conn, "DELETE FROM `lawyerss` WHERE id = '$id'");

    if ($sql) {
        $_SESSION['msg'] = "Deleted successfully";
        exit(0);
    } else {
        $_SESSION['msg'] = "could not be deleted";
        exit(0);
    }
}
