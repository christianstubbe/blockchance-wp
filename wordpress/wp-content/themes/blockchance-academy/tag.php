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

	<main id="primary" class="tag">

		<?php if ( have_posts() ) : ?>
            
            <div class="grid-container">
                <div class="grid-y" >
                    <div class="cell" id="tag-summary">
                        <h1><?php single_tag_title(); ?></h1>
                        <div class="tag-description">
                            <?php echo tag_description(get_queried_object()->term_id);?>
                        </div>
                        <div class="grid-container">
                            <div class="grid-x tag-checkout">
                                <div class="cell small-8"><h4>You might want to check out:<h4></div>
                                <div class="cell small-4"><a href="#" class="button" target="_self">Cryptocurrency!</a><a href="#" class="button" target="_self">Bitcoin</a></div>
                            </div>
                        </div>
                         
                    </div>

                    <div class="cell"
                        <?php
                        
                            $tag = single_tag_title();
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Webinar',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;
                            ?> 
                            
 
                    >
                        <h3 class="section-title">Watch our webinars</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                                <?php 
                                    //Start the Loop
                                     while ($query->have_posts()) : $query->the_post();
                                ?>
                                <div class="cell small-4">
                                    <article class="uneven" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <div class="uneven-img-container">
                                                <?php blockchance_academy_post_thumbnail(); ?>
                                            </div>
                                            <?php
                                                if ( is_singular() ) :
                                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                                else :
                                                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                                endif;

                                                if ( 'post' === get_post_type() ) :
                                            ?>
                                            <?php endif; ?>
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                <?php
                                    // end loop, reset query
                                    endwhile;
                                    wp_reset_query();
                                    the_posts_navigation();
                                    else :
                                        get_template_part( 'template-parts/content', 'none' );
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="cell"
                        <?php                                        
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Interview',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;
                        ?>  
                    >
                        <h3 class="section-title">Read our Interviews</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                            <?php 
                                //Start the Loop
                                    while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="cell small-4">
                                <article class="even" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="even-img-container">
                                        <?php blockchance_academy_post_thumbnail(); ?>
                                    </div>
                                    <?php
                                        if ( is_singular() ) :
                                            the_title( '<h1 class="entry-title">', '</h1>' );
                                        else :
                                            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                        endif;

                                        if ( 'post' === get_post_type() ) :
                                    ?>
                                    <?php endif; ?>
                                </article><!-- #post-<?php the_ID(); ?> -->
                            </div>
                                    
                            <?php
                                // end loop, reset query
                                endwhile;
                                wp_reset_query();
                            ?>
                            </div>
                        </div>
                    </div>
  

                    <div class="cell"
                        <?php                                        
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Definition',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;
                        ?>  
                    >
                        <h3 class="section-title">Get to know something new with these definitions</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                            <?php 
                                //Start the Loop
                                    while ($query->have_posts()) : $query->the_post();
                            ?>
                                <div class="cell small-4">
                                    <article class="uneven" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <div class="uneven-img-container">
                                                <?php blockchance_academy_post_thumbnail(); ?>
                                            </div>
                                            <?php
                                                if ( is_singular() ) :
                                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                                else :
                                                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                                endif;

                                                if ( 'post' === get_post_type() ) :
                                            ?>
                                            <?php endif; ?>
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                <?php
                                    // end loop, reset query
                                    endwhile;
                                    wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="cell"
                        <?php                                        
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Bericht',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;
                        ?>            
                    >
                        <h3 class="section-title">You need a deep dive? Read these reports!</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                            <?php 
                                //Start the Loop
                                    while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="cell small-4">
                                <article class="even" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="even-img-container">
                                        <?php blockchance_academy_post_thumbnail(); ?>
                                    </div>
                                    <?php
                                        if ( is_singular() ) :
                                            the_title( '<h1 class="entry-title">', '</h1>' );
                                        else :
                                            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                        endif;

                                        if ( 'post' === get_post_type() ) :
                                    ?>
                                    <?php endif; ?>
                                </article><!-- #post-<?php the_ID(); ?> -->
                            </div>
                                    
                            <?php
                                // end loop, reset query
                                endwhile;
                                wp_reset_query();
                            ?>
                            </div>
                        </div>
                    </div>
                    

                    <div class="cell"
                        <?php                                        
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Pressebericht',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;
                        ?>   
                    >
                        <h3 class="section-title">What do others have to say on this topic? Find out in these press reports</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                            <?php 
                                //Start the Loop
                                    while ($query->have_posts()) : $query->the_post();
                            ?>
                                <div class="cell small-4">
                                    <article class="uneven" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <div class="uneven-img-container">
                                                <?php blockchance_academy_post_thumbnail(); ?>
                                            </div>
                                            <?php
                                                if ( is_singular() ) :
                                                    the_title( '<h1 class="entry-title">', '</h1>' );
                                                else :
                                                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                                endif;

                                                if ( 'post' === get_post_type() ) :
                                            ?>
                                            <?php endif; ?>
                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                <?php
                                    // end loop, reset query
                                    endwhile;
                                    wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="cell"
                        <?php                                        
                            //Set Query args
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'Kommentar',
                                'post_per_page' => 3,
                                'tag' => $tag
                            );
                            $query = new WP_Query($args);
                            
                            if ( $query->have_posts() == False) :
                                echo( 'style="display: none"' );
                            else :
                                
                            endif;

                            //Start the Loop
                            while ($query->have_posts()) : $query->the_post();
                        ?>                    
                    >
                        <h3 class="section-title">You can check out the opinion of our authors in these comments</h3>
                        <div class="grid-container section">
                            <div class="grid-x grid-margin-x align-center">
                            
                            <div class="cell small-4">
                                <article class="even" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="even-img-container">
                                        <?php blockchance_academy_post_thumbnail(); ?>
                                    </div>
                                    <?php
                                        if ( is_singular() ) :
                                            the_title( '<h1 class="entry-title">', '</h1>' );
                                        else :
                                            the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                        endif;

                                        if ( 'post' === get_post_type() ) :
                                    ?>
                                    <?php endif; ?>
                                </article><!-- #post-<?php the_ID(); ?> -->
                            </div>
                                    
                            <?php
                                // end loop, reset query
                                endwhile;
                                wp_reset_query();
                            ?>
                            </div>
                        </div>
                    </div>
                       
    
                </div>
            </div>
	</main><!-- #main -->

<?php get_footer(); ?>
