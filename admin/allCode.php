<?php
session_start();
include("include/db_conn.php");

// Add Practice

if (isset($_POST['add_practice'])) {
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $image = $_FILES['practiceImage'];
    $img = $image['name'];
    $description = $_POST['description'];

    $sql = mysqli_query($conn, "INSERT INTO `practicearea`(`name`, `slug`, `image`,`description`) VALUES ('$name','$slug','$img','$description')");

    if (move_uploaded_file($image['tmp_name'], "assets/img/practice-area/" . $img)) {
        if ($sql) {
            $_SESSION['msg'] = "Practice area added successfully";
            header("location: view-practice-area.php");
            exit(0);
        } else {
            $_SESSION['msg'] = "Practice area could not be added";
            // header("location: add-practice-area.php");
            echo mysqli_error($conn);
            exit(0);
        }
    } else {
        $_SESSION['msg'] = "Practice area could not be added";
        header("location: add-practice-area.php");
        exit(0);
    }
}

// Edit Practice

if (isset($_POST['edit_practice'])) {
    $id = $_POST['edit_practice'];
    $name = $_POST['e_name'];
    $slug = $_POST['e_slug'];
    $visible = isset($_POST['visible']) ? 0 : 1;
    $description = $_POST['description'];

    $sql = mysqli_query($conn, "UPDATE `practicearea` SET `name`='$name', `slug`='$slug', `visible`='$visible', `description`='$description' WHERE id = '$id'");

    if ($sql) {
        $_SESSION['msg'] = "Practice area updated successfully";
        header("location: view-practice-area.php");
        exit(0);
    } else {
        echo mysqli_error($conn);
        $_SESSION['msg'] = "Practice area could not be updated";
        // header("location: add-practice-area.php");
        exit(0);
    }
}
