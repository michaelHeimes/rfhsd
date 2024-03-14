<?php 
$gallery_images = get_sub_field('module_mosaic_gallery');
$size = 'full';
?>
<?php if( !empty($gallery_images) ):?>
	<div class="module mosaic-gallery-module">
		<?php
		if( $gallery_images ): ?>
			<ul>
				<?php foreach( $gallery_images as $image_id ): ?>
					<li>
						<a class="venobox-img" data-gall="gallery01" href="<?=$image_id['url'];?>">
							<?php echo wp_get_attachment_image( $image_id['ID'], $size ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
<?php endif;?>