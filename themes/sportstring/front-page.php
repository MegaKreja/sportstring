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

		<div class="location-info row">
			<?php echo do_shortcode( '[google_map_easy id="1" extra_class_classes="location-info-map"]' ) ?>
			<div class="location-info-text">
				<img class="logo" src="<?php echo wp_get_attachment_image_src( 5, 'full', false )[0]  ?>" alt="">
				<h1>Welcome to Sportreat</h1>
				<p>Welcome.  Sportreat and TotaLife Care is a premier multidisciplinary health care facility that believes in total patient care above all else. They offer the highest quality in health services including; Sports Medicine, Physiotherapy, Remedial Massage therapy, Exercise Physiology, Dietetics, Sports Podiatry, Clinical Pilates, and Women’s Health Physiotherapy.</p>
				<p>If you take life seriously and have any aches or pains then let the team at Sportreat and TotaLife Care get you back on your feet because your health matters.</p>
				<h4>Contact us to see how we can help!</h4>
				<button type="button" class="btn green">CALL NOW</button>
				<button type="button" class="btn">EMAIL</button>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();