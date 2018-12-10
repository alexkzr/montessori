/* Template Name: Vacancies
*/

<?php get_header();?>
<?php include 'sitemap.php'?>
<?php 
  $id=50; 
  $post = get_post($id); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;  
  ?>

<?php get_footer();?>