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
				<a href="/services/">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
					services
				</a>
			</div>
			<div id="entry235" class="story">
				<?php if ( has_post_thumbnail() ) {
					$post_thumbnail_url = get_the_post_thumbnail_url();?>
					<div itemscope="" itemtype="http://schema.org/ImageObject" itemprop="image" class="imagecolumnright mainimg" style="max-width:600px;">
						<meta itemprop="url" content="<?php the_permalink();?>">
						<img srcset="<?= $post_thumbnail_url;?>" sizes="(max-width: 332px) 300px, 600px" src="<?= $post_thumbnail_url;?>" alt="" itemprop="contentUrl" style="opacity: 0;" onload="$(this).animate({opacity:1},333);">
					</div>
					
				<?php };?>
				<h1 class="title"><?php the_title();?></h1>
				<div id="body235" class="storyp">
					<?php the_content();?>
				</div>

			</div>
			<div class="clr mainbox_bottom"></div>
		</div> <!--// mainbox //-->
				
		<?php
		$args = array(
			'post_type' => 'service',
			'posts_per_page' => -1,
		);
		
		$loop = new WP_Query($args);
		
		if ($loop->have_posts()):?>
		<div id="menubox" class="w12-12">
			<div id="menuboxinner" class="inner">
				<div class="boxtop"></div>
				<div class="boxbody">
					<div id="approach_subnav" class="subnav">
						<div id="category_0" class="category category0 catlit">		
							<ul class="approach_subnav menubox_subnav boxmenu w12-12">
								<?php while ($loop->have_posts()) {
									$loop->the_post();
									$post_thumbnail_url = get_the_post_thumbnail_url();
									$permalink = get_the_permalink();
								?>
									<li id="menuitem_235" class="list_menu lit w12-2 center sqbgimg">
										<span class="menuimage listmenuimg w12-12">
											<a href="<?= esc_url($permalink);?>"  style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" class="w12-12 sqbgimg cover">
												<div class="mask"></div>
												<span style="display:none;" aria-hidden="false" class="w12-12"><?php the_title();?></span>
											</a>
										</span>
										<span class="menutitle w12-12">
											<a href="https://rfhsd.com/approach/architects/"><?php the_title();?></a>
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
			</div> <!-- menuboxinner -->
			<div class="boxbottom"></div>
		</div>
		<?php endif;?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
