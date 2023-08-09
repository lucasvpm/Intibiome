<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer id="main-footer">
<div class="container">
	<div class="row">
		<div class="col col-sm-12">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-2',
					'container_id'      => 'menu-footer',
					'container_class'   => 'menu-footer',
					'menu_class'        => 'menu-footer-nav',
				)); 
			?>
		</div>
	</div>
	<div class="row social-medias">
		<div class="col-sm-12 col-md-6">
			<a class="clicable-img ulabs" href="<?php the_field('link_ulabs','options'); ?>">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/logo-ulabs.png" alt="Ulabs Logo">
			</a>
		</div>
		<div class="col-sm-12 col-md-6">
			<a class="clicable-img instagram" href="<?php the_field('link_instagram','options'); ?>">
				<img src="<?= get_template_directory_uri(); ?>/assets/img/icon-instagram.svg" alt="Instagram Logo">
			</a>
		</div>	
	</div>
</div>
<?php wp_footer(); ?>
</footer>
</body>
</html>