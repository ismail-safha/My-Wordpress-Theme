<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <!-- add widgets -->
          <?php 
            if(!dynamic_sidebar('footer_1')){
              dynamic_sidebar('footer_1');
            }
          ?>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">

          <!-- add widgets -->
          <?php 
            if(!dynamic_sidebar('footer_2')){
              dynamic_sidebar('footer_2');
            }
          ?>

        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <!-- add widgets -->
          <?php 
            if(!dynamic_sidebar('footer_3')){
              dynamic_sidebar('footer_3');
            }
          ?>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">

          <!-- add widgets -->
          <?php 
            if(!dynamic_sidebar('footer_4')){
              dynamic_sidebar('footer_4');
            }
          ?>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <?php bloginfo('name'); ?>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<!-- ===> footer -->
<?php wp_footer(); ?>
</body>

</html>