<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package buildweb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); ?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-8">
			<?php the_custom_logo(); ?>
        </div>
        <div class="col-">
            <a href="#" class="icon-menu">
                <i class="fas fa-bars"></i>
            </a>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'main-menu',
				)
			);
			?>
            <!-- <ul class="main-menu">
                <li><a href="#" class="btn-close-menu"><i class="fas fa-times"></i></a></li>
                <li><a href="#">quem somos</a></li>
                <li><a href="#">o que fazemos</a></li>
                <li><a href="#">equipe</a></li>
                <li><a href="#">contato</a></li>
            </ul> -->
        </div>
    </div>
</nav>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'buildweb' ); ?></a>

	<header id="masthead" class="site-header">
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
			$buildweb_description = get_bloginfo( 'description', 'display' );
			if ( $buildweb_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $buildweb_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'buildweb' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
