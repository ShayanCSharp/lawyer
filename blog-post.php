<?php include("assets/inc/db_conn.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM `blogs` WHERE id = '$id'");

    $blog = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $blog['title'] ?></title>
    <meta name="description" content="<?= $blog['meta_description'] ?>">
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
        <section class="inner-banner">
            <div class="container">
                <p class="inner-banner__tag-line">Most Successful Law Firm</p><!-- /.inner-banner__tag-line -->
                <h2 class="inner-banner__title"><?= $blog['title'] ?></h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog-grid.php">Blog</a></li>
                    <li><?= $blog['title'] ?></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-one blog-one__classic blog-details-page">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9">
                        <div class="blog-one__classic-content">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <div class="blog-one__image-inner">
                                        <img src="admin/assets/img/blog/<?= $blog['featured_image'] ?>" alt="Awesome Image" />
                                    </div><!-- /.blog-one__image-inner -->
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <h3 class="blog-one__title"><?= $blog['title'] ?></h3><!-- /.blog-one__title -->
                                    <p class="blog-one__text"><?= $blog['description'] ?></p><!-- /.blog-one__text -->
                                    <div class="blog-one__bottom">
                                        <div class="blog-details__tags">
                                            <a href="#">Bankruptcy</a>
                                            <a href="#">Corporate Law</a>
                                            <a href="#">Immigration</a>
                                        </div><!-- /.blog-details__tags -->
                                        <a href="#" class="blog-one__share"><i class="fa fa-share-alt"></i><span class="text-uppercase">share this</span></a>
                                    </div><!-- /.blog-one__bottom -->
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->

                        </div><!-- /.blog-one__classic-content -->
                    </div><!-- /.col-lg-9 -->
                    <?php include("assets/inc/blog-side-bar.php") ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one__classic -->

        <section class="mailchimp-one">
            <div class="container">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5">
                        <div class="mailchimp-one__content">
                            <h3 class="mailchimp-one__title">Join Our List To Stay Intouch</h3><!-- /.mailchimp-one__title -->
                            <p class="mailchimp-one__text">Stay in Touch and enim adminim veniam quis nostrud exercitation ullamco</p><!-- /.mailchimp-one__text -->
                        </div><!-- /.mailchimp-one__content -->
                    </div><!-- /.col-xl-5 -->
                    <div class="col-xl-7">
                        <form action="#" class="mailchimp-one__form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                            <i class="fas fa-envelope-open mailchimp-one__icon"></i>
                            <input type="email" id="mc-email" placeholder="Email address ..." name="email">
                            <button type="submit" class="thm-btn mailchimp-one__btn">subscribe <i class="fas fa-long-arrow-alt-right"></i></button>
                        </form><!-- /.mailchimp-one__form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-widget">
                            <a href="index.php" class="footer-widget__logo"><img src="assets/images/resources/logo-light-1-2.png" alt="Awesome Image" /></a>
                            <p class="footer-widget__text">Ipsum dolor sit amet, consecterelit, sed eiusmod <br>
                                tempor incididunt labore et dolore magnas. Lorem <br>
                                ipsum dolor sit amet, consectetur.</p><!-- /.footer-widget__text -->

                            <p class="footer-widget__text">Do eiusmod tempor incididunt ut labore et dolore <br>
                                magna aliquat enim ad minim veniam.</p><!-- /.footer-widget__text -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-xl-2 col-lg-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Practice Areas</h3><!-- /.footer-widget__title -->
                            <ul class="footer-widget__links list-unstyled">
                                <li><a href="#">Real Estate Laws</a></li>
                                <li><a href="#">Personal Injury</a></li>
                                <li><a href="#">Criminal Laws</a></li>
                                <li><a href="#">Health & Insurance</a></li>
                                <li><a href="#">Domestic Voilance</a></li>
                                <li><a href="#">Fraud & Theft</a></li>
                                <li><a href="#">Transportation Laws</a></li>
                            </ul><!-- /.footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-xl-3 col-lg-6">
                        <div class="footer-widget footer-widget__quick-link">
                            <h3 class="footer-widget__title">Quick Links</h3><!-- /.footer-widget__title -->
                            <ul class="footer-widget__links list-unstyled">
                                <li><a href="#">About Law Firm</a></li>
                                <li><a href="#">Our Attorneys</a></li>
                                <li><a href="#">Recent cases</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Book Appointment</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul><!-- /.footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->

                    <div class="col-xl-3 col-lg-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Head Office</h3><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">15 Pillis Avenue, Southern Street <br> Camron, Florida FL 33069</p><!-- /.footer-widget__text -->
                            <p class="footer-widget__text footer-widget__contact-info"><span>Helpline: </span> <a href="tel:1-258-985-703">1-258-985-703</a></p><!-- /.footer-widget__text -->
                            <p class="footer-widget__text">Mon to Fri : 09:00 am - 18:00 pm <br> Sat : 08:00 am - 16:00 pm</p><!-- /.footer-widget__text -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->


        <div class="site-footer__bottom">
            <div class="container">
                <p class="site-footer__copy">© 2019 OPKLIM Law Firm. All Rights Reserved. <a href="#">Privacy Notice</a></p><!-- /.site-footer__copy -->

                <div class="site-footer__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-google-plus-g"></a>
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div><!-- /.site-footer__social -->
            </div><!-- /.container -->
        </div><!-- /.site-footer__bottom -->


    </div><!-- /.page-wrapper -->


    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <a href="index.php"><img src="assets/images/resources/logo-dark-1-1.png" alt="Awesome Image" /></a>
            <div class="side-menu__block-about">
                <h3 class="side-menu__block__title">About Us</h3><!-- /.side-menu__block__title -->
                <p class="side-menu__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-menu__block-about__text -->
                <a href="#" class="thm-btn side-menu__block-about__btn">Get Consultation</a>
            </div><!-- /.side-menu__block-about -->
            <hr class="side-menu__block-line" />
            <div class="side-menu__block-contact">
                <h3 class="side-menu__block__title">Contact Us</h3><!-- /.side-menu__block__title -->
                <ul class="side-menu__block-contact__list">
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-map-marker"></i>
                        Rock St 12, Newyork City, USA
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-phone"></i>
                        <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@mail.com">example@mail.com</a>
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-clock"></i>
                        Week Days: 09.00 to 18.00 Sunday: Closed
                    </li><!-- /.side-menu__block-contact__list-item -->
                </ul><!-- /.side-menu__block-contact__list -->
            </div><!-- /.side-menu__block-contact -->
            <p class="side-menu__block__text site-footer__copy-text"><a href="#">OPKLIM</a> <i class="far fa-copyright"></i> 2019 All Right Reserved</p>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->
    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

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