<?php session_start();
if (empty($_SESSION['userLoggedIn'])) {
    $_SESSION['msg'] = "You are not logged in yet";
    header("Location: login.php");
    exit(0);
}
?>

<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#e0a965">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#e0a965">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#e0a965">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/plugins/opklim-icons/style.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-5/css/all.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="preloader"><span><img src="assets/images/resources/preloader.png" alt="Awesome Image" /></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php include("assets/inc/nav-bar.php") ?>
        <!-- /.site-header -->


        <section class="inner-banner inner-banner__overlay-two" style="background-image: url(assets/images/background/inner-banner-bg-1-2.jpg);">
            <div class="container">
                <p class="inner-banner__tag-line">Most Successful Law Firm</p><!-- /.inner-banner__tag-line -->
                <h2 class="inner-banner__title">Edit Account Information</h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">User Profile</a></li>
                    <li>Edit Profile</li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <section class="about-two">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <?php
                        include("assets/inc/db_conn.php");
                        if (!isset($_GET['id'])) {
                        ?>
                            <h1 class="text-center text-dark">No Profile Found</h1>
                            <?php
                        } else {
                            $id = $_GET['id'];

                            $sql = mysqli_query($conn, "SELECT * FROM `registeruser` WHERE id = '$id'");

                            if (mysqli_num_rows($sql) > 0) {
                                foreach ($sql as $info);
                            ?>
                                <form method="post">
                                    <h2><b>Update <?= $info['name'] ?></b></h2>
                                    <div class="row mt-4">
                                        <div class="col-md-12 col-lg-6">
                                            <label for="" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" value="<?= $info['name'] ?>" required>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <label for="" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" value="<?= $info['email'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12 col-lg-6">
                                            <label for="" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="<?= $info['phone'] ?>" required>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <label for="" class="form-label">Update</label>
                                            <button type="submit" name="update" value="<?= $id ?>" class="btn btn-success w-100">Update</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            } else {
                            ?>
                                <h1 class="text-center text-dark">No Profile Found</h1>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->





        <?php include("assets/inc/footer.php") ?>
        <!-- /.site-footer__bottom -->


    </div><!-- /.page-wrapper -->


    <?php include("assets/inc/side-menu.php") ?>
    <?php include("assets/inc/search-pop.php") ?>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/jquery.enllax.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php
if (isset($_POST['update'])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

    $sql = mysqli_query($conn, "UPDATE `registeruser` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id = '$id'");

    if($sql){
        $_SESSION['msg'] = "Updated Successfully";
        echo "<script>window.location.href = 'user-profile.php?id=" . $id . "';</script>";
    }else{
        $_SESSION['msg'] = "Error. Try again";
        echo "<script>window.location.href = 'user-profile.php?id=" . $id . "';</script>";
    }
}
?>