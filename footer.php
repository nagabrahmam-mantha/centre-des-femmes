<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'business_theme' ); ?>">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'link_before'    => '',
					'link_after'     => '',
					'depth'          => 1,
				) ); ?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php dynamic_sidebar( 'footer-social' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
