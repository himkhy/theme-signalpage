<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
*
*/

get_header(); ?>

	<div class="contianer">
		<?php while(have_posts()):the_post();?>
   	 <?php the_title();?>
  
   	<?php 
	the_post_thumbnail('post-thumbnails',array('class'=>'image_block_right'));?>
   
   	<?php the_content();?>
<a href="<?php the_permalink(); ?>">Reamore</a>
   <?php endwhile ?>  		 
 
	</div>


  <?php
  get_footer();
?>