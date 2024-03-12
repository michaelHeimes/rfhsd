<?php 
/* Template Name: Work Page	
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
		</div>
		<?php
		$taxonomy = 'work-type';
		
		$terms = get_terms(array(
			'taxonomy' => $taxonomy,
			'hide_empty' => true,
		));
		
		if ($terms):?>
			<div class="w12-12 intro">
			<?php foreach ($terms as $term):
				$term_link = get_term_link($term);
				$thumbnail = get_field('thumbnail', $taxonomy . '_' . $term->term_id);
			?>
				<a id="introentry<?= $term->term_id;?>" href="<?= $term_link; ?>" class="w12-6 full51 introentry">
					<div class="mask"></div>
					<div class="w12-12 nopadd center introimg" style="background-image:url(<?php if ($thumbnail) { echo esc_url( $thumbnail['url']);}?> )" title="<?php the_title();?>">
						<div class="nametitle">
							<h2><?= $term->name;?></h2>
						</div>
					</div>
				</a>
			<?php endforeach;?>
			</div>
		<?php endif;?>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();