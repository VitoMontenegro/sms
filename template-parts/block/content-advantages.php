<?php
$data = get_fields();
$args = array(
    'post_type' => 'advantages',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
?>
<!-- ======= Advantages Section ======= -->
<section class="advantages">
    <div class="container">
        <h2><?php echo $data['title']; ?></h2>

        <div class="content">
            <?php foreach ($query->posts as $post) : setup_postdata( $post ); ?>
                <?php $post_data = get_fields($post); ?>
            <div class="item">
                <a href="<?php echo get_the_permalink($post->ID); ?>">
                    <div class="image mb-3">
                        <img src="<?php echo $post_data['image'] ?>" alt="<?php echo get_the_title($post->ID); ?>">

                    </div>
                    <div class="info">
                        <?php echo get_the_title($post->ID); ?>
                    </div>
                </a>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section><!-- End Advantages Section -->