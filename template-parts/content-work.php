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
				<a href="/work/">
					<i class="fa fa-angle-left" aria-hidden="true"></i> 
					work
				</a>
			</div>
			<div id="entry264" class="story imgcount" data-imgcount="">
				
				<div class="w12-6 full51">
					<h1 class="title"><?php the_title();?></h1>
					<?php if( !empty( $fields['location'] ) ):?>
						<h3 class="location"><?= $fields['location'];?></h3>
					<?php endif;?>
					<?php if( !empty( $fields['subtitle'] ) ):?>
						<h2 class="subtitle"><?= $fields['subtitle'];?></h2>
					<?php endif;?>
					<?php if( $fields['copy_rows'] ):
						$copy_rows = $fields['copy_rows'];
						foreach( $copy_rows as $copy_row ):
							$copy = $copy_row['copy'];
					?>
					<div id="body264" class="storyp">
						<?= $copy; ?>
					</div>
					<?php endforeach; endif;?>
				</div>								
								
				<?php if( !empty( $fields['image_gallery'] ) ):
					$images = $fields['image_gallery'];
				?>	
				<div class="w12-6 full51">
					<?php $count = count($images); $i = 1; foreach( $images as $image ):;
						if( !empty( $image ) ) {
							$imgID = $image['ID'];
							$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
							$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
							echo '<div class="w12-12">';
							echo $img;
							if( $count == $i && !empty( $fields['gallery_citation'] ) ) {
								echo '<div class="caption">' . $fields['gallery_citation'] . '</div>';
							}
							echo '</div>';
						}
					$i++; endforeach;?>
				</div>
				<?php endif;?>
				<div class="clr"></div>
			</div>
			<div class="clr mainbox_bottom"></div>
		</div> <!--// mainbox //-->
		
		<?php
		$args = array(
			'post_type' => 'work',
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
									$post_thumbnail_url = get_the_post_thumbnail_url();
								?>
									<li id="menuitem_<?= $current_post_id;?>" class="list_menu w12-2 center sqbgimg">
										<span class="menuimage listmenuimg w12-12">
											<a href="<?php the_permalink() ?>" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" class="w12-12 sqbgimg cover">
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
