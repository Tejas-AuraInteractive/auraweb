<?php
/*
Template Name: Front Page (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">

		    	<?php if ( is_active_sidebar( 'homepage_content' ) ) : ?>
					<div id="homepage-content" class="homepage-content">
						<div class="fullscreen-bg">
							<div class="overlay-text text-center">
								<h1 class="light white-text text-center">We Build Reality</h1>
								<div class="row">
									<div class="large-8 columns large-centered text-center white-text">
										<p class="lead white-text">Here at <strong>Aura Interactive</strong>, We create next generation Augmented Reality and Virtual Reality Applications.</p>
									</div>
									<a href="http://aura-interactive.com/solarar/" class="button large-btn">Explore our App</a>
								</div>
							</div>
							<div class="show-for-small-only small-down-bg-image"></div>
						    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg_video hide-for-small-only">
						        <source src="http://aura-interactive.com/wp-content/themes/auraweb/assets/aura-homescreen-video.webm" type="video/webm">
						        <source src="http://aura-interactive.com/wp-content/themes/auraweb/assets/aura-homescreen-video.mp4" type="video/mp4">
						    </video>
						</div>
						<?php dynamic_sidebar( 'homepage_content' ); ?>
					</div><!-- #middle-bar-right-sidebar -->
				<?php endif; ?>
				
										

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
