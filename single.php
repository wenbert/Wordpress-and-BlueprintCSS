<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Wordpress_Blueprint
 */

get_header(); ?>

<div class="container showgrid">
    <div class="span-17 " id="content">  
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'single' );
			?>
    </div>

    <div class="span-7 last">
        <?php get_sidebar(); ?>
    </div>
</div><!-- #container -->
<div class="container">
    <?php get_footer(); ?>
</div>
