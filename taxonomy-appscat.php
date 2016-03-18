<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>
tejas
<div id="content">

	<div id="inner-content">

	    <main id="main" class="large-8 medium-8 columns first" role="main">
	
		    <header>
		    	<!-- <h1 class="page-title"><span><?php //_e( 'Posts Categorized:', 'auraweb' ); ?></span> <?php //single_cat_title(); ?></h1> -->
		    </header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'apps' ); ?>
			    
			<?php endwhile; ?>	

				<?php joints_page_navi(); ?>
				
			<?php else : ?>
										
				<?php get_template_part( 'parts/content', 'missing' ); ?>
					
			<?php endif; ?>

	    </main> <!-- end #main -->

	    <?php if ( is_active_sidebar( 'apps_page_sidebar' ) ) : ?>
			<div id="apps-page-sidebar" class="apps-page-sidebar">
				<?php dynamic_sidebar( 'apps_page_sidebar' ); ?>
			</div><!-- #middle-bar-right-sidebar -->
		<?php endif; ?>
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>