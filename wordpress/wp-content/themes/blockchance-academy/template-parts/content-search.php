<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockchance_Academy
 */

?>

<a href="<?php get_permalink(); ?>" id="post-<?php the_ID(); ?>" class="bx-item">
	<div class="bx-image"></div>
	<div class="bx-title">
		<?php the_title(); ?>
	</div>
</a>