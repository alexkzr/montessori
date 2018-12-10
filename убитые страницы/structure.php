/* Template Name: Structure
*/

<?php get_header();?>
<?php include 'sitemap.php'?>
  <?php 
  $id=30; 
  $post = get_post($id); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;  
  ?>
<?php get_footer();?>