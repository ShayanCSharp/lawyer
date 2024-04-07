<?php session_start();
if (empty($_SESSION['userLoggedIn'])) {
    $_SESSION['msg'] = "You are not logged in yet";
    header("Location: login.php");
    exit(0);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/user-profile.css">
</head>

<body>
    <main>
        <section>
            <div id="hero">
                <nav>
                    <?php
                    include("assets/inc/db_conn.php");
                    if ($_GET['id']) {
                        $id = $_GET['id'];

                        $sql = mysqli_query($conn, "SELECT * FROM `registeruser` WHERE id = '$id'");

                        if ($sql) {
                            $row = mysqli_fetch_assoc($sql);
                    ?>
                            <h4>User Profile</h4>
                            <div class="user">
                                <form method="post"><button type="submit" name="logout" class="text-white py-1 px-3">Log Out</button></form>
                                <h6><?= $row['name'] ?> </h6>
                            </div>
                </nav>
                <div class="hero-description">
                    <h1>Hello, <?= $row['name'] ?></h1>
                    <p class="mt-4">This is your profile page, where you can view and edit your personal <br> information.</p>
                    <a href="edit-user-profile.php?id=<?= $id ?>" class="btn edit d-flex align-items-center justify-content-center mt-4">Edit Profile</a>
                </div>
            </div>
            <div class="main position-relative d-flex justify-content-center">
                <div class="show position-absolute p-4 text-white d-flex flex-column">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>My Account</h5>
                        </div>
                        <div class="col-lg-6"><a href="index.php" class="btn text-dark back float-end">Go back to website</a></div>
                    </div>
                    <div class="row mt-3">
                        <h6>User information</h6>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="" class="form-label">Name</label>
                            <p class="userInfo bg-white text-dark rounded p-3"><?= $row['name'] ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="" class="form-label">Email Address</label>
                            <p class="userInfo bg-white text-dark rounded p-3 p-3"><?= $row['email'] ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="" class="form-label">Phone</label>
                            <p class="userInfo bg-white text-dark rounded p-3 p-3"><?= $row['phone'] ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="" class="form-label">Email Address</label>
                            <p class="userInfo bg-white text-dark rounded p-3 p-3"><?= $row['created_at'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                        }
                    } else {
        ?>
        <h1>Nothing Found Error</h1>
    <?php
                    }
    ?>

        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['logout'])) {
    $_SESSION['msg'] = "You have been logged out";
    header("location: login.php");
    session_destroy();
    exit(0);
}

?>