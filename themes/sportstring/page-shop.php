<?php
get_header();?>
<div class="shop row">
  <div class="container">
    <?php  
    
    while ( have_posts() ) :
          the_post();

          the_content();

        endwhile; // End of the loop.
    
    ?>
  </div>
</div>
<?php
get_footer();
?>