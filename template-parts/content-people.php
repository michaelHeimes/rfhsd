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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="main" class="fullbox">
		<div id="mainbox" class="mainbox w12-12">
			<div class="w12-12 right breadcrumbs">
				<a href="/about/people/">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
					people
				</a>
			</div>
			<?php get_template_part('template-parts/part', 'people-content',
				array(
					'fields' => $fields,
				),
			);?>
		</div>
		
		<?php
		$args = array(
			'post_type' => 'people',
			'posts_per_page' => -1,
		);
		
		$loop = new WP_Query($args);
		
		if ($loop->have_posts()):?>
		<div id="menubox" class="w12-12">
			<div id="menuboxinner" class="inner">
				<div class="boxtop"></div>
				<div class="boxbody">
					<div id="work_subnav" class="subnav">
						<div id="category_0" class="category category0 catlit">
							<ul class="work_subnav menubox_subnav boxmenu w12-12">
								<?php while ($loop->have_posts()) {
									$loop->the_post();
									$grid_Image = get_field('archive_image');
								?>
									<li id="menuitem_<?= $current_post_id;?>" class="list_menu w12-2 center sqbgimg">
										<span class="menuimage listmenuimg w12-12">
											<a href="<?php the_permalink() ?>" style="background-image:url(<?= esc_url($grid_Image['url']);?>);" class="w12-12 sqbgimg cover">
												<div class="mask"></div>
												<span style="display:none;" aria-hidden="false" class="w12-12"><?php the_title();?></span>
											</a>
										</span>
										<span class="menutitle w12-12">
											<a href="<?php the_permalink() ?>">
												<?php the_title();?>
											</a>
										</span>
										<span class="clr w12-12"></span>
									</li>
								<?php }
								wp_reset_postdata();?>
							</ul>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div>
		<?php endif;?>

</article><!-- #post-<?php the_ID(); ?> -->
