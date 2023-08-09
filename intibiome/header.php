<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package Intibiome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Programação: Lucas Vianna ">
    <link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="search-overlay">
    <div class="search-close">
        <?php echo file_get_contents(  get_template_directory_uri().'/assets/img/icon-close.svg' ); ?>
    </div>
    <form class="search-form" role="search" action="<?php bloginfo('url') ?>" method="get">
        <input placeholder="Search and press ENTER" class="search-field" type="search" name="s" title="Search" value="">
	</form>
</div>
<header id="main-header">
<div class="container-fluid top-header">
    <div class="row align-items-center">
        <div class="col col-sm-3">
            <a href="" class="menu-toggle d-sm-block d-xl-none">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/ic.menu.png" alt="menu">
            </a>
        </div>
        <div class="col col-sm-6">
            <a href="#" class="logo">
                <img src="<?= the_field('logo','options'); ?>" alt="logo">
            </a>
        </div>
        <div class="col col-sm-3">
            <a href="#" class="search-toggle">
                <?php echo file_get_contents(  get_template_directory_uri().'/assets/img/icon-search.svg' ); ?>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid main-menu-container d-none d-sm-none d-xl-block">
<div class="row">
		<div class="col col-sm-12">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-1',
					'container_id'      => 'main-menu',
					'container_class'   => 'main-menu',
					'menu_class'        => 'main-menu-nav',
				)); 
			?>
		</div>
	</div>
</div>
<div class="container-fluid main-menu-container mobile-version">
<div class="row">
		<div class="col col-sm-12">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-3',
					'container_id'      => 'main-menu',
					'container_class'   => 'main-menu',
					'menu_class'        => 'main-menu-nav',
				)); 
			?>
		</div>
	</div>
</div>
</header>