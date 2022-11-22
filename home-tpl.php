<?php /* Template Name: Home */ 
 get_header();


?>
<!-- ======= Hero Section ======= -->
<?php 
  $hero_img = get_field('hero_image');
  $style = '';
  if($hero_img){
    $style = ' style="background: url('.$hero_img.') top center; background-size: cover;" ';
    
  
  }
?>
<section id="hero" class="d-flex align-items-center justify-content-center" <?php echo $style; ?>>
  <div class="container" data-aos="fade-up">
    <!--  add content denamic -->
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1><?php echo get_field('hero_title'); ?></h1>
        <h2><?php echo get_field('hero_sub_title'); ?></h2>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <?php 
      for($i = 1; $i < 6; $i++){
          $temp_icon = get_field('box_icon_'.$i);
          $temp_text = get_field('box_text_'.$i);
          ?>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="<?php echo  $temp_icon; ?>"></i>
          <h3><a href=""><?php echo $temp_text; ?></a></h3>
        </div>
      </div>

      <?php }
      ?>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <!-- add imag  -->
          <?php  
            $about_img =  get_field('about_image');
            if($about_img){ ?>
          <img src="<?php echo  $about_img; ?>" class="img-fluid" alt="">

          <?php  }
          ?>

        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <!-- add content about whit php -->
          <h3><?php echo get_field('about_title'); ?></h3>
          <p class="fst-italic">
            <?php echo get_field('about_text'); ?>
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> <?php echo get_field('about_checked_text_1'); ?></li>
            <li><i class="ri-check-double-line"></i> <?php echo get_field('about_checked_text_2'); ?></li>
            <li><i class="ri-check-double-line"></i> <?php echo get_field('about_checked_text_3'); ?></li>
          </ul>
          <p>
            <?php echo get_field('about_content'); ?>
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <?php 
        $args = [
          'post_type' => 'clients',
          'post_status' => 'publish',
          'post_per_page' => -1,
          'orderby' => 'title',
          'order' => 'ASC'
        ];

        $clients_loop = new WP_Query($args);
        if($clients_loop){ ?>
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">

          <?php
          while( $clients_loop->have_posts()){
            $clients_loop->the_post(); ?>
          <div class="swiper-slide">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
          </div>

          <?php  
              
          } ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Clients Section -->

  <?php
      }
      // ====> reset
      wp_reset_postdata();

        ?>

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
      <!-- add image -->
      <?php 
          $features_img = get_field('features_image');
          $features_style = '';
          
          if($features_img){
            $features_style = ' style="background-image: url('.$features_img.');" ';

          }
        ?>
      <div class="row">
        <div class="image col-lg-6" <?php echo $features_style; ?> data-aos="fade-right">
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-receipt"></i>
            <!-- =====> -->
            <h4><?php echo get_field('features_title_1'); ?></h4>
            <p><?php echo get_field('features_text_1'); ?></p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4><?php echo get_field('features_title_2'); ?></h4>
            <p><?php echo get_field('features_text_2'); ?></p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-images"></i>
            <h4><?php echo get_field('features_title_3'); ?></h4>
            <p><?php echo get_field('features_text_3'); ?></p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-shield"></i>
            <h4><?php echo get_field('features_title_4'); ?></h4>
            <p><?php echo get_field('features_text_4'); ?></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Check our Services</p>
      </div>
      <!-- ====> start add php -->
      <div class="row">
        <?php 
            $args = [
              'post_type' => 'services',
              'post_status' => 'publish',
              'post_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            ];

            $services_loop = new WP_Query($args);
            if($services_loop){ 
              while( $services_loop->have_posts()){
                $services_loop->the_post(); ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx <?php echo get_field('icone_mane'); ?>"></i>
            </div>
            <h4><a href=""><?php echo get_the_title(); ?></a></h4>
            <p><?php echo get_the_content(); ?></p>
          </div>
        </div>

        <?php  
                  
              } 
              }
          // ====> reset
          wp_reset_postdata();

            ?>
        <!-- ====> end add php -->
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Cta Section ======= -->
  <!-- ====> add image css php -->
  <?php 
  $cta_img = get_field('hero_image');
  $cta_style = '';    
  
  if($cta_img){
    $cta_style = ' style=" background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url('.$cta_img.') fixed center center; background-size: cover;" ';
    
  
  }
?>
  <!-- ====> add image php -->
  <section id="cta" class="cta" <?php echo $cta_style; ?>>
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <!-- ====> add php -->
        <h3><?php echo get_field('cta_title');?></h3>
        <p><?php echo get_field('cta_text'); ?></p>
        <a class="cta-btn"
          href="<?php echo get_field('cta_button_link'); ?>"><?php echo get_field('cta_button_text') ?></a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <!-- ====> add php -->
            <?php 
            $cats = get_categories();
              foreach ($cats as $cat) {
                ?>
            <li data-filter=".filter-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>

            <?php
              }
            ?>

            <!-- ====>end add php -->

          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <!-- ===> -->
        <?php 
            $args = [
              'post_type' => 'portfolios',
              'post_status' => 'publish',
              'post_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            ];

            $portfolios_loop = new WP_Query($args);
            if($portfolios_loop){ 
              while( $portfolios_loop->have_posts()){
                $portfolios_loop->the_post(); 
                  $cat_arr = get_the_category();
                  $cat = $cat_arr[0]->slug;
                ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $cat ;?>">
          <div class="portfolio-wrap">
            <img src="<?php echo get_the_post_thumbnail_url(''); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo get_the_title(); ?></h4>
              <p><?php echo get_the_excerpt(); ?></p>
              <div class="portfolio-links">
                <a href="<?php echo get_the_post_thumbnail_url(''); ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?php echo get_permalink(); ?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <?php  
                  
              } 
            }
          // ====> reset
          wp_reset_postdata();

            ?>
        <!-- ====> end add php -->
        <!-- ===> -->
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Counts Section ======= -->
  <!-- ====> add image css php -->
  <?php 
  $counts_img = get_field('counts_image');
  $counts_style = '';    
  
  if($counts_img){
    
    $counts_style = ' style=" background: url('.$counts_img.') center center no-repeat; background-size: cover;"';
    
  
  }
?>
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div <?php echo $counts_style; ?>
          class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
          data-aos="fade-right" data-aos-delay="100"></div>
        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
          <div class="content d-flex flex-column justify-content-center">
            <!-- =====>strat php -->
            <h3><?php echo get_field('counts_title'); ?></h3>
            <p>
              <?php echo get_field('counts_text'); ?>
            </p>
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <!-- =====>strat php -->
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('counts_number_1'); ?>"
                    data-purecounter-duration="2" class="purecounter"></span>
                  <p><?php echo get_field('counts_countent_1'); ?></p>
                </div>
              </div>
              <!-- =====>end php -->


              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('counts_countent_2'); ?>"
                    data-purecounter-duration="2" class="purecounter"></span>
                  <p><?php echo get_field('counts_countent_2'); ?>
                  </p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('counts_countent_3'); ?>"
                    data-purecounter-duration="4" class="purecounter"></span>
                  <p><?php echo get_field('counts_countent_3'); ?></p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('counts_countent_4'); ?>"
                    data-purecounter-duration="4" class="purecounter"></span>
                  <p><?php echo get_field('counts_countent_4'); ?></p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Testimonials Section ======= -->
  <?php 
  $testimonials_img = get_field('testimonial_image_bg');
  $testimonials_style = '';    
  
  if($testimonials_img){
    // "background: url('.$hero_img.') top center; background-size: cover;"
    $testimonials_style = ' style=" background: url('.$testimonials_img.') center center no-repeat; background-size: cover;"';
    
  
  }
?>
  <section <?php echo $testimonials_style ?> id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <!--  add php "testimonials" -->
          <?php 
            $args = [
              'post_type' => 'Testimonials',
              'post_status' => 'publish',
              'post_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            ];

            $Testimonials_loop = new WP_Query($args);
            if($Testimonials_loop){ 
              while( $Testimonials_loop->have_posts()){
                $Testimonials_loop->the_post(); 
                 
                ?>
          <!-- ===> testimonials html -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="testimonial-img" alt="">
              <h3><?php echo get_the_title(); ?></h3>
              <h4><?php echo get_the_excerpt(); ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo get_the_content(); ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
          <!-- ===> end testimonials html -->

          <?php  
                  
              } 
            }
          // ====> reset
          wp_reset_postdata();
            ?>
          <!--  end php  -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Check our Team</p>
      </div>

      <div class="row">
        <!--  add php "teme" -->
        <?php 
            $args = [
              'post_type' => 'teams',
              'post_status' => 'publish',
              'post_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            ];

            $teams_loop = new WP_Query($args);
            if($teams_loop){ 
              while( $teams_loop->have_posts()){
                $teams_loop->the_post(); 
                 
                ?>
        <!-- ===> teams html -->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
              <div class="social">
                <?php if(get_field('fb_link')){
                  ?>

                <a href="<?php echo get_field('fb_link'); ?>"><i class="bi bi-facebook"></i></a>

                <?php
                } ?>
                <?php if(get_field('tw_link')){
                  ?>

                <a href="<?php echo get_field('tw_link'); ?>"><i class="bi bi-twitter"></i></a>

                <?php
                } ?>


              </div>
            </div>
            <div class="member-info">
              <h4><?php echo get_the_title(); ?></h4>
              <span> <?php echo get_the_content(); ?></span>
            </div>
          </div>
        </div>
        <!-- ===> end teams html -->

        <?php  
                  
              } 
            }
          // ====> reset
          wp_reset_postdata();
            ?>
        <!--  end php  -->
      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
      <!-- add map  php -->
      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="<?php echo get_field('contact_map_link'); ?>"
          frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo get_field('contact_location'); ?></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo get_field('contact_email'); ?></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo get_field('contact _call'); ?></p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <!-- ====> form php -->

          <?php echo do_shortcode(get_field('form_shortcode')); ?>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<!-- ====> footer -->
<?php
 get_footer();