<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */
$fields = get_fields();
?>
<div id="main" class="fullbox">
	<div id="mainbox" class="mainbox w12-12">
		<div class="w12-12 right">
			<h4><a href="/insights/"><i class="fa fa-chevron-left" aria-hidden="true"></i> insights</a></h4>
		</div>
		<div class="story story1" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header w12-12">
					<h1 class="title" itemprop="headline name"><?php the_title();?></h1>
						<div class="entry-meta">
							<h3 class="thedate storydate articledate" itemprop="datePublished" content="2023-05-22">
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
						</div><!-- .entry-meta -->
						<div itemscope="" itemtype="http://schema.org/ImageObject" itemprop="image" class="imageblockcenter mainimg onload-fadein">
							<meta itemprop="url" content="<?php the_permalink();?>">
							<?php 
								rfhsd_post_thumbnail(); 
								$thumbnail_id = get_post_thumbnail_id();
								$caption = wp_get_attachment_caption($thumbnail_id);
							?>
							<?php if( !empty($caption) ):?>
								<p class="caption" itemprop="description"><?= esc_attr( $caption );?></p>
							<?php endif;?>
						</div>
				</header><!-- .entry-header -->
							
				<div class="entry-content w12-12 story">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rfhsd' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
					?>
					<?php if( !empty( $fields['multi-links'] ) ):
						$multi_links = $fields['multi-links'];	
					?>
					<ul class="multilinks">
						<?php foreach( $multi_links as $multi_link ):
							$link = $multi_link['link'];	
						?>
							<?php if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<li>
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</li>
							<?php endif;?>
						<?php endforeach;?>
					</ul>
					<?php endif;?>
					<div class="clr"></div>
				</div><!-- .entry-content -->
				
				<?php
				$args = array(
					'post_type' => 'insight',
					'posts_per_page' => -1,
				);
				$loop = new WP_Query($args);
				
				if ($loop->have_posts()):?>
				<footer class="entry-footer w12-12">
					<div id="menubox" class="w12-12">
						<?php while ($loop->have_posts()) {
							$loop->the_post();
							$post_thumbnail_url = get_the_post_thumbnail_url();
							get_template_part('template-parts/loop', 'news-grid', array(
								'tax' => 'insight-type',
							));
						}
						wp_reset_postdata();?>
					</div>
				</footer><!-- .entry-footer -->
				<?php endif;?>
				
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>