<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Wordpress_Blueprint
 * @since Wordpress Blueprint
 */
?>

	<div class="span-24 last" id="footer" role="contentinfo">
    <div id="site-info">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </div><!-- #site-info -->

    <div id="site-generator">
        <?php do_action( 'wpbp_credits' ); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpbp' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'wpbp' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'wpbp' ), 'WordPress' ); ?></a>
    </div><!-- #site-generator -->
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
