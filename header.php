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
	<!-- <script src="https://kit.fontawesome.com/0a2b3e6f0d.js" crossorigin="anonymous"></script> -->

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
				<div class="col-lg-10 d-flex">
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
		<div class="navbar">
					<div class="mobile-menu-button"><i class="fas fa-bars"></i><i class="fas fa-times"></i></div>
				</div>
			</div> <!--sm-md-10-->
			<div class="col-lg-2">
				<div class="d-none d-lg-block">
				<ul class="secondary-nav">
					<li data-toggle="modal" data-target="#SubscribeForm">Subscribe</li>
					<li><a href="">All Sites</a></li>
					<li data-toggle="modal" data-target="#SearchForm">Search<i class="fas fa-search"></i></li>
					<!-- <i class="fas fa-lg fa-times"></i> -->
				</ul>
				</div>
				

			</div>
			</div>
			<!-- </div> -->
		</div><!--container-fluid -->
		<div id="mobileNav"> <!--collapse navbar-collapse--->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
		<?php wp_nav_menu([
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu',
    ]); ?>
			<hr>
			<ul class="secondary-nav-mobile">
				<li  data-toggle="modal" data-target="#SubscribeForm" >Subscribe</li>
				<li>All Sites</li>
			</ul>
			<hr>
			<?php get_search_form( ); ?>
			</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
