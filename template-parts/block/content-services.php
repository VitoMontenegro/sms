<?php
$data = get_fields();
$args = array(
    'post_type' => 'services',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
?>
<!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">
            <h2><?php echo $data['title']; ?></h2>
            <div class=" carousel-3D-swiper-section">
                <!-- Slider main container -->
                <div class="carousel-3D-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" style="max-width: 1200px;">
                        <!-- Slides -->
                        <?php foreach ($query->posts as $post): ?>
                        <?php $post_data = get_fields($post); ?>
                        <div class="swiper-slide">
                            <div class="title">
                                <?php echo esc_html( $post->post_title ); ?>
                            </div>
                            <div class="details">
                                <div class="description"><?php echo $post_data['description']; ?></div>
                                <div class="link">
                                    <a  href="<?php echo get_the_permalink($post->ID); ?>" class="more">Подробнее</a>
                                </div>
                                <button>ЗАКАЗАТЬ</button>
                            </div>
                        </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect x="0.5" y="0.5" width="73" height="73" fill="#191919" stroke="url(#paint0_linear_44_49)"/>
                            <path d="M19.2929 36.2929C18.9024 36.6834 18.9024 37.3166 19.2929 37.7071L25.6569 44.0711C26.0474 44.4616 26.6805 44.4616 27.0711 44.0711C27.4616 43.6805 27.4616 43.0474 27.0711 42.6569L21.4142 37L27.0711 31.3431C27.4616 30.9526 27.4616 30.3195 27.0711 29.9289C26.6805 29.5384 26.0474 29.5384 25.6569 29.9289L19.2929 36.2929ZM54 36L20 36V38L54 38V36Z" fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear_44_49" x1="0" y1="37" x2="74" y2="37" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5066C7"/>
                                    <stop offset="1" stop-color="#2FC7FE"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect x="0.5" y="0.5" width="73" height="73" fill="#191919" stroke="url(#paint0_linear_44_48)"/>
                            <path d="M54.7071 37.7071C55.0976 37.3166 55.0976 36.6834 54.7071 36.2929L48.3431 29.9289C47.9526 29.5384 47.3195 29.5384 46.9289 29.9289C46.5384 30.3195 46.5384 30.9526 46.9289 31.3431L52.5858 37L46.9289 42.6569C46.5384 43.0474 46.5384 43.6805 46.9289 44.0711C47.3195 44.4616 47.9526 44.4616 48.3431 44.0711L54.7071 37.7071ZM20 38L54 38V36L20 36V38Z" fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear_44_48" x1="0" y1="37" x2="74" y2="37" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5066C7"/>
                                    <stop offset="1" stop-color="#2FC7FE"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="swiper-pagination" style="bottom: -50px;"></div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->