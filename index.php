<?
/* Template Name: index
*/
?>
<?php get_header();?>
    <div class="main">
      <div class="main-slider">
        <div class="slide slide1" style="background-image: url(<?php echo the_field('main-slider-1');?>)">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading"><?php echo the_field('slide1-heading'); ?></div>
            </div>
          </div>
        </div>
        <div class="slide slide2" style="background-image: url(<?php echo the_field('main-slider-2');?>)">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading"><?php echo the_field('slide2-heading'); ?></div>
            </div>
          </div>
        </div>
        <div class="slide slide3" style="background-image: url(<?php echo the_field('main-slider-3');?>)">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading"><?php echo the_field('slide3-heading'); ?></div>
            </div>
          </div>
        </div>
        <div class="slide slide4" style="background-image: url(<?php echo the_field('main-slider-4');?>)">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading"><?php echo the_field('slide4-heading'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.main -->
  </div>
  <!-- /.section-main -->
  <div class="section-about">
    <div class="container">
      <div class="section-about_wrap">
        <div class="section-about__img"><img src="<?php echo get_template_directory_uri(); ?>/img/main/main_about.png" alt=""></div>
        <div class="section-about__text">
          <?php
            $post_id = 605;
            $newpost = pll_get_post($post_id);
            $queried_post = get_post($newpost);
            $content = $queried_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
        </div>
      </div>
      </div>
    <!-- /.section-about -->
    <div class="section-gallery">
      <div class="container">
        <div class="gallery-heading"><?php echo the_field('photo-section-heading');?></div>
        <div class="gallery-slider">
          <a href="<?php echo the_field('gallery-photo-1'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-1'); ?>" alt="" class="slide1-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-2'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-2'); ?>" alt="" class="slide2-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-3'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-3'); ?>" alt="" class="slide3-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-4'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-4'); ?>" alt="" class="slide5-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-5'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-5'); ?>" alt="" class="slide6-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-6'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-6'); ?>" alt="" class="slide7-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-7'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-7'); ?>" alt="" class="slide8-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-8'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-8'); ?>" alt="" class="slide9-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-9'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-9'); ?>" alt="" class="slide10-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-10'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-10;'); ?>" alt="" class="slide11-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-11'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-11;'); ?>" alt="" class="slide12-img slide-img"></a>
          <a href="<?php echo the_field('gallery-photo-12'); ?>" data-lightbox="image-1"><img src="<?php echo the_field('gallery-photo-12;'); ?>" alt="" class="slide4-img slide-img"></a>
        </div>
      </div>
    </div>
    <!-- /.section-gallery -->
    <div class="section-vr">
      <div class="container">
        <div class="section-heading"><?php echo the_field('vr-heading'); ?></div>
        <iframe src="http://home.krasko.su/171016_montess/" width="100%" height="450" scroll="no">
        </iframe>
      </div>
    </div>
    <!-- /.section-vr -->
<?php include 'contacts-b.php'?>
<?php include 'map.php'?>

<?php get_footer();?>