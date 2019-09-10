<?php
/*Template Name: Contact Us*/
get_header();?>
<div class="container">
  <?php  
  
  while ( have_posts() ) :
				the_post();

				the_content();

			endwhile; // End of the loop.
  
  ?>
</div>
<div class="nearfooter-contact resources-nearfooter row">
  <h1>Contact us today to see how we can help!</h1>
  <button type="button" class="btn green">CALL NOW</button>
  <button type="button" class="btn">EMAIL</button>
</div>
<?php
get_footer();
?>