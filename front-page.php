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

$query_data = get_fields();
add_filter('body_class', function( $classes ){
    $classes[] = ' dark';
    return $classes;
} );

get_header();
?>
    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>
        <div class="entry-content">
            <!-- Content -->
            <!-- ======= Featured Services Section ======= -->
            <section class="hero">
                <div class="hero__head">
                    <div class="hero__text">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <div class="hero_content">
                                        <h1><?php the_title(); ?></h1>
                                        <?php if (isset($query_data['subtitle']) && !empty($query_data['subtitle'])): ?>
                                            <div class="hero_quote"><?php echo $query_data['subtitle']; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($query_data['image']) || !empty($query_data['video_mp']) || !empty($query_data['video_wm'])): ?>
                        <video class="v_terra" loop="" muted="" autoplay="" playsinline="" poster="<?php echo $query_data['image']; ?>">
                            <?php if ($query_data['video_mp']): ?>
                                <source id="vmpf" src="<?php echo $query_data['video_mp']; ?>" type="video/mp4">
                            <?php endif ?>
                            <?php if ($query_data['video_wm']): ?>
                                <source id="vwebm" src="<?php echo $query_data['video_wm']; ?>" type="video/webm">
                            <?php endif ?>
                        </video>
                    <?php endif ?>
                </div>
            </section><!-- Featured Services Section -->

            <?php the_content(); ?>
            <!-- .entry-content -->
            <?php wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
            'after'  => '</div>',
            ));
            ?>
        </div>
<?php
get_footer('home');
