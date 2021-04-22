<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blockchance_Academy
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>--><!-- .page-header -->
            
            <div class="grid-container">
                <div class="grid-y" >
                    <div class="cell" style="background-color:blue">
                        <h2>Current Tag: <?php single_tag_title(); ?></h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<p>
                        
                        You might want to check out: <a href="#" class="button" target="_self">Cryptocurrency!</a><a href="#" class="button" target="_self">Bitcoin</a> 
                    </div>
                    <div class="cell" style="background-color:darkblue">
                        <h3>Get in-depth knowledge on <?php single_tag_title();?></h3>
                        <p>Yada Yada ... Lorem all the time</p>
                    </div>
                    <div class="cell" style="background-color:darkgreen">
                        <h3>Watch our webinars</h3>
                        <div class="grid-container">
                            <div class="grid-x grid-margin-x">
                                <?php
			                        /* Start the Loop */
			                        while ( have_posts() ) :
				                        the_post();
	                        			get_template_part( 'template-parts/content-tag', get_post_type() );
			                        endwhile;
			                        the_posts_navigation();
		                            else :
			                            get_template_part( 'template-parts/content-tag', 'none' );
		                            endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="cell" style="background-color:darkred">
                        Speaker
                    </div>
                    <div class="cell" style="background-color:red">
                        Read our articles - not needed ??
                    </div>
                    <div class="cell" style="background-color:pink">
                        Over 70 courses
                    </div>
                </div>
            </div>



	</main><!-- #main -->

<?php
//get_sidebar(); might need later
get_footer();
