<?php 
$query_data = get_fields();
$count = 1;
?>
<!-- ======= Stages Section ======= -->
<section class="stages">

    <?php if (!empty($query_data['title'])): ?>
        <h3 class="mb-5 pb-5"><?php echo $query_data['title']; ?></h3>
    <?php endif ?>

    <?php if (!empty($query_data['items'])): ?>
        <div class="row">
            <?php foreach ($query_data['items'] as $value): ?>
                <?php if($count % 2 === 0) : ?>
                    <div class="col col-lg-6">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-flex">
                            <div class="count"><?php echo $count; ?></div>
                            <div class="content"><?php echo $value['content']; ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-12 col-lg-6">
                        <div class="d-flex">
                            <div class="count"><?php echo $count; ?></div>
                            <div class="content"><?php echo $value['content']; ?></div>
                        </div>
                    </div>
                    <div class="col col-lg-6"></div>
                <?php endif; ?>
            <?php ++$count; endforeach; ?>
        </div>
    <?php endif ?>

    <?php if (!empty($query_data['examples'])): ?>
        <h3>Примеры работ:</h3>
        <?php foreach ($query_data['examples'] as $example): ?>
            <div class="example">
                <span><?php echo $example['name']; ?></span>
                <a href="<?php echo $example['link']; ?>"><?php echo $example['link']; ?></a>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
</section><!-- End Stages  Section -->