<?php 
$module_wysiwyg = get_sub_field('module_wysiwyg');
?>
<?php if( !empty($module_wysiwyg) ):?>
	<div class="storyp module wysiwyg-module">
		<?= $module_wysiwyg; ?>
	</div>
<?php endif;?>