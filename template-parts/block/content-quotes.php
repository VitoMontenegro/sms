<?php
$query_data = get_fields();
$count = 0;
?>
<!-- ======= Quotes Section ======= -->
<section class="quotes">
    <div class="container">
        <h2><?php echo $query_data['title']; ?></h2>
        <div class="items">
            <?php foreach ($query_data['items'] as $value): ?>
                <?php if($count % 2 === 0) : ?>
                    <div class="item is_right"><?php echo $value['content']; ?></div>
                <?php else: ?>
                    <div class="item is_left"><?php echo $value['content']; ?></div>
                <?php endif; ?>
            <?php ++$count; endforeach; ?>
        </div>
    </div>
</section><!-- End Quotes Section -->