<?php 
$query_data = get_fields();
$count = 0;
?>
<!-- ======= Projects Section ======= -->
<section class="our-projects" style="display: block">
    <div class="our-projects__wrapper container">
        <h3 class="title text-center"><?php echo $query_data['title']; ?></h3>
        <div class="our-projects__wrap">
            <?php foreach ($query_data['items'] as $value): ?>
                <?php if($count % 4 === 0 || $count % 4 === 3) : ?>
                    <a href="#" class="our-projects__block block-gr-rght" style="background-image: url(<?php echo $value['image']; ?>), url(<?php echo $value['bg']; ?>)">
                        <div class="our-projects__content">
                            <p class="our-projects__title"><?php echo $value['title']; ?></p>
                            <p class="our-projects__text"><?php echo $value['desc']; ?></p>
                        </div>
                    </a>
                <?php else: ?>
                    <a href="#" class="our-projects__block block-gr-left" style="background-image: url(<?php echo $value['image']; ?>), url(<?php echo $value['bg']; ?>)">
                        <div class="our-projects__content">
                            <p class="our-projects__title"><?php echo $value['title']; ?></p>
                            <p class="our-projects__text"><?php echo $value['desc']; ?></p>
                        </div>
                    </a>
                <?php endif; ?>
            <?php ++$count; endforeach; ?>
        </div>
    </div>
</section><!-- End Projects Section -->