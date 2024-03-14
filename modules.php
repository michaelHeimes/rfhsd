<?php
if( have_rows('content_modules') ):

	while ( have_rows('content_modules') ) : the_row();

		if( get_row_layout() == 'module_wysiwyg' ):
			get_template_part('template-parts/modules/module', 'wysiwyg');
		elseif( get_row_layout() == 'module_mosaic_gallery' ): 
			get_template_part('template-parts/modules/module', 'mosaic-gallery');
		endif;

	// End loop.
	endwhile;

endif;
?>