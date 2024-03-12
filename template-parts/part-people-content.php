<?php
	$fields = $args['fields'];
?>
<div id="entry2" class="story story1" itemscope="" itemtype="http://schema.org/about">
	<div itemscope="" itemtype="http://schema.org/ImageObject" itemprop="image" class="imageblockcenter mainimg">
		<?php if ( has_post_thumbnail() ):?>
		<meta itemprop="url" content="<?php the_permalink();?>">
		<?php the_post_thumbnail('full', array('class' => 'onload-fadein')); ?>
		<?php endif;?>
		<?php if( $fields['quote'] ):?>
		<p class="caption" itemprop="description"><?= $fields['quote'];?></p>
		<?php endif;?>
	</div>
	<h1 id="title2" class="title" itemprop="headline"><?php the_title();?></h1>
	<?php if( $fields['title'] ):?>
	<h2 id="subtitle2" class="subtitle" itemprop="alternativeHeadline"><?= $fields['title'];?></h2>
	<?php endif;?>
	<div id="body2" class="aboutbody storyp body">
		<?php the_content();?>
	</div>
	<div class="resources attachments w12-12" data-id="2"></div>
	<div class="clr"></div>
</div>
<?php if( is_page_template('page-templates/page-template-about.php') ):?>
	<div class="w12-12"><a class="specialbutton">Contact Our people are our magic</a></div>
<?php endif;?>
<?php if( is_singular( 'people' ) ):?>
<div class="w12-12"><a class="specialbutton">Contact Ed Doyle</a></div>
<?php endif;?>
<div class="clr mainbox_bottom"></div>