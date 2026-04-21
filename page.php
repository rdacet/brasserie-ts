<?php
/**
 * Template pour les pages statiques classiques.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header(); ?>

<section>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="section-title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
