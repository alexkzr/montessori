/* Template Name: Programms
*/

<?php get_header();?>
<div class="programm-main" style="background-image: url(<?php echo the_field('programm-section-bgimage');?>);">
        <div class="container">
          <div class="main-wrap">
            <div class="logo" style="background-image: url(<?php echo the_field('programm-section-logo');?>);"></div>
            <!-- /.logo -->
            <h1 class="main-heading"><?php echo the_field('programm-section-heading');?></h1>
            <!-- /.main-heading -->
            <p class="main-descr">
              <?php echo the_field('programm-section-quote');?>
            </p>
            <!-- /.main-descr -->
            <p class="main-author"><?php echo the_field('programm-section-author');?></p>
            <!-- /.main-author -->
          </div>
          <!-- /.main-wrap -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.programm-main -->
    </div>
    <div class="programms">
      <div class="container">
        <h2 class="section-heading"><?php echo the_field('programm-section-heading2');?></h2>
        <div class="programms-wrap">
          <div class="programm programm1">
            <div class="programm-info">
              <div class="programm-info_class"><?php echo the_field('programm-section-class1');?></div>
              <div class="programm-info_age"><?php echo the_field('programm-section-age1');?></div>
            </div>
            <div class="programm-heading"><?php echo the_field('programm-section-classname1');?></div>
            <div class="programm-text">
              <?php echo the_field('programm-section-programmtext1');?>
            </div>
          </div>
          <div class="programm programm2">
            <div class="programm-info">
              <div class="programm-info_class"><?php echo the_field('programm-section-class2');?></div>
              <div class="programm-info_age"><?php echo the_field('programm-section-age2');?></div>
            </div>
            <div class="programm-heading"><?php echo the_field('programm-section-classname2');?></div>
            <div class="programm-text">
              <?php echo the_field('programm-section-programmtext2');?>
            </div>
          </div>
        </div>
        <!-- /programms-wrap -->
      </div>
      <!-- /container -->
    </div>
    <!-- /programms -->
<?php echo do_shortcode('[contactsBlock]');?>
  <?php get_footer();?>