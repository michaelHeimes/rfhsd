<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */
$fields = get_fields();
get_header();
?>
	<?php 
	$link = $fields['top_banner_link'];
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<div id="topbanner">
			<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
				<?php echo esc_html( $link_title ); ?></a>
		</div>
	<?php endif; ?>

	<main id="main" class="site-main">
		<div id="mainbox" class="mainbox w12-12">
			<div class="entries">
				<?php
				while ( have_posts() ) :
					the_post();?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								
						<div class="entry-content">
							
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title sr-only">', '</h1>' ); ?>
							</header><!-- .entry-header -->
							
							<?php
							//the_content();
							?>
							
							<?php if( !empty( $fields['s1_title_hidden'] ) || !empty( $fields['s1_copy'] ) ):?>
							<section class="s1 text-left">
								<div id="story1" class="homepage_entry story  story1" itemprop="mainEntityOfPage" itemscope="" itemtype="https://schema.org/Article">
									<div class="inner">
										<?php if( !empty( $fields['s1_title_hidden'] ) ):?>
										<h1 id="title1" class="title" itemprop="headline about"><?php echo esc_attr( $fields['s1_title_hidden'] );?></h1>
										<?php endif;?>
										<div id="body1" class="storyp" itemprop="articleBody">
	
											<?php if( !empty( $fields['s1_copy'] ) ):?>
												<?php echo $fields['s1_copy'];?>
											<?php endif;?>
											
											
										</div>
										<div class="resources attachments w12-12" data-id="1"></div>
									</div>
									<div class="clr homepagecontentclr"></div>
								</div>							
							</section>
							<?php endif;?>
							
							<?php if( !empty( $fields['s2_image'] ) || !empty( $fields['s2_title'] ) || !empty( $fields['s2_subtitle'] ) || !empty( $fields['s2_copy'] ) ):?>
							<section class="s2 relative">
								<div id="story2" class="homepage_entry story story2 white-text" itemprop="mainEntityOfPage" itemscope="" itemtype="https://schema.org/Article">
									<?php if( !empty( $fields['s2_image'] ) ) {
										$imgID = $fields['s2_image']['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="bannerimage">';
										echo $img;
										echo '</div>';
										echo '<div class="mask"></div>';
									}?>
									<div class="inner">
										<?php if( !empty( $fields['s2_title'] ) ):?>
											<h1 id="title240" class="title" itemprop="headline about"><?php echo esc_attr( $fields['s2_title'] );?></h1>
										<?php endif;?>
										<?php if( !empty( $fields['s2_subtitle'] ) ):?>
											<h2 id="subtitle240" class="subtitle" itemprop="alternateName"><?php echo esc_attr( $fields['s2_subtitle'] );?></h2>
										<?php endif;?>
						
										<?php if( !empty( $fields['s2_copy'] ) ):?>
										<div id="body240" class="storyp text-left" itemprop="articleBody">
											<?php echo $fields['s2_copy'];?>
										</div>
										<?php endif;?>
											
											
										<div class="resources attachments w12-12" data-id="1"></div>
									</div>
									<div class="clr homepagecontentclr"></div>
								</div>							
							</section>
							<?php endif;?>
							
							<?php if( !empty( $fields['cta_icon_html-1'] ) || !empty( $fields['cta_link-1'] ) ):?>
							<ul id="story240cta" class="cta">
								<li>
									<?php 
									$link = $fields['cta_link-1'];
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="link1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<?php echo $fields['cta_icon_html-1'];?>
											<?php echo esc_html( $link_title ); ?>
										</a>
									<?php endif; ?>								
								</li>
							</ul>
							<?php endif;?>
							
							<?php if( !empty( $fields['s3_image'] ) || !empty( $fields['s3_title'] ) || !empty( $fields['s3_subtitle'] ) || !empty( $fields['s3_copy'] ) ):?>
							<section class="s3 relative">
								<div id="story33" class="homepage_entry story white-text story3" itemprop="Article" itemscope="" itemtype="https://schema.org/Article">
									<?php if( !empty( $fields['s3_image'] ) ) {
										$imgID = $fields['s3_image']['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="bannerimage">';
										echo $img;
										echo '</div>';
										echo '<div class="mask"></div>';
									}?>
									<div class="inner">
										<?php if( !empty( $fields['s3_title'] ) ):?>
											<h1 id="title33" class="title" itemprop="headline about"><?php echo esc_attr( $fields['s3_title'] );?></h1>
										<?php endif;?>
										<?php if( !empty( $fields['s3_subtitle'] ) ):?>
											<h2 id="subtitle33" class="subtitle" itemprop="alternateName"><?php echo esc_attr( $fields['s3_subtitle'] );?></h2>
										<?php endif;?>
							
										<?php if( !empty( $fields['s3_copy'] ) ):?>
										<div id="body33" class="storyp text-left" itemprop="articleBody">
											<?php echo $fields['s3_copy'];?>
										</div>
										<?php endif;?>
											
											
										<div class="resources attachments w12-12" data-id="1"></div>
									</div>
									<div class="clr homepagecontentclr"></div>
								</div>							
							</section>
							<?php endif;?>
							
							
							<?php if( !empty( $fields['cta_icon_html-2'] ) || !empty( $fields['cta_link-2'] ) ):?>
							<ul id="sstory240cta" class="cta">
								<li>
									<?php 
									$link = $fields['cta_link-2'];
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="link2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<?php echo $fields['cta_icon_html-2'];?>
											<?php echo esc_html( $link_title ); ?>
										</a>
									<?php endif; ?>								
								</li>
							</ul>
							<?php endif;?>
							
							<?php if( !empty( $fields['s4_image'] ) || !empty( $fields['s4_title'] ) || !empty( $fields['s4_subtitle'] ) || !empty( $fields['s4_copy'] ) ):?>
							<section class="s4 relative">
								<div id="story241" class="homepage_entry story white-text story4" itemprop="Article" itemscope="" itemtype="https://schema.org/Article">
									<?php if( !empty( $fields['s4_image'] ) ) {
										$imgID = $fields['s4_image']['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="bannerimage">';
										echo $img;
										echo '</div>';
										echo '<div class="mask"></div>';
									}?>
									<div class="inner">
										<?php if( !empty( $fields['s4_title'] ) ):?>
											<h1 id="title241" class="title" itemprop="headline about"><?php echo esc_attr( $fields['s4_title'] );?></h1>
										<?php endif;?>
										<?php if( !empty( $fields['s4_subtitle'] ) ):?>
											<h2 id="subtitle241" class="subtitle" itemprop="alternateName"><?php echo esc_attr( $fields['s4_subtitle'] );?></h2>
										<?php endif;?>
							
										<?php if( !empty( $fields['s4_copy'] ) ):?>
										<div id="body241" class="storyp text-left" itemprop="articleBody">
											<?php echo $fields['s4_copy'];?>
										</div>
										<?php endif;?>
											
											
										<div class="resources attachments w12-12" data-id="1"></div>
									</div>
									<div class="clr homepagecontentclr"></div>
								</div>							
							</section>
							<?php endif;?>
	
							<?php if( !empty( $fields['cta_icon_html-3'] ) || !empty( $fields['cta_link-3'] ) ):?>
							<ul id="sstory241cta" class="cta">
								<li>
									<?php 
									$link = $fields['cta_link-3'];
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="link3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<?php echo $fields['cta_icon_html-3'];?>
											<?php echo esc_html( $link_title ); ?>
										</a>
									<?php endif; ?>								
								</li>
							</ul>
							<?php endif;?>
							
						</div><!-- .entry-content -->
	
					</article><!-- #post-<?php the_ID(); ?> -->
		
		
				<?php endwhile; // End of the loop.
				?>
	
			</div><!-- #mainbox -->
			
			<?php if( !empty( $fields['s5_video_url'] ) || !empty( $fields['s6_headline'] ) || !empty( $fields['s6_clients'] ) ):?> 
			<div id="menubox" class="w12-12">
				<div class="w12-12">
					<?php if( !empty( $fields['s5_video_url'] ) ):?> 
					<div class="videowrapper">
						<?php
						
						// Load value.
						$iframe = $fields['s5_video_url'];
						
						// Use preg_match to find iframe src.
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];
						
						// Add extra parameters to src and replace HTML.
						$params = array(
							'controls'  => 0,
							'hd'        => 1,
							'autohide'  => 1
						);
						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);
						
						// Add extra attributes to iframe HTML.
						$attributes = 'frameborder="0"';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
						
						// Display customized HTML.
						echo $iframe;
						?>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/nixW2xsCFds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
					</div>
					<?php endif;?>
				</div>
				
				
				<?php if( !empty( $fields['s6_headline'] ) || !empty( $fields['s6_clients'] ) ):
				$recent_partners = $fields['s6_clients'];
					if( $recent_partners ): ?>
						<div class="w12-12">
							<br>
						</div>
						<div class="w12-12 featuredclients">
							<?php if( !empty($fields['s6_headline']) ):?>
							<h2 class="headline"><?php echo esc_attr( $fields['s6_headline'] );?></h2>
							<?php endif;?>
							<?php if( !empty( $fields['s6_clients'] ) ):
								$s6_clients = $fields['s6_clients'];
							?> 
							<div class="clientlist">
								<?php foreach( $recent_partners as $post ): 
								setup_postdata($post); 
									$logo = get_field('logo');
									$name = get_the_title();
									$url = get_field('url');	
								?>
									<?php if( !empty($url) ):?>
											<a href="http://www.sasaki.com/" target="_blank" class="client clientblock" title="<?= $name;?>" style="background-image:url(<?= $logo['url'];?>);">
										<?php else:?>
											<div class="client clientblock" title="<?= $name;?>" style="background-image:url(<?= $logo['url'];?>);">
										<?php endif;?>
										<span class="screen-reader-text"><?= $name;?></span>
										<?php if( !empty($url) ):?>
											</a>
										<?php else:?>
											</div>
										<?php endif;?>
								<?php endforeach; ?>
							</div>
							<?php endif; ?>
						<?php 
							wp_reset_postdata(); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				
				
				<?php if( !empty( $fields['cta_icon_html-4'] ) || !empty( $fields['cta_link-4'] ) ):?>
				<ul class="cta w12-12">
					<li>
						<?php 
						$link = $fields['cta_link-4'];
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="link3" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<?php echo $fields['cta_icon_html-4'];?>
								<?php echo esc_html( $link_title ); ?>
							</a>
						<?php endif; ?>								
					</li>
				</ul>
				<?php endif;?>
			</div>
			<?php endif;?>
			
		</div><!-- .entries -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
