<?php

/**
Template Name: О нас
Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */


$query_data = get_fields();
add_filter('body_class', function( $classes ){
    $classes[] = ' dark';
    return $classes;
} );

get_header();
?>
    <div id="content" class="site-content ">
        <div id="primary" class="content-area">

            <!-- Hook to add something nice -->
            <?php bs_after_primary(); ?>
                    <main id="main" class="site-main">

                        <header class="entry-header container">
                           <h1>SOCIAL MEDIA SYSTEMS</h1>
                            <div class="hero_quote">-с нами в будущее!</div>
                        </header>

                        <div class="entry-content">
                            <!-- Content -->
                            <?php the_content(); ?>
                            <!-- .entry-content -->
                            <?php wp_link_pages(array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>

                        <footer class="entry-footer">

                        </footer>
                        <!-- Comments -->
                        <?php comments_template(); ?>

                    </main><!-- #main -->

        </div><!-- #primary -->
    </div><!-- #content -->
<?php
get_footer();