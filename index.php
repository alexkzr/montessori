/* Template Name: index
*/

<?php include 'header.php'?>
    <div class="main">
      <div class="main-slider">
        <div class="slide slide1">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading">добро пожаловать в international montessori school</div>
            </div>
          </div>
        </div>
        <div class="slide slide2">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading">добро пожаловать в international montessori school</div>
            </div>
          </div>
        </div>
        <div class="slide slide3">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading">добро пожаловать в international montessori school</div>
            </div>
          </div>
        </div>
        <div class="slide slide4">
          <div class="container">
            <div class="backdrop">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="" class="logo">
              <div class="heading">добро пожаловать в international montessori school</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.main -->
  </div>
  <!-- /.section-main -->
  <div class="section-about">
    <div class="container d-flex">
      <div class="section-about_wrap">
        <div class="section-about__img"><img src="<?php echo get_template_directory_uri(); ?>/img/main/main_about.png" alt=""></div>
        <div class="section-about__text">
          <div class="section-about_heading">О НАС</div>
          <div class="section-about_descr">
            <p>
              Международная Школа Монтессори - это школа с полным
              погружением в английский язык для детей от 2 до 7 лет.
            </p>
            <p>
              Школа расположена в исторической части Санкт-Петербурга
              на Васильевском острове. IMS в течение 20 лет является ведущей
              международной школой для детей из иностранных семей
              проживающих в Санкт-Петербурге, сохраняя безупречную репутацию.
            </p>
            <p>
              Школа является преемницей Аmerican Montessori
              International,
              основана Монтессори-педагогом...
            </p>
          </div>
          <button class="button about-button">читать полностью</button>
        </div>
      </div>
      </div>
    <!-- /.section-about -->
    <div class="section-gallery">
      <div class="container">
        <div class="gallery-heading">ФОТОГАЛЕРЕЯ</div>
        <div class="gallery-slider">
          <a href="img/gallery/img1.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img1.jpg" alt="" class="slide1-img slide-img"></a>
          <a href="img/gallery/img2.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img2.jpg" alt="" class="slide2-img slide-img"></a>
          <a href="img/gallery/img3.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img3.jpg" alt="" class="slide3-img slide-img"></a>
          <a href="img/gallery/img4.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img4.jpg" alt="" class="slide4-img slide-img"></a>
          <a href="img/gallery/img5.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img5.jpg" alt="" class="slide5-img slide-img"></a>
          <a href="img/gallery/img6.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img6.jpg" alt="" class="slide6-img slide-img"></a>
          <a href="img/gallery/img7.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img7.jpg" alt="" class="slide7-img slide-img"></a>
          <a href="img/gallery/img8.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img8.jpg" alt="" class="slide8-img slide-img"></a>
          <a href="img/gallery/img9.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img9.jpg" alt="" class="slide9-img slide-img"></a>
          <a href="img/gallery/img10.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img10.jpg" alt="" class="slide10-img slide-img"></a>
          <a href="img/gallery/img11.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img11.jpg" alt="" class="slide11-img slide-img"></a>
          <a href="img/gallery/img12.jpg" data-lightbox="image-1"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img12.jpg" alt="" class="slide12-img slide-img"></a>
        </div>
        <button class="button gallery-all">смотреть все фото</button>
      </div>
    </div>
    <!-- /.section-gallery -->
    <div class="section-vr">
      <div class="container">
        <div class="section-heading">ВИРТУАЛЬНЫЙ ТУР</div>
        <iframe src="http://home.krasko.su/171016_montess/" width="100%" height="450" scroll="no">
        </iframe>
      </div>
    </div>
    <!-- /.section-vr -->
<?php include 'contacts-b.php'?>
<?php include 'map.php'?>

<?php include 'footer.php'?>