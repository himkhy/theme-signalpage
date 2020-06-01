<?php
/**
 * The template for displaying all pages
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *

 */

get_header(); ?>
 		
<?php while(have_posts()):the_post();?>
   	 <?php the_title();?>  
   	<?php 
	the_post_thumbnail('post-thumbnails',array('class'=>'image_block_right'));?>
   	<?php the_content();?>

   <?php endwhile ?>  		 
 


 

<?php
get_footer();
?>