<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockchance_Academy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!--- #title ------------------>
	<div class="grid-wrapper" id="page-title">
		<div class="grid-container">
			<div class="grid-x">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>

	<!--- #site-main ------------------>
	<div class="grid-wrapper" id="page-main">
		<div class="grid-container">
			<div class="grid-x">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'blockchance-academy' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
