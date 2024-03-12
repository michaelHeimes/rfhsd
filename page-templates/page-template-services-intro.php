<?php 
/* Template Name: Services Intro Page 	
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
			<div class="story story1" id="entry234">
				<?php if( !empty( $fields['title'] ) ):?>
				<h1 class="title"><?= $fields['title'];?></h1>
				<?php endif;?>
				<?php if( !empty( $fields['subtitle'] ) ):?>
				<h2 class="subtitle"><?= $fields['subtitle'];?></h2>
				<?php endif;?>
				<?php if( !empty( $fields['copy'] ) ):?>
				<div class="storyp">
				<?= $fields['copy'];?>
				</div>
				<?php endif;?>
			</div>	
			<?php
			$args = array(
				'post_type' => 'service',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);
			
			$loop = new WP_Query($args);
			
			if ($loop->have_posts()):?>
			<div class="w12-12 intro">
				<?php while ($loop->have_posts()) {
					$loop->the_post();
					$post_thumbnail_url = get_the_post_thumbnail_url();
				?>
				<a id="introentry235" href="<?php the_permalink();?>" class="w12-4 full51 introentry">
					<div class="mask"></div>
					<div class="w12-12 nopadd center introimg" style="background-image:url(<?= $post_thumbnail_url;?>);">
						<div class="nametitle">
							<h2><?php the_title();?></h2>
						</div>
					</div>
				</a>
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
				<div class="w12-12 center">
					<a class="specialbutton" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa fa-handshake-o" aria-hidden="true"></i> <?php echo esc_html( $link_title ); ?></a>
				</div>
			<?php endif; ?>
			
			
			
			
				
			</div>
			<div class="clr mainbox_bottom"></div>
		</div> <!--// mainbox //-->
				
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();