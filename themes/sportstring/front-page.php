<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sportstring
 */

get_header();
?>
	<div id="primary" class="content-area">
		<div class="video-container row welcome">
				<video autoplay muted loop>
						<source src="http://localhost/sportstring/wp-content/uploads/2019/08/welcome.mp4" type="video/mp4">
				</video>
				<div class="welcome-text">
					<h1>Welcome to Sportreat</h1>
					<button type="button" class="btn">Our Services</button>
				</div>
				<div class="welcome-buttons">
					<div class="welcome-btn">
						<div class="welcome-btn-content">
							<img src="<?php echo wp_get_attachment_image_src( 101, 'full', false )[0]  ?>" alt="">
							<h2>Call</h2>
						</div>
					</div>
					<div class="welcome-btn">
						<div class="welcome-btn-content">
							<img src="<?php echo wp_get_attachment_image_src( 100, 'full', false )[0]  ?>" alt="">
							<h2>Book</h2>
						</div>
					</div>
					<div class="welcome-btn">
						<div class="welcome-btn-content">
							<img src="<?php echo wp_get_attachment_image_src( 99, 'full', false )[0]  ?>" alt="">
							<h2>Ask</h2>
						</div>
					</div>
					<div class="welcome-btn">
						<div class="welcome-btn-content">
							<img src="<?php echo wp_get_attachment_image_src( 102, 'full', false )[0]  ?>" alt="">
							<h2>Shop</h2>
						</div>
					</div>
				</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();