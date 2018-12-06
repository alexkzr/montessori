/* Template Name: Material
*/

<?php include 'header.php'?>
<?php include 'sitemap.php'?>
<?php 
  $id=42; 
  $post = get_post($id); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;  
  ?>
  <!--
   <div class="document hidden-xl">
      <a href="<?php /*echo the_field('mat-doc1');*/ ?>" class="download" download><img src="<?php/* echo get_template_directory_uri(); */?>/img/document.png" alt="download" class="img">
        <p class="description"><?php/* echo the_field('mat-doc-name');*/ ?></p>
      </a>
    </div>
  </div>
</div>
-->

<?php include 'footer.php'?>