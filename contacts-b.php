    <div class="section-contacts" style="background: <?php echo the_field('contact-section-color');?>">
      <div class="container">
        <div class="section-info">
                  <?php
            $post_id = 720;
            $newpost = pll_get_post($post_id);
            $queried_post = get_post($newpost);
            $content = $queried_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
          <div class="section-info_contacts">
            <div class="heading"><?php echo the_field('contact-section-heading1');?></div>
            <div class="item">
              <img src="<?php echo the_field('contact-section-address_img');?>" alt="">
              <p><?php echo the_field('contact-section-address');?></p>
            </div>
            <div class="item">
              <img src="<?php echo the_field('contact-section-email_img');?>" alt="">
              <p><a href="<?php echo the_field('contact-section-email');?>"><?php echo the_field('contact-section-email');?></a></p>
            </div>
            <div class="item">
              <img src="<?php echo the_field('contact-section-phone_img');?>" alt="">
              <div class="item-numbers">
                <p><a href="<?php echo the_field('contact-section-phone1');?>"><?php echo the_field('contact-section-phone1');?></a></p>
                <p><a href="<?php echo the_field('contact-section-phone2');?>"><?php echo the_field('contact-section-phone2');?></a></p>
              </div>
            </div>
          </div>
          <div class="section-info_time">
            <div class="heading"><?php echo the_field('contact-section-heading2');?></div>
            <div class="item">
              <img src="<?php echo the_field('contact-section-workdays_img');?>" alt="">
              <p><?php echo the_field('contact-section-workdays');?></p>
            </div>
            <div class="item">
              <img src="<?php echo the_field('contact-section-workhours_img');?>" alt="">
              <p><?php echo the_field('contact-section-workhours');?></p>
            </div>
            <div class="item"><button class="button button-contacts">связаться с нами</button></div>
          </div>
          <div class="section-info_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/main-logo-large.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- /.section-contacts -->
