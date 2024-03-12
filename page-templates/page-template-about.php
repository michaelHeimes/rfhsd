<?php 
/* Template Name: About Page	
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
			<?php if( !empty( $fields['people_intro'] ) ):?>
			<div class="story story1" id="entry234">
				<?= $fields['people_intro'];?>
			</div>
			<?php endif;?>
			
			<?php
			$args = array(
				'post_type' => 'people',
				'posts_per_page' => -1,
			);
			
			$loop = new WP_Query($args);
			
			if ($loop->have_posts()):?>
			<div class="w12-12 intro">
				<?php while ($loop->have_posts()) {
					$loop->the_post();
					$post_thumbnail_url = get_the_post_thumbnail_url();
				?>
				<?php get_template_part('template-parts/part', 'people-content',
					array(
						'fields' => $fields,
					),
				);?>
				<?php }
				wp_reset_postdata();?>
			</div>
			<?php endif;?>
			<?php 
			$link = $fields['partner_link'];
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<div class="w12-12 left">
					<a class="specialbutton" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
			<?php endif; ?>
			
			
			
			
				
			</div>
			<div class="clr mainbox_bottom"></div>
		</div> <!--// mainbox //-->
				
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();