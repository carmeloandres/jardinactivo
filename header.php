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
	<link rel="icon" href="<?php echo home_url('wp-content/themes/jardinactivo/assets/img/logo-32x32.png'); ?>" sizes="32x32" />
	<link rel="icon" href="<?php echo home_url('wp-content/themes/jardinactivo/assets/img/logo-192x192.png'); ?>" sizes="192x192" />
	<link rel="apple-touch-icon" href="<?php echo home_url('wp-content/themes/jardinactivo/assets/img/logo-180x180.png'); ?>" />
	<meta name="msapplication-TileImage" content="<?php echo home_url('wp-content/themes/jardinactivo/assets/img/logo-270x270.png'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  			<div class="container">
    			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img  src="<?php  echo home_url('wp-content/themes/jardinactivo/assets/img/logotipojardinactivo.png'); ?>"></a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<?php
						if (is_user_logged_in())
							require get_template_directory() . '/inc/menu-logged-in.php';
						else
							require get_template_directory() . '/inc/menu-not-logged-in.php';
					?>
					</ul>
				</div>
  			</div>
		</nav>
	</header><!-- #masthead -->
