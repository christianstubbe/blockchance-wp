<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockchance_Academy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!--- #title ------------------>
	<div class="grid-wrapper" id="single-title">
		<div class="grid-container">
			<div class="grid-x">
			<?php 
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
			?>
			</div>
		</div>
	</div>

	<!--- #site-main ------------------>
	<div class="grid-wrapper" id="single-main">
		<div class="grid-container">
			<div class="grid-x">
			<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blockchance-academy' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blockchance-academy' ),
				'after'  => '</div>',
			)
		);
		?>
			</div>
		</div>
	</div>

	<!-- <?php blockchance_academy_post_thumbnail(); ?> -->

</article><!-- #post-<?php the_ID(); ?> -->
