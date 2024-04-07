<?php session_start();
include("assets/inc/db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us || Opklim || Responsive HTML Template</title>
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

    <link rel="stylesheet" href="assets/css/practice-area.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="preloader"><span><img src="assets/images/resources/preloader.png" alt="Awesome Image" /></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php include("assets/inc/nav-bar.php") ?>
        <!-- /.site-header -->

        <?php
        if (isset($_GET['slug'])) {
            $slug = mysqli_real_escape_string($conn, $_GET['slug']);

            $sql = mysqli_query($conn, "SELECT id, name FROM `practicearea` WHERE slug = '$slug'");

            // if ($result && mysqli_num_rows($result) > 0) {
            // } else {
            //     echo "Error: " . mysqli_error($conn);
            // }
            $practiceAreaId = 0;
            $name = '';
            while ($row = mysqli_fetch_assoc($sql)) {
                $practiceAreaId = $row['id'];
                $name = $row['name'];
            };

            $sql1 = mysqli_query($conn, "SELECT l.first_name, l.id, l.aboutLawyer, l.email, l.picture, l.mobile_num, l.last_name, p.name AS expertise
            FROM lawyerss AS l
            INNER JOIN practicearea AS p ON l.expertise = p.id
            WHERE l.expertise = $practiceAreaId");

            if (mysqli_num_rows($sql1) > 0) {
        ?>
                <section class="inner-banner inner-banner__overlay-two" style="background-image: url(assets/images/background/inner-banner-bg-1-2.jpg);">
                    <div class="container">
                        <p class="inner-banner__tag-line">Most Successful Law Firm</p><!-- /.inner-banner__tag-line -->
                        <h2 class="inner-banner__title"><?= $name ?></h2><!-- /.inner-banner__title -->
                        <ul class="list-unstyled thm-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><?= $row['name'] ?></li>
                        </ul><!-- /.thm-breadcrumb -->
                    </div><!-- /.container -->
                </section><!-- /.inner-banner -->

                <section class="team-two">
                    <div class="container py-5">
                        <div class="block-title text-left">
                            <h3 class="block-title__title">Layout Style II</h3><!-- /.block-title__title -->
                            <p class="block-title__text-two">Proident sunt culpa officia deserunt mollit animd</p><!-- /.block-title__text-one -->
                        </div><!-- /.block-title -->
                        <div class="law-cont d-flex ">
                            <?php
                            while ($row1 = mysqli_fetch_assoc($sql1)) {
                            ?>
                                <div class="lawyer">
                                    <div class="team-two__single">
                                        <div class="team-two__image">
                                            <img src="assets/images/lawyers/<?= $row1['picture'] ?>" alt="Awesome Image" />
                                            <div class="team-two__image-hover">
                                                <a href="mailto:<?= $row1['email'] ?>" class="team-two__contact"><?= $row1['email'] ?></a>
                                                <a href="tel:<?= $row1['mobile_num'] ?>" class="team-two__contact">Tel: <span><?= $row1['mobile_num'] ?></span></a>
                                            </div><!-- /.team-two__image-hover -->
                                        </div><!-- /.team-two__image -->
                                        <div class="team-two__content px-3">
                                            <a href="lawyer-profile?id=<?= $row1['id'] ?>" class="team-two__name"><?= $row1['first_name'] ?> &nbsp; <?= $row1['last_name'] ?></><!-- /.team-two__name -->
                                            <p class="team-two__designation"><?= $row1['expertise'] ?></p><!-- /.team-two__designation -->
                                            <p class="team-two__text"><?= $row1['aboutLawyer'] ?></p><!-- /.team-two__text -->
                                            <div class="team-two__social">
                                                <a href="#" class="fab fa-google-plus-g"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-facebook"></a>
                                                <a href="#" class="fab fa-linkedin-in"></a>
                                            </div><!-- /.team-two__social -->
                                        </div><!-- /.team-two__content -->
                                    </div><!-- /.team-two__single -->
                                </div><!-- /.col-lg-4 -->
                            <?php
                            }
                            ?>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section><!-- /.team-two -->
        <?php
            } else {
                include("assets/inc/nothing-found.php");
            }
        } else {
            include("assets/inc/nothing-found.php");
        }

        ?>


        <?php include("assets/inc/footer.php") ?>
        <!-- /.site-footer__bottom -->
    </div>
    <!-- /.page-wrapper -->
    <?php include("assets/inc/side-menu.php") ?>
    <!-- /.side-menu__block -->
    <?php include("assets/inc/search-pop.php") ?>
    <!-- /.search-popup -->
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