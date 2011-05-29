<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="container ">
    <div class="span-17  " id="content">  

				<h1 class="page-title">
				    <?php
                printf( __( 'Tag Archives: %s', 'wpbp' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				    ?>
        </h1>

        <?php
        /* Run the loop for the tag archive to output the posts
         * If you want to overload this in a child theme then include a file
         * called loop-tag.php and that will be used instead.
         */
         get_template_part( 'loop', 'tag' );
        ?>
			</div><!-- #content -->

    <div class="span-7 last">
        <?php get_sidebar(); ?>
    </div>
</div><!-- #container -->
<div class="container">
    <?php get_footer(); ?>
</div>
