<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>
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

<?php
get_footer();
