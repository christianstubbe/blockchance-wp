<?php
/**
 * The home template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockchance_Academy
 */

get_header();
?>

<!--- #hero ------------------>
<div class="grid-wrapper" id="hero">
	<div class="grid-x align-center">
		<div class="cell">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
			<?php blockchance_academy_post_thumbnail(); ?>
		</div>
	</div>
</div>

<!--- #site-main ------------------>
<main class="grid-wrapper" id="site-main">
	<div class="grid-container">
		<div class="grid-x">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</main>

<?php
get_footer();
