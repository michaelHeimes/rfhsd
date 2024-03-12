<?php 
/* Template Name: People Page	
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
			<div class="story story1 has-subtitle" id="entry234">
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
		</div>

		<?php
		$args = array(
			'post_type' => 'people',
			'post_status' => 'publish',
			'posts_per_page' => -1,
		);
		
		$loop = new WP_Query($args);
		
		if ($loop->have_posts()):
			$post_thumbnail_url = get_the_post_thumbnail_url();	
		?>
		<div class="w12-12 intro">
			<?php while ($loop->have_posts()) {
				$loop->the_post();
				$post_thumbnail_url = get_the_post_thumbnail_url();
			?>
			<a id="introentry2" href="<?php the_permalink();?>" class="w12-4 full51 introentry">
				<div class="mask"></div>
				<div class="w12-12 nopadd center introimg" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);">
					<div class="nametitle">
						<h2><?php the_title();?></h2>
						<?php if( !empty( get_field('title') ) ):?>
						<h3><?php the_field('title');?></h3>
						<?php endif;?>
					</div>
				</div>
			</a>
			<?php };?>
		</div>
		<?php endif;?>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
get_footer();