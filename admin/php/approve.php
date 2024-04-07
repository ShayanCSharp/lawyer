<?php
include("../include/db_conn.php");
$id = $_POST['number'];

$sql = mysqli_query($conn, "UPDATE `lawyerss` SET `isVisible` = '0' WHERE `lawyerss`.`id` = $id");

if ($sql) {
    $_SESSION['msg'] = "The attorney's records have been successfully updated, and an email has been dispatched to inform him of this update.";
    exit(0);
} else {
    $_SESSION['msg'] = "The attorney's records could not be updated";
    exit(0);
}
