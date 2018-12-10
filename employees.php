/* Template Name: Employees
*/

<?php get_header();?>
<div class="programm-main">
        <div class="container">
          <div class="main-wrap">
            <div class="logo"></div>
            <!-- /.logo -->
            <h1 class="main-heading"><?php echo the_field('main-heading');?></h1>
            <!-- /.main-heading -->
            <p class="main-descr">
            <?php echo the_field('main-subheading');?>
            </p>
            <!-- /.main-descr -->
          </div>
          <!-- /.main-wrap -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.programm-main -->

<?php include 'sitemap.php'?>


      <div class="container">
        <div class="inner-section">
          <!-- <h4 class="tac">1) Руководитель</h4>
          <p>Строева Ольга Александровна - Директор ЧОУ "Интернешнл Монетессори скул"<br>
              Телефон +7 (965) 090-30-73<br>
              Электронная почта: stroeva@gmail.com<br></p>
          <h4>Строева Ольга Александровна <br> Директор ЧОУ "Интернешнл Монетессори скул" <br>
          Телефон +7 (965) 090-30-73 <br>
          Электронная почта: stroeva@gmail.com</h4>
          <h4>Руководители филиалов</h4>
          <p>У данного учреждения нет филиалов.</p>
          <h4 class="tac">2) Педагогический состав</h4> -->
          <?php 
            $id=40; 
            $post = get_post($id); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
            ?>
            <?php echo the_field('group1name'); ?>
              <div class="teacher-info">
              <img src="<?php echo the_field('teacher1photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher1name'); ?></p>
                  <p><?php echo the_field('teacher1info'); ?></p>
               </div>

              </div>
              <div class="teacher-info">
              <img src="<?php echo the_field('teacher2photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher2name'); ?></p>
                  <p><?php echo the_field('teacher2info'); ?></p>
               </div>

              </div>
              <?php echo the_field('group2name'); ?>
            <div class="teacher-info">
              <img src="<?php echo the_field('teacher3photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher3name'); ?></p>
                  <p><?php echo the_field('teacher3info'); ?></p>
               </div>

              </div>
              <div class="teacher-info">
              <img src="<?php echo the_field('teacher4photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher4name'); ?></p>
                  <p><?php echo the_field('teacher4info'); ?></p>
               </div>

              </div>
              <div class="teacher-info">
              <img src="<?php echo the_field('teacher5photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher5name'); ?></p>
                  <p><?php echo the_field('teacher5info'); ?></p>
               </div>

              </div>
              <div class="teacher-info">
              <img src="<?php echo the_field('teacher6photo'); ?>" alt="">
               <div class="teacher-info__text">
                  <p><?php echo the_field('teacher6name'); ?></p>
                  <p><?php echo the_field('teacher6info'); ?></p>
               </div>

              </div>
        </div>
      </div>
<?php get_footer();?>






