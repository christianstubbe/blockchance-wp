<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Blockchance_Academy
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="bx-sidebar">
			<strong>
				Topic
			</strong>
			<div class="bx-filter-container"></div>
			
			<strong>
				Category
			</strong>
			<div class="bx-filter-container"></div>
			
			<strong>
				Level
			</strong>
			<div class="bx-filter-container"></div>

			<strong>
				Length
			</strong>
			<div class="bx-filter-container"></div>
		</div>

		<div class="bx-main-container">
			<div class="bx-search-banner">
				<h2>Bitcoin</h2>
				<div class="bx-description">
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
					</p>
				</div>
				<div class="bx-more-container">
					<a href="/">More Info</a>
				</div>
			</div>


			<div class="bx-items-row-container">
				<div class="bx-row-title">Search Result</div>
				<div class="bx-items-container">
					<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'search' );
					endwhile;

					// the_posts_navigation();
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</div>


			<div class="bx-items-row-container">
				<div class="bx-row-title">This might be interesting for you</div>
				<div class="bx-items-container">
					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>
				</div>
			</div>

			<div class="bx-items-row-container">
				<div class="bx-row-title">Top 10 Courses</div>
				<div class="bx-items-container">
					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>
				</div>
			</div>

			<div class="bx-items-row-container">
				<div class="bx-row-title">Intermediate</div>
				<div class="bx-items-container">
					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>
				</div>
			</div>

			<div class="bx-items-row-container">
				<div class="bx-row-title">Blockchain</div>
				<div class="bx-items-container">
					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>

					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>


					<div class="bx-item">
						<div class="bx-image"></div>
						<div class="bx-title">Security in Blockchain</div>
					</div>
				</div>
			</div>

		</div>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
