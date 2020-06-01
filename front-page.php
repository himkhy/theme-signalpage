<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

 ?>
<?php get_header();?>

  <div class="carousel fade" data-ride="carousel" id="featured">

    <ol class="carousel-indicators">
    </ol>

    <div class="carousel-inner fullheight">


    <?php $query=new wp_query(array(
   	 'post_type' =>'slideimage',   				 
   	 'orderby'    	  => 'ID',
   	 'order'  		  => 'DESC',
   	 'posts_per_page' =>4
   	 
   	 ));
    ?>
    <?php while($query->have_posts()):$query->the_post();?>
    
    <div class="item">
        	<?php the_post_thumbnail();?>
        </div>
   
    <?php endwhile ?>



        <div class="item">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/carousel-fish.jpg" alt="Fish">
        </div>
   

    </div><!-- carousel-inner -->

    <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#featured" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>


  </div><!-- featured carousel -->
</header>

<div class="main">
  <div class="page" id="mission">
    <div class="content container">
     
     <?php 
		$query = new WP_Query( 'pagename=mission' );
			

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					
	?>	

				<h2><?php the_title(); ?></h2>
				<?php the_content();?>

	<?php
			}
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>


    </div><!-- content container -->
  </div><!-- mission page -->




  <div class="page" id="service">
    <div class="content container">
      
        <?php 
		$query = new WP_Query( 'pagename=service' );
			

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					
	?>	

				<h2><?php the_title(); ?></h2>
				<?php the_content();?>

	<?php
			}
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>

    </div><!-- content container -->
  </div><!-- services page -->

  <div class="page" id="staff">
    <div class="container-fluid">
      <div class="page" id="services">
    <div class="content container">
      
        <?php 
		$query = new WP_Query( 'pagename=staff' );
			

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					
	?>	

				<h2><?php the_title(); ?></h2>
				<?php the_content();?>

	<?php
			}
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>
    </div><!-- container -->
  </div><!-- staff page -->
</div>
</div>
  <div class="page" id="press">
    <div class="container-fluid">
      
    	
		      
		        <?php 
				$query = new WP_Query( 'pagename=press' );
					

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							
			?>	

						<h2><?php the_title(); ?></h2>						

			<?php
					}
				}
				
				/* Restore original Post Data */
				wp_reset_postdata();
			?>
   		<div class="container">
<div class="row">



	<div class="info">
   <?php
   	 $wp_query=new wp_query(array(
   	 'post_type'      => 'post',
   	 'category_id'  =>    3,
   	 'orderby'        => 'ID',
   	 'order'  	    => 'DESC',
   	 'posts_per_page' => 4
   	 
   	 ));
   ?>
   
   <?php while($wp_query->have_posts()):$wp_query->the_post();?>
 		

   	
   



<div id="johnb" class="col-md-6 col-lg-3">
<div class="quote">
	<h2><?php the_title();?></h2>
	<div class="images-syle" ><?php 
		the_post_thumbnail('post-thumbnails',array('class'=>'image_block_right'));?>
			
	</div>
			<?php the_content();?>
			<a href="<?php the_permalink(); ?>">Reamore</a>
</div>
</div>


   <?php endwhile ?>  		 
 </div>



</div>
</div>
    </div><!-- container-fluid -->
  </div><!-- Press page -->


   <div class="page" id="contact">
    <div class="container-fluid">
    	 <?php 
		$query = new WP_Query( 'pagename=contact' );
			

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					
	?>	

				<h2><?php the_title(); ?></h2>
				<?php the_content();?>

	<?php
			}
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	?>
      
      
    </div><!-- container-fluid -->
  </div><!-- Contact page -->

</div><!-- main -->
<?php get_footer();?>