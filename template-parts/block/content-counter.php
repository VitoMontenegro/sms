<?php 
$query_data = get_fields(); 
?>
<!-- ======= Counts Section ======= -->
<section  class="counts">
    <div class="container">

        <div class="counters">

            <?php foreach ($query_data['counter'] as $value): ?>
                <div class="item text-center">
                    <div class="count"><?php echo $value["count"]; ?></div>
                    <div class="desc"><?php echo $value["text"]; ?></div>
                </div>
            <?php endforeach ?>

        </div>

    </div>
</section><!-- End Counts Section -->