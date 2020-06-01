<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *

 */

?>

<footer>
  <div class="content container-fluid">
      <div class="container">
      <div class="row">
      <div class="col-sm-12">
        
        <p>All contents &copy; 2020 <a href="#">singlepost.com</a>. All rights reserved.</p>    
      </div><!-- col-sm-12 -->
      
    </div><!-- row -->
      </div>
  </div><!-- content container -->
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/myscript.js"></script>
<?php wp_footer();?>
</body>
</html>
