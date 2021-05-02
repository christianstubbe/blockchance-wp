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

<?php if ( have_posts() ) : ?>

<!--- #site-main ------------------>
<main class="grid-wrapper" id="category-main">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12">
                <h1 class="black">
                    <?php echo(single_cat_title());?>
                </h1>
            </div>
        </div>
        <div class="grid-x grid-margin-x align-top">

            <!--- enter post loop ------------------>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="cell small-12 medium-4 card" id="post-<?php the_ID(); ?>">
                <?php blockchance_academy_post_thumbnail(); ?>
                <div class="card-divider">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>
                <div class="card-section">
                    <?php the_excerpt(); ?>
                    <a class="button" href="<?php echo(get_permalink()); ?>">Read More</a>
                </div>
            </div>
            <?php endwhile; ?>
            <!--- exit post loop ------------------>

        </div>
    </div>
</main>

<?php endif; ?>
<?php get_footer(); ?>