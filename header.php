<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bahai
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="https://use.typekit.net/bob6elt.css"> -->
	<link rel="stylesheet" href="https://use.typekit.net/plw6zor.css">
	<script src="https://kit.fontawesome.com/0a2b3e6f0d.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
     'Skip to content',
     'bahai'
 ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10 d-flex">
					<!-- <div class="row "> -->
						<div class="site-branding">
							<a class="custom-logo-link" href="<?php echo esc_url(
           home_url('/')
       ); ?>"><span class="screen-reader-text">Link to Homepage</span></a>
							<?php // the_custom_logo();
       if (is_front_page() && is_home()): ?>
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(
           home_url('/')
       ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php else: ?>
								<p class="site-title screen-reader-text"><a href="<?php echo esc_url(
            home_url('/')
        ); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation d-none d-lg-block">

				<?php wp_nav_menu([
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu',
    ]); ?>
		</nav><!-- #site-navigation -->
			</div> <!--sm-md-10-->
			<div class="col-sm-2">
				<div class="d-none d-lg-block">
				<ul class="secondary-nav">
					<li data-toggle="modal" data-target="#SubscribeForm">Subscribe</li>
					<li><a href="">All Sites</a></li>
					<li ><a href="">Search<i class="fas fa-search"></i></a></li>
					<!-- <i class="fas fa-lg fa-times"></i> -->
				</ul>
				</div>
				<div class="navbar">
					<div class="mobile-menu-button"><i class="fas fa-bars"></i><i class="fas fa-times"></i></div>
<!-- <button class="navbar-toggler" type="button" data-togle="collapse" data-target="mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">menu button</button> -->
				</div>

			</div>
			</div>
			<!-- </div> -->
		</div><!--container-fluid -->
		<div id="mobileNav"> <!--collapse navbar-collapse--->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
			<!-- <ul>
				<li>Special Collections</li>
				<li>Library </li>
				<li>About</li>
			</ul> -->
		<?php wp_nav_menu([
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu',
    ]); ?>
			<hr>
			<ul class="secondary-nav-mobile">
				<li>Subscribe</li>
				<li>All Sites</li>
			</ul>
			<hr>
			<?php get_search_form( ); ?>
			</div>
				</div>
			</div>
		</div>
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

	</header><!-- #masthead -->
