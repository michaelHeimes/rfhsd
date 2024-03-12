<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */

?>
<div id="main" class="fullbox"	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div id="mainbox" class="mainbox w12-12">
			<div class="entries">
				<div class="story introduction story1" itemscope="" itemtype="http://schema.org/AboutPage">
					<header class="entry-header">
							<h1 class="title uppercase"><?php the_title();?></h1>
							<div class="clr"></div>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<div class="storyp">
							<?php if( has_post_thumbnail() ):?>
							<div class="imageblockcenter">
								<?php rfhsd_post_thumbnail(); ?>
							</div>
							<?php endif;?>
							<?php the_content();?>
						</div>
						<div class="clr"></div>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
	
		<footer class="entry-footer">
			<div id="menubox" class="w12-12">
				<div id="menuboxinner" class="inner">
					<div class="boxtop"></div>
					<div class="boxbody">
						<style type="text/css"><!-- .menubox ul,#menubox ul { display: none; } --></style>
						<div id="careers_subnav" class="subnav">
							<div id="category_0" class="category category0 catlit">
								<div class="clr"></div>
							</div>
							<div class="clr"></div>
						</div>
					</div> <!-- menuboxinner -->
					<div class="boxbottom"></div>
				</div> <!-- boxbody -->
				<div class="clr"></div>
			</div> <!--// menubox //-->
			<div class="clr"></div>
		</footer><!-- .entry-footer -->
	
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
