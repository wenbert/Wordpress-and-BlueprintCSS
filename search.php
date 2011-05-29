<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Wordpress_Blueprint
 */

get_header(); ?>
		<div class="container ">
        <div class="span-17 colborder " id="content">  
            <?php if ( have_posts() ) : ?>
        				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wpbp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        				<?php
        				/* Run the loop for the search to output the results.
        				 * If you want to overload this in a child theme then include a file
        				 * called loop-search.php and that will be used instead.
        				 */
        				 get_template_part( 'loop', 'search' );
        				?>
            <?php else : ?>
        				<div id="post-0" class="post no-results not-found">
        					<h2 class="entry-title"><?php _e( 'Nothing Found', 'wpbp' ); ?></h2>
        					<div class="entry-content">
        						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'wpbp' ); ?></p>
        						<?php get_search_form(); ?>
        					</div><!-- .entry-content -->
        				</div><!-- #post-0 -->
            <?php endif; ?>
        </div><!-- #content -->

        <div class="span-7 last">
        <?php get_sidebar(); ?>
    </div>
    </div><!-- #container -->
<div class="container">
    <?php get_footer(); ?>
</div>
