<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon links -->
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="manifest" href="/montessoriwp/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- Bootstrap CSS -->

  <title>Международная школа Монтессори</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="section-main">
    <header class="header site-header" id="masthead">
      <div class="header-top">
        <div class="container">
          <div class="header-top_container header-top_container1">
            <div class="logo"></div>
            <div class="header-top__contacts">
              <a href="tel:+79219935550" class="header-phone" autofocus>+7(921) 993-5550 </a>
              <a href="mailto:info@montessori-petersburg.com" class="header-email">info@montessori-petersburg.com</a>
            </div>
          </div>
          
          <div class="header-top_container header-top_container2">
            <div class="menu-cover"><span class="menu"></span></div>
            <div class="header-top__buttons">
              <?php echo do_shortcode('[FTVI]'); ?>
            <div class="select-wrap"><?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1,'dropdown' => 1 ) ); ?></div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /.header-top -->
      <nav class="header-bottom">
        <div class="container">
							<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
        </div>
      </nav>
      <!-- /.header-bottom -->
    </header>
    <!-- /.header -->



	<div id="content" class="site-content">
