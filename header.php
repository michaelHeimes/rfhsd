<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rfhsd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400&family=Lato:wght@400;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container"<?php if( is_page_template('page-templates/page-home.php') ){ echo ' class="shortpadd"';};?>>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rfhsd' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<div class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
			else :
				?>
				<p class="site-title hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$rfhsd_description = get_bloginfo( 'description', 'display' );
			if ( $rfhsd_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $rfhsd_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<!-- <a href="#" id="rfhsdburger" class=""><span class="htop"></span><span class="hmid"></span><span class="hbot"></span></a> -->

		<nav id="site-navigation" class="main-navigation">
			<button id="rfhsdburger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="htop"></span><span class="hmid"></span><span class="hbot"></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'menu_id'        => 'main-nav',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php if( is_page_template('page-templates/page-home.php') ):?>
		<div class="banner shorter" style="background-image: url(<?= esc_url( get_field('top_banner_background_image')['url'] );?>)">
			<div id="headertext">
			</div>
		</div>
		<script>
			brandIntro(0);
		</script>
		<?php endif;?>
	</header><!-- #masthead -->