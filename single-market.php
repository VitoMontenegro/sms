<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>


    <!-- Hook to add something nice -->
<?php bs_after_primary(); ?>

    <div id="main" class="site-main container">

        <section class="blog-page">
            <!-- Grid Layout -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post-container">
                        <div class="post-container__wrap">
                            <div class="breadcrumb-custom">
                                <div class="breadcrumbs">
                                    <span>
                                        <a href="<?php echo get_page_link( 168 );?>">Рынок IT</a>
                                    </span>
                                    <svg width="38" height="1" viewBox="0 0 38 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line y1="0.5" x2="38" y2="0.5" stroke="black"/>
                                    </svg>
                                    <span class="current"><?php the_title(); ?></span>
                                </div>
                            </div>

                            <a  href="<?php echo get_page_link( 168 );?>" class="back_link">
                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="45" height="45" stroke="#191919"/>
                                    <path d="M11.7251 22.2929C11.3346 22.6834 11.3346 23.3166 11.7251 23.7071L18.0891 30.0711C18.4796 30.4616 19.1128 30.4616 19.5033 30.0711C19.8938 29.6805 19.8938 29.0474 19.5033 28.6569L13.8465 23L19.5033 17.3431C19.8938 16.9526 19.8938 16.3195 19.5033 15.9289C19.1128 15.5384 18.4796 15.5384 18.0891 15.9289L11.7251 22.2929ZM33.5674 22L12.4322 22V24L33.5674 24V22Z" fill="#191919"/>
                                </svg>
                                <span>Рынок IT</span>
                            </a>

                            <?php echo get_the_post_thumbnail(null, 'full') ?>
                            <div class="title_single">
                                <h1 class="post-container__title" style="max-width: 90rem;"><?php the_title(); ?></h1>
                            </div>
                            <div class="post-container__content">
                                <div class="post-container__full"><?php the_content(); ?></div>
                            </div>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <!-- Pagination -->
            <div>
                <?php bootscore_pagination(); ?>
            </div>
        </section>

    </div><!-- #main -->

<?php
get_footer();
