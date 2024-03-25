<?php

/**
Template Name: Блог
Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

add_filter('body_class', function( $classes ){
    $classes[] = ' dark';
    return $classes;
} );
$query_data = get_fields();
$poster = $query_data['image'] ?? '1234';
get_header();
$args = array(
    'show_option_all'    => '',
    'show_option_none'   => __('No categories'),
    'orderby'            => 'name',
    'order'              => 'ASC',
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 1,
    'use_desc_for_title' => 0,
    'child_of'           => 0,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => true,
    'title_li'           => false,
    'number'             => NULL,
    'echo'               => 1,
    'depth'              => 0,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'category',
    'walker'             => 'Walker_Category',
    'hide_title_if_empty' => false,
    'separator'          => '<br />',
);

?>

    <!-- Hook to add something nice -->
<?php bs_after_primary(); ?>
    <div class="entry-content">
        <!-- Content -->

        <section class="hero">
            <div class="hero__head">
                <div class="hero__text">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-8 colors--white">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="blog-page__container">
                            <div class="blog-page__categories text-center">
                                <h3 class="blog-page__subtitle colors--white">Рубрики</h3>
                                <ul class="cat-items colors--white">
                                    <?php wp_list_categories( $args ); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <video class="v_terra" loop="" muted="" autoplay="" playsinline="" poster="<?php echo $poster; ?>">
                    <?php if (isset($query_data['video'])) : ?>
                    <source id="vmpf" src="<?php echo $query_data['video']; ?>">
                    <?php endif ?>
                </video>
            </div>
        </section><!-- End Cta Section -->

        <?php wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
            'after'  => '</div>',
        ));
        ?>
        <section class="blog-page">
            <div class="container">
                <?php
                $args=array(
                    'posts_per_page' => 5,
                    'taxonomy' => 'category'
                );
                $query = new WP_Query( $args );
                ?>
                <!-- Grid Layout -->
                <?php if (have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="post-container">
                            <div class="post-container__wrap">
                                <div class="post-container__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <!--<span class="post-container__label">ПОСТ МЕСЯЦА</span>-->
                                <div class="post-container__content">
                                    <div class="post-container__text"><?php the_excerpt(); ?></div>
                                    <div class="post-container__read">
                                        <a href="<?php the_permalink(); ?>" class="post-container__read-text"><?php _e('Read more »', 'bootscore'); ?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- Pagination -->
                <div>
                    <?php bootscore_pagination(); ?>
                </div>
            </div>
        </section>
    </div>
<?php
get_footer();
