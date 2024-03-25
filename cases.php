<?php

/**
Template Name: Кейсы
Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */


$query_data = get_fields();
add_filter('body_class', function( $classes ){
    $classes[] = ' cases dark';
    return $classes;
} );
$categories = get_terms( array( 'taxonomy' => 'casescat', 'include' => array( 4,5,6,7,8,9 ), 'orderby' => 'id' ) );
//print_r( $categories );
get_header();
?>
    <div id="content" class="site-content ">
        <div id="primary" class="content-area">

            <!-- Hook to add something nice -->
            <?php bs_after_primary(); ?>
                    <main id="main" class="site-main">

                        <header class="entry-header container">
                           <h1>Наши кейсы</h1>
                        </header>

                        <div class="entry-content">
                            <!-- Content -->
                            <div class="container">
                                <div class="content">
                                    <?php foreach($categories as $cat): ?>
                                        <div class="item">
                                            <div class="item_name">
                                                <?php echo $cat->name . ' ';?>
                                            </div>
                                            <ul>
                                                <?php
                                                $args = array( 'post_type'=> 'cases',  'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'casescat',
                                                        'field' => 'slug',
                                                        'terms' => array( $cat->slug )
                                                    )
                                                )
                                                );
                                                $sposts = get_posts($args);
                                                foreach($sposts as $post) :setup_postdata($post);
                                                    ?>
                                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
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