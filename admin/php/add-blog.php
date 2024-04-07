<?php
session_start();
include("../include/db_conn.php");

$title = $_POST['title'];
$slug = $_POST['slug'];
$image = $_FILES['image'];
$content = $_POST['description'];
$meta_des = $_POST['meta_des'];
$img_name = $image['name'];

$sql = mysqli_query($conn, "INSERT INTO `blogs`(`title`, `description`, `featured_image`,`slug`, `meta_description`) VALUES ('$title','$content','$img_name','$slug','$meta_des')");

if (move_uploaded_file($image['tmp_name'], "../assets/img/blog/" . $img_name)) {
    if ($sql) {
        $_SESSION['msg'] = "Blog added successfully";
        echo "view-blogs.php";
        exit(0);
    } else {
        echo "error";
    }
} else {
    echo "error";
}
