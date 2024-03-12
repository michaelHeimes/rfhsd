<?php 
/* Template Name: Insights Page 	
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */	

	
get_header();
$fields = get_fields();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="main" class="intro fullbox">
		<div id="mainbox" class="w12-12">
			<div class="inner">
				<h1 class="family"><a href="<?php get_permalink();?>"><?php the_title();?></a></h1>
				<p class="left"><?= $fields['intro_text'];?></p>
				<div class="w12-12">
					<?php
					$args = array(
						'post_type' => 'insight',
						'posts_per_page' => 1,
					);
					
					$loop = new WP_Query($args);
					
					if ($loop->have_posts()):
						while ($loop->have_posts()) {
							$loop->the_post();
							$post_thumbnail_url = get_the_post_thumbnail_url();
						?>
						<div id="introgridbox1104" class="blog_introgrid_box feature w12-12">
							<div class="inner">
								<a href="<?php the_permalink();?>" class="blog_introgrid_img w12-6 full42 sqbgimg rectbgimg contain" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" title="<?php the_title();?>"></a>
							<div class="blog_introgrid_bodyclass w12-6 full42" onclick="document.location='<?php the_permalink();?>'">
								<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<h3 class="thedate">
									<?= get_the_date('l, F j, Y');?>
									<?php
									$post_id = get_the_ID();  // Assuming you're inside the loop
									
									// Get all taxonomy terms for 'insight-type' associated with the post
									$terms = get_the_terms($post_id, 'insight-type');
									
									if ($terms && !is_wp_error($terms)) {
										echo '| ';
										$term_names = array();
									
										// Loop through each term and add its name (lowercased) to the array
										foreach ($terms as $term) {
											$term_names[] = strtolower($term->name);
										}
									
										// Output the term names separated by commas
										echo implode(', ', $term_names);
									}
									?>
								</h3>
								<div class="introbody">
									<?php
										$content = wpautop( $post->post_content );
										$excerpt_length = 75;
										$excerpt_more = '<a href="' . get_the_permalink() . '">[...] read more  <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
										$words = explode(' ', $content);
										$custom_excerpt = implode(' ', array_slice($words, 0, $excerpt_length));
										echo $custom_excerpt;
									?>
									<a href="<?php the_permalink();?>">[...] read more  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="clr"></div>
						</div>
					<?php }
					wp_reset_postdata(); endif;?>
				</div>
				
				<div class="w12-12">
					<div class="inner">
						<?php
						$args = array(
							'post_type' => 'insight',
							'posts_per_page' => 6,
							'offset'         => 1,
						);
						
						$loop = new WP_Query($args);
						
						if ($loop->have_posts()):
							while ($loop->have_posts()) {
								$loop->the_post();
								$post_thumbnail_url = get_the_post_thumbnail_url();
							?>
						<div id="introgridbox1099" class="blog_introgrid_box w12-12">
							<div class="inner">
								<a href="https://rfhsd.com/blog/starting-and-succeeding-from-scratch/" class="blog_introgrid_img w12-2 sqbgimg cover start" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" title=""></a>
								<div class="blog_introgrid_bodyclass w12-10 end" onclick="document.location='<?php the_permalink();?>'">
									<h2 class="title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h2>
									<h3 class="thedate">
										<?= get_the_date('l, F j, Y');?>
										<?php
										$post_id = get_the_ID();  // Assuming you're inside the loop
										
										// Get all taxonomy terms for 'insight-type' associated with the post
										$terms = get_the_terms($post_id, 'insight-type');
										
										if ($terms && !is_wp_error($terms)) {
											echo '| ';
											$term_names = array();
										
											// Loop through each term and add its name (lowercased) to the array
											foreach ($terms as $term) {
												$term_names[] = strtolower($term->name);
											}
										
											// Output the term names separated by commas
											echo implode(', ', $term_names);
										}
										?>
									</h3>
									<div class="introbody">
										<?php
											$content = wpautop( $post->post_content );
											$excerpt_length = 75;
											$words = explode(' ', $content);
											$custom_excerpt = implode(' ', array_slice($words, 0, $excerpt_length));
											echo $custom_excerpt;
										?>
										<a href="<?php the_permalink();?>">[...] read more  <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="clr"></div>
							</div>
						</div>
						<?php }
						wp_reset_postdata(); endif;?>
						
						<?php
						$args = array(
							'post_type' => 'insight',
							'posts_per_page' => 99999,
							'offset'         => 7,
						);
						
						$loop = new WP_Query($args);
						
						if ($loop->have_posts()):
						?>	
							<div id="viewmorearchivesbutton" class="w12-12 center">
								<a href="#more" onclick="$('#viewmorearchives').removeClass('hidden');$('#viewmorearchivesbutton').addClass('hidden');" class="specialbutton">More Archives</a>
							</div>
							<div id="viewmorearchives" class="w12-12 hidden">
							<?php while ($loop->have_posts()) {
								$loop->the_post();
							get_template_part('template-parts/loop', 'news-grid', array(
								'tax' => 'insight-type',
							));
						}
						wp_reset_postdata();?>
						</div>
						<?php endif;?>
					</div>
				</div>
		</div>
</div>


</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();