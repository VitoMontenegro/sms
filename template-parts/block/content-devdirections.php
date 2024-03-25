<?php
$data = get_fields();
$count = 0;
$args = array(
    'post_type' => 'dev_directions',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
?>
<!-- ======= Dev directions Section ======= -->
<section class="directions">
    <div class="container">
        <h2><?php echo $data['title']; ?></h2>

        <div class="content">
            <?php foreach ($query->posts as $post) : setup_postdata( $post ); ?>
                <?php $post_data = get_fields($post); ?>
                <?php if( ++$count % 2 === 0) : ?>
                    <div class="item is_right">
                        <div class="count"><?php echo $count; ?>.</div>
                        <div class="content">
                            <div class="title">
                                <?php echo get_the_title($post->ID); ?>
                            </div>
                            <div class="desc">
                                <?php echo $post_data['desc']; ?>
                            </div>
                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="link">
                                <span>Перейти</span>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="39" stroke="url(#paint0_linear_51_765)"/>
                                    <path d="M10.104 19.2929C9.71344 19.6834 9.71344 20.3166 10.104 20.7071L16.4679 27.0711C16.8585 27.4616 17.4916 27.4616 17.8821 27.0711C18.2727 26.6805 18.2727 26.0474 17.8821 25.6569L12.2253 20L17.8821 14.3431C18.2727 13.9526 18.2727 13.3195 17.8821 12.9289C17.4916 12.5384 16.8585 12.5384 16.4679 12.9289L10.104 19.2929ZM29.1895 19L10.8111 19V21L29.1895 21V19Z" fill="white"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_51_765" x1="0" y1="20" x2="40" y2="20" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#5066C7"/>
                                            <stop offset="1" stop-color="#2FC7FE"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="item is_left">
                        <div class="content">
                            <div class="title">
                                <?php echo get_the_title($post->ID); ?>
                            </div>
                            <div class="desc">
                                <?php echo $post_data['desc']; ?>
                            </div>
                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="link">
                                <span>Перейти</span>
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="39.5" y="39.5" width="39" height="39" transform="rotate(-180 39.5 39.5)" stroke="url(#paint0_linear_51_752)"/>
                                    <path d="M29.896 20.7071C30.2866 20.3166 30.2866 19.6834 29.896 19.2929L23.5321 12.9289C23.1415 12.5384 22.5084 12.5384 22.1179 12.9289C21.7273 13.3195 21.7273 13.9526 22.1179 14.3431L27.7747 20L22.1179 25.6569C21.7273 26.0474 21.7273 26.6805 22.1179 27.0711C22.5084 27.4616 23.1415 27.4616 23.5321 27.0711L29.896 20.7071ZM10.8105 21H29.1889V19H10.8105V21Z" fill="white"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_51_752" x1="40" y1="60" x2="80" y2="60" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#5066C7"/>
                                            <stop offset="1" stop-color="#2FC7FE"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="count"><?php echo $count; ?>.</div>
                    </div>
                <?php endif; ?>
            <?php endforeach;; wp_reset_postdata(); ?>
        </div>
    </div>
</section><!-- End Advantages Section -->