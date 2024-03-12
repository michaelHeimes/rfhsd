<?php
	$tax = $args['tax']; 
	$post_thumbnail_url = get_the_post_thumbnail_url();
?>
<div id="introgridbox" class="w12-2">
	<div class="inner">
		<a href="<?php the_permalink();?>" class="w12-12 sqbgimg cover" style="background-image:url(<?= esc_html( $post_thumbnail_url );?>);" title=""></a>
		<div class="w12-12 center" onclick="document.location='<?php the_permalink();?>'">
			<div class="w12-12 center">
				<h5 class="thedate">
				<?= get_the_date('m/d/y');?>
				<?php
				$post_id = get_the_ID();  // Assuming you're inside the loop
				
				// Get all taxonomy terms for 'insight-type' associated with the post
				$terms = get_the_terms($post_id, $tax);
				
				if ($terms && !is_wp_error($terms)) {
					echo '| ';
					$term_names = array();
				
					// Loop through each term and add its name (lowercased) to the array
					foreach ($terms as $term) {
						$term_names[] = strtolower($term->name);
					}
				
					// Output the term names separated by commas
					echo implode(', ', $term_names);
				}
				?>
				</h5>
				<h5 class="title">
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</h5>
			</div>
			<div class="clr"></div>
		</div>
	</div>
</div>