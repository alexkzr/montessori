/* Template Name: Scholarships
*/

<?php include 'header.php'?>
<?php include 'sitemap.php'?>
<?php 
  $id=44; 
  $post = get_post($id); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;  
  ?>
<?php include 'footer.php'?>