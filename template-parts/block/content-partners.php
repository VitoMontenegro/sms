<?php
$args = array(
    'post_type' => 'partners',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
?>
<!-- ======= Partners Section ======= -->
<section class="partners">
    <div class="h2">
        <div class="container">
            <div class="first_title">Наши</div>
            <div class="second_title">Партнеры</div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-around align-items-center">
            <?php foreach ($query->posts as $post) : setup_postdata( $post ); ?>
                <?php $post_data = get_fields($post); ?>
                    <?php echo $post_data['image_svg'] ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section><!-- End Partners Section -->