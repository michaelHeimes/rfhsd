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
				<a href="/approach/">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
					approach
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
				
				<div id="body1_235" class="storyp w12-12">
					<h3>See Some of Our Work</h3>
					<?php
					$featured_work = $fields['work'];
					if( $featured_work ): ?>
						<div class="sampleimages w12-12">
							<?php foreach( $featured_work as $post ): 
								setup_postdata($post); 
								$post_thumbnail_url = get_the_post_thumbnail_url();
							?>
								<a href="<?php the_permalink();?>" id="sampleimage<?php get_the_ID();?>" class="w12-4 full51 center sqbgimg cover sampleimage" title="Tasting Counter" style="background-image:url(<?= esc_url($post_thumbnail_url);?>);">
									<span class="mask"></span>
									<span class="text"><?php the_title();?></span>
								</a>
							<?php endforeach; ?>
						</div>
						<?php 
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<?php
				$recent_partners = $fields['recent_partners'];
				if( $recent_partners ): ?>
					<div id="body2_235" class="storyp w12-12">
						<h3>Recent Partners</h3>
						<div class="w12-12 approach_partners">
							<?php foreach( $recent_partners as $post ): 
							setup_postdata($post); 
								$logo = get_field('logo');
								$name = get_the_title();
								$url = get_field('url');	
							?>
								<?php if( !empty($url) ):?>
									<a href="http://www.sasaki.com/" target="_blank" class="partnerblock" title="<?= $name;?>" style="background-image:url(<?= $logo['url'];?>);">
								<?php else:?>
									<div class="partnerblock" title="<?= $name;?>" style="background-image:url(<?= $logo['url'];?>);">
								<?php endif;?>
								<span class="screen-reader-text"><?= $name;?></span>
								<?php if( !empty($url) ):?>
									</a>
								<?php else:?>
									</div>
								<?php endif;?>
							<?php endforeach; ?>
						</div>
					<?php 
					wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>
				<?php 
				$link = $fields['partner_link'];
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<div class="w12-12 center">
						<a class="specialbutton" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
				<?php endif; ?>
				
				<?php
				$testimonials = $fields['testimonials'];
				if( $testimonials ): ?>
					<?php foreach( $testimonials as $post ): 
						$quote = wpautop( $post->post_content );
						$attribution = get_the_title();
						setup_postdata($post); ?>
						<div class="storyp w12-12">
							<div class="testimonialblock">
								<div class="w12-8 full51 start">
									<blockquote>
										<?php if( !empty($quote) ):?>
										<?= $quote;?>
										<?php endif;?>
										<?php if( !empty($attribution) ):?>
										<div class="attribution"><?= $attribution;?></div>
										<?php endif;?>
									</blockquote>
								</div>
								<?php if( has_post_thumbnail() ) {
									echo '<div class="w12-4 full51 end">';
									the_post_thumbnail();
									echo '</div>';
								}?>
							</div>
						</div>
						<div class="clr"></div>
					<?php endforeach; ?>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>				
			</div>
			<div class="clr mainbox_bottom"></div>
		</div> <!--// mainbox //-->
				
		<?php
		$args = array(
			'post_type' => 'approach',
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
								?>
									<li id="menuitem_235" class="list_menu lit w12-2 center sqbgimg">
										<span class="menuimage listmenuimg w12-12">
											<a href="https://rfhsd.com/approach/architects/"  style="background-image:url(<?= esc_url($post_thumbnail_url);?>);" class="w12-12 sqbgimg cover">
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
