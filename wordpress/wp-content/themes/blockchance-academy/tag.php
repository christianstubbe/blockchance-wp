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
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell small-8"><h3>You might want to check out:<h3></div>
                                <div class="cell small-4"><a href="#" class="button" target="_self">Cryptocurrency!</a><a href="#" class="button" target="_self">Bitcoin</a></div>
                            </div>
                        </div>
                         
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
                                    //Set Query args
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' => 'Webinar',
                                        'post_per_page' => 3
                                    );

                                    $query = new WP_Query($args);
			                        //Start the Loop
			                        while ($query->have_posts()) : $query->the_post();
                                ?>
                                <div class="cell small-4">
                                    <article style="background-color:green" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <header class="entry-header">
                                            <?php
                                                if ( is_singular() ) :
                                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                                else :
                                                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                                endif;

                                                if ( 'post' === get_post_type() ) :
                                            ?>
                                                <div class="entry-meta">
                                                    <?php blockchance_academy_posted_by();?>
                                                </div><!-- .entry-meta -->
                                            <?php endif; ?>
                                        </header><!-- .entry-header -->
                                        <?php blockchance_academy_post_thumbnail(); ?>
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                <?php
                                    // end loop, reset query
                                    endwhile;
                                    wp_reset_query();
                                    the_posts_navigation();
                                    else :
                                        get_template_part( 'template-parts/content-tag', 'none' );
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="cell" style="background-color:darkred">
                        <div class="grid-container">
                            <div class="grid-x grid-margin-x">
                                <div class="cell">
                                    <h3>Listen to our international speakers</h3>
                                </div>
                                <?php
                                    $authors = wp_list_authors(array(
                                        'show_fullname' => 1,
                                        'exclude_admin' => 0,
                                        'optioncount'   => 0,
                                        'echo'          => 0,
                                        'orderby'       => 'post_count',
                                        'order'         => 'DESC',
                                        'number'        => 3,
                                        'style'         => 0,
                                        'html'          => 0
                                    ));
                                    #dummy data
                                    $authors = array("Annemarie", "Hans", "Kim");

                                    foreach ($authors as $author) {
                                        echo "
                                            <div class=\"cell small-4\" style=\"background-color:red\">
                                               <img src=\"#\" alt=\"$author\">
                                               <p>Hi, I'm $author ... Author description</p>
                                            </div>
                                            ";
                                    }
                                ?>
                            </div>
                        </div>    
                    </div>
                    <div class="cell" style="background-color:green">
                        <p>Read our articles - not needed ?? Watch our Webinar listet alles zum Tag blockchain. Ich wollte keinen Slider einbauen.. </p>
                    </div>
                    <div class="cell" style="background-color:hotpink">                    
                        <div class="grid-container">
                            <div class="grid-x grid-margin-x">
                                <div class="cell small-8">
                                    <h3>Over 70 Online Courses</h3>
                                </div>
                                <div class="cell small-4">
                                    <a href="#" class="button" target="_self">Show Bestseller</a>
                                </div>
                                
                                <?php
                                    #ToDo: get all courses from somewhere
                                    #dummy data
                                    $courses = array("Era of Cooperation", "Data Security", "Network Society");

                                    foreach ($courses as $course) {
                                        echo "
                                            <div class=\"cell small-4\" style=\"background-color:pink\">
                                                <img src=\"#\" alt=\"$course\">
                                                <p>Course Description</p>
                                            </div>
                                            ";
                                    }
                                ?>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
	</main><!-- #main -->

<?php
//get_sidebar(); might need later
//get_footer(); might need later
