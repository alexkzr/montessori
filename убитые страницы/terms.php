<?php get_header();?>

      <div class="terms-section">
        <div class="terms">
          <div class="container">
            <div class="terms-text">
              <?php 
                $post_id = 21;
                $newpost = pll_get_post($post_id);
                $queried_post = get_post($newpost);
                $content = $queried_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="0" PAGINATE="1" PERPAGE="0" SHOWFORM="1" HIDEREVIEWS="1" HIDERESPONSE="1" SNIPPET="" MORE="" HIDECUSTOM="1" ]');
              ?>
            </div>
          </div>
        </div>
        <!-- /.terms -->
        <div class="reviews">
          <div class="reviews-heading">отзывы</div>
          <div class="container">
            <div class="reviews-wrap">
            <?php echo do_shortcode('[WPCR_SHOW POSTID="ALL" NUM="5" PAGINATE="1" PERPAGE="5" SHOWFORM="1" HIDEREVIEWS="0" HIDERESPONSE="0" SNIPPET="" MORE="" HIDECUSTOM="0" ]');?>
              <!-- <div class="review review1">
                <div class="review-img"></div>
                <div class="review-text">
                  <div class="review-text__name">Nam Kyung Lee</div>
                  <div class="review-text__date">Feb 5, 2015</div>
                  <div class="review-text__descr">
                    Wonderful teachers and great curriculum for non-native
                    english speaking kids. My 2 children Liam and Sophia
                    graduated there. At the first time they couldn't speak
                    english at all. But in the short time they could speak well.
                    We came back our home country but my kids keep telling me
                    they still miss there and want to go there again. I strongly
                    suggest those who looking for the best pre school in SPB.
                  </div>
                </div>
              </div>
              <div class="review review2">
                <div class="review-img"></div>
                <div class="review-text">
                  <div class="review-text__name">Alexandra Razumova</div>
                  <div class="review-text__date">Jan 21, 2015</div>
                  <div class="review-text__descr">
                    My sons went to IMS. It is a great place for education and
                    for the cotmmunication between children and adults. The
                    director is exciting and taking care of child development. I
                    truly recommend the school.
                  </div>
                </div>
              </div>
              <div class="review review3">
                <div class="review-img"></div>
                <div class="review-text">
                  <div class="review-text__name">Ksenia Klima</div>
                  <div class="review-text__date">Jan 20, 201</div>
                  <div class="review-text__descr">
                    What a beautiful school. I had a privilege working with the
                    director Karan Young and she is absolutely phenomenal in
                    regards of children's education. I am very excited about
                    this new location.
                  </div>
                </div>
              </div>
              <div class="review review4">
                <div class="review-img"></div>
                <div class="review-text">
                  <div class="review-text__name">Anu Berghuis</div>
                  <div class="review-text__date">Jan 19, 2015</div>
                  <div class="review-text__descr">
                    Our three children went to the IMS and I can truly recommend
                    the school. It will be difficult to find a school with more
                    dedicated staff and director.
                  </div>
                </div>
              </div>
              <div class="review review5">
                <div class="review-img"></div>
                <div class="review-text">
                  <div class="review-text__name">Maksim Avilov</div>
                  <div class="review-text__date">Nov 21, 2015</div>
                  <div class="review-text__descr">
                    Our daughter went to the International Montessori School.
                    Big thank you to the IMS staff and personally to Karan for
                    their great effort.
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- /.reviews -->
      </div>
      <!-- /.terms-section -->

<?php get_footer();?>