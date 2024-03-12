<?php
/*
 * Template Name: category-slug
 * Template Post Type: category-slug
 */
   
 get_header();  ?>

	<main id="primary" class="site-main">
		<h1>CATEGORIES</h1>

		<?php
		while ( have_posts() ) :
			the_post();
			
			echo '<div class="w12-4"><a href="'.esc_url( get_permalink()).'" rel="bookmark"><span class="mask"></span><span class="w12-12 rectbgimg cover menuimage" style="background-image:url('.rfhsd_post_thumbnail().');"></span><span class="menutitle">'.wp_kses_post( get_the_title() ).'</span></a></div>';

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
