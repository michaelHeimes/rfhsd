<?php 
/* Template Name: Services Page	
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */	
get_header();
$fields = get_fields();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="main" class="fullbox">
		<div id="mainbox" class="mainbox w12-12">
			<div class="entries">
				<?php			
				$args = array(  
					'post_type' => 'service',
					'post_status' => 'publish',
					'posts_per_page' => -1,
				);
				
				$loop = new WP_Query( $args ); 
				
				if ( $loop->have_posts() ) : 
					$post_count = 0; 
					while ( $loop->have_posts() ) : $loop->the_post();
						$class1 = ($post_count % 2 === 0) ? ' floatright' : 'floatleft';
						$class2 = ($post_count % 2 === 0) ? ' floatleft' : 'floatright';
						$post_thumbnail_url = get_the_post_thumbnail_url();
						$image_id = get_post_thumbnail_id();
						$alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
					?>
					<div id="entry<?= get_the_ID();?>" class="story shadowbox">
						<div class="inner">
							<div class="w12-6 full51 <?= esc_attr( $class1 );?>">
								<div class="mask"></div>
								<div class="serviceimage w12-12 rectbgimg cover serviceimage" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" title="<?= $alt_text;?>"></div>
							</div>
							<div class="w12-6 full51 <?= esc_attr( $class2 );?>">
								<h1 class="title uppercase"><?php the_title();?></h1>
								<div class="storyp">
									<?php the_content();?>
								</div>
							</div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
					<?php
					$post_count++;
					endwhile;
				endif;
				wp_reset_postdata(); 
				?>
				
				<div id="entry900" class="story">
					<div class="inner">
						<div id="body900" class="storyp">
							<?php if( !empty( $fields['outro_copy'] ) ):?>
								<?php echo $fields['outro_copy'];?>
							<?php endif;?>
							<?php 
							$link = $fields['connect_link'];
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<p style="text-align: center;">
									<a class="specialbutton" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</p>
							<?php endif; ?>
						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
get_footer();