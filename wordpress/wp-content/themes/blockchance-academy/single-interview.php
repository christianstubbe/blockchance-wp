<?php
/**
 * The template for displaying definition posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blockchance_Academy
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
        <!---------    START EDITING HERE    ---------> 

            <h1>TEMPLATE INTERVIEW</h1>

        <!---------    STOP EDITING HERE    ---------> 
		<?php endwhile; ?>
	</main>
<?php
get_sidebar();
get_footer();
