<?php
$data = get_fields();
$images = $data['images'];
?>
<!-- ======= Services Section ======= -->
    <section class="slider">
        <h2><?php echo $data['title']; ?></h2>
        <!-- Additional required wrapper -->
         <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($images as $item): ?>
                    <div class="swiper-slide">
                        <img src=" <?php echo $item; ?>" alt="item">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section><!-- End Services Section -->