<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jardinactivo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-primary" id="main-menu">
				<?php
		            wp_nav_menu(array(
        		        'theme_location' => 'main-menu',
                		'container' => false,
                		'menu_class' => 'ja-menu',
                		'fallback_cb' => '__return_false',
                		'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                		'depth' => 2,
                		'walker' => new bootstrap_5_wp_nav_menu_walker()
            		));
            	?>
				</div>
		</div>
		</nav>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$jardinactivo_description = get_bloginfo( 'description', 'display' );
			if ( $jardinactivo_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $jardinactivo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jardinactivo' ); ?></button>
		</nav><!-- #site-navigation -->
		<div class="text-primary">color primario</div>
	</header><!-- #masthead -->
