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
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  			<div class="container">
    			<a class="navbar-brand" href="jardinactivo.com"><img  src="http://localhost/jardinactivo/wp-content/themes/jardinactivo/assets/img/logotipojardinactivo.png"></a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				        <li class="nav-item">
          					<a class="nav-link" aria-current="page" href="#">Home</a>
        				</li>
				        <li class="nav-item">
          					<a class="nav-link" href="#">Link</a>
        				</li>
        				<li class="nav-item dropdown">
          					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            					Dropdown
          					</a>
          					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            					<li><a class="dropdown-item" href="#">Action</a></li>
            					<li><a class="dropdown-item" href="#">Another action</a></li>
            					<li><hr class="dropdown-divider"></li>
            					<li><a class="dropdown-item" href="#">Something else here</a></li>
          					</ul>
        				</li>
        				<li class="nav-item dropdown">
          					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">login</a>
							<ul class="dropdown-menu m-0 p-2 bg-primary " aria-labelledby="navbarDropdown">
            						<li class="p-1"><input class="form-control me-2" type="search" placeholder="Usuario" aria-label="Search"></li>
            						<li class="p-1"><input class="form-control me-2" type="search" placeholder="Contraseña" aria-label="Search"></li>
            						<li class="d-flex justify-content-center p-1"><button class="btn btn-outline-success bg-light" type="submit">Acceder</button></li>
							</ul>
 		       			</li>
							<li class="nav-item dropdown">
          					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">login</a>
							<ul class="dropdown-menu m-0 p-2 bg-primary " aria-labelledby="navbarDropdown">
            						<li class="p-1"><input class="form-control me-2" type="search" placeholder="Usuario" aria-label="Search"></li>
            						<li class="p-1"><input class="form-control me-2" type="search" placeholder="Contraseña" aria-label="Search"></li>
            						<li class="d-flex justify-content-center p-1"><button class="btn btn-outline-success bg-light" type="submit">Acceder</button></li>
							</ul>
 		       			</li>

					</div>
  			</div>
		</nav>
	</header><!-- #masthead -->
