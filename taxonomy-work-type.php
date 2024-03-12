<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */

get_header();
?>

	<div id="main" class="fullbox">
		<div id="mainbox" class="w12-12">
			<h1 class="family uppercase"><?= single_term_title('', false);?></h1>
			<a href="/work/" class="w12-12 right"><i class="fa fa-angle-left" aria-hidden="true"></i> work</a>
			
			<?php
			if (is_tax()) {
				$current_term = get_queried_object(); // Get the current term
				$term_id = $current_term->term_id;
				$taxonomy = $current_term->taxonomy;
			
				$args = array(
					'post_type' => 'work',  // Replace with your custom post type slug
					'tax_query' => array(
						array(
							'taxonomy' => $taxonomy,
							'field' => 'term_id',
							'terms' => $term_id,
						),
					),
				);
			
				$loop = new WP_Query($args);
			
				if ($loop->have_posts()):?>
					<div class="w12-12 intro">
					<?php while ($loop->have_posts()) {
						$loop->the_post();
						$post_thumbnail_url = get_the_post_thumbnail_url();
					?>
						<a id="introentry816" href="<?php the_permalink();?>" class="w12-4 full51 introentry">
							<div class="mask"></div>
							<div class="w12-12 nopadd center introimg" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" title="<?php the_title();?>">
								<div class="nametitle">
									<h2><?php the_title();?></h2>
								</div>
							</div>
						</a>
					<?php }
					wp_reset_postdata();?>
					</div>
					
				<?php endif;
			}
			?>
		</div>
	</div>
	
<?php
get_footer();