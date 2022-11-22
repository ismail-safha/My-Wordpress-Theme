<?php get_header();?>
<!-- ===start==  -->

<main id="main">
  <?php 
  while(have_posts()){ 
    the_post(); ?>

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?php the_title(); ?></h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><?php the_title(); ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <!-- add from "advancedcustomfield"  -->
            <?php 
                $images = get_field('pro_gallery');
                if($images){ ?>
            <div class="swiper-wrapper align-items-center">
              <?php foreach( $images as $image ){ ?>
              <div class="swiper-slide">
                <img src="<?php echo $image ['full_image_url'] ?>" alt="">
              </div>
              <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
            <?php }
              ?>


          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo get_field('pro_category_name'); ?></li>
              <li><strong>Client</strong>: <?php echo get_field('pro_client_name'); ?></li>
              <li><strong>Project date</strong>: <?php echo get_field('pro_project_date'); ?></li>
              <li><strong>Project URL</strong>: <a href="#"><?php echo get_field('pro_project_url'); ?></a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2><?php echo get_field('pro_content_title'); ?></h2>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
  <?php 
  } ?>

</main><!-- End #main -->

<!-- ===end==  -->

<?php get_footer();?>