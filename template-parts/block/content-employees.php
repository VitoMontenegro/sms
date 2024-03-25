<?php
$data = get_fields();
$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
?>
<!-- ======= Employees Section ======= -->
<section class="team">
    <div class="section_header">
        <div class="container">
            <h3><?php echo $data['title'] ?></h3>
        </div>
    </div>
    <div class="container">
        <div class="wrap">
            <?php foreach ($query->posts as $post) : setup_postdata( $post ); ?>
                <?php $post_data = get_fields($post); ?>
                    <div class="item">
                        <div class="photo">
                            <img src="<?php echo $post_data['foto'] ?>" alt="<?php echo get_the_title($post->ID); ?>">
                        </div>
                        <div class="content">
                            <div class="name"><?php echo get_the_title($post->ID); ?></div>
                            <div class="position"><?php echo $post_data['position'] ?></div>
                        </div>
                        <div class="wrap"><?php echo $post_data['desc'] ?></div>
                    </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
    </div>
</section><!-- End Employees Section -->