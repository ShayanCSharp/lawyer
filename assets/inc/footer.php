<?php include("db_conn.php") ?>

<section class="mailchimp-one">
  <div class="container">
    <div class="row align-items-center no-gutters">
      <div class="col-xl-5">
        <div class="mailchimp-one__content">
          <h3 class="mailchimp-one__title">
            Join Our List To Stay Intouch
          </h3>
          <!-- /.mailchimp-one__title -->
          <p class="mailchimp-one__text">
            Stay in Touch and enim adminim veniam quis nostrud
            exercitation ullamco
          </p>
          <!-- /.mailchimp-one__text -->
        </div>
        <!-- /.mailchimp-one__content -->
      </div>
      <!-- /.col-xl-5 -->
      <div class="col-xl-7">
        <form action="#" class="mailchimp-one__form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
          <i class="fas fa-envelope-open mailchimp-one__icon"></i>
          <input type="email" id="mc-email" placeholder="Email address ..." name="email" />
          <button type="submit" class="thm-btn mailchimp-one__btn">
            subscribe <i class="fas fa-long-arrow-alt-right"></i>
          </button>
        </form>
        <!-- /.mailchimp-one__form -->
        <div class="mc-form__response"></div>
        <!-- /.mc-form__response -->
      </div>
      <!-- /.col-lg-7 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.mailchimp-one -->

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-6">
        <div class="footer-widget">
          <a href="index.php" class="footer-widget__logo"><img src="assets/images/resources/logo-light-1-2.png" alt="Awesome Image" /></a>
          <p class="footer-widget__text">
            Ipsum dolor sit amet, consecterelit, sed eiusmod <br />
            tempor incididunt labore et dolore magnas. Lorem <br />
            ipsum dolor sit amet, consectetur.
          </p>
          <!-- /.footer-widget__text -->

          <p class="footer-widget__text">
            Do eiusmod tempor incididunt ut labore et dolore <br />
            magna aliquat enim ad minim veniam.
          </p>
          <!-- /.footer-widget__text -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-xl-2 col-lg-6">
        <div class="footer-widget">
          <h3 class="footer-widget__title">Practice Areas</h3>
          <!-- /.footer-widget__title -->
          <ul class="footer-widget__links list-unstyled">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM `practicearea`");

            if (mysqli_num_rows($sql) > 0) {
              foreach ($sql as $practice) {
            ?>
                <li><a href="practice-area.php?slug=<?= $practice['slug'] ?>"><?= $practice['name'] ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
          <!-- /.footer-widget__links -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-lg-2 -->
      <div class="col-xl-3 col-lg-6">
        <div class="footer-widget footer-widget__quick-link">
          <h3 class="footer-widget__title">Quick Links</h3>
          <!-- /.footer-widget__title -->
          <ul class="footer-widget__links list-unstyled">
            <li><a href="about.php">About Legal Link</a></li>
            <li><a href="lawyer-register.php">Lawyer Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="blog-grid.php">Latest Blogs</a></li>
          </ul>
          <!-- /.footer-widget__links -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-xl-3 col-lg-6">
        <div class="footer-widget">
          <h3 class="footer-widget__title">Head Office</h3>
          <!-- /.footer-widget__title -->
          <p class="footer-widget__text">
            15 Pillis Avenue, Southern Street <br />
            Camron, Florida FL 33069
          </p>
          <!-- /.footer-widget__text -->
          <p class="footer-widget__text footer-widget__contact-info">
            <span>Helpline: </span>
            <a href="tel:1-258-985-703">1-258-985-703</a>
          </p>
          <!-- /.footer-widget__text -->
          <p class="footer-widget__text">
            Mon to Fri : 09:00 am - 18:00 pm <br />
            Sat : 08:00 am - 16:00 pm
          </p>
          <!-- /.footer-widget__text -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-lg-3 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</footer>
<!-- /.site-footer -->

<div class="site-footer__bottom">
  <div class="container">
    <p class="site-footer__copy">
      © 2014 Legal Link. All Rights Reserved.
    </p>
    <!-- /.site-footer__copy -->

    <div class="site-footer__social">
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-google-plus-g"></a>
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-youtube"></a>
    </div>
    <!-- /.site-footer__social -->
  </div>
  <!-- /.container -->
</div>