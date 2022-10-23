<?php
/*
Template Name: News template
*/
get_header();
$image = get_field('image');
$main_description = get_field('main_description');
$second_title = get_field('second_title');
$items_repeater = get_field('items_repeater');
?>


<section class="title-section-news">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="description-section">
    <div class="container">
        <?php if ($image) { ?>
            <div class="img-block">
                <?php echo wp_get_attachment_image($image, '', ["class" => "width_height"]); ?> 
            </div>
        <?php } ?>
        <div class="info-wrapp">
            <div class="info">
                <p>2 hours ago</p>
                <p>By Lucy Hiddleston  |  4min read</p>
            </div>
        </div>
        <div class="wrapper">
            <?php if ($main_description) { ?>
                <div class="main-description">
                    <?php echo $main_description?>
                </div>
            <?php } ?>
            <?php if ($second_title) { ?>
                <h2 class="second_title"><?php echo $second_title ?></h2>
            <?php } ?>

            <?php if ($items_repeater) { ?>
                <?php foreach ($items_repeater as $item) { ?>
                    <div class="items-wrapper">
                        <div class="img-block">
                            <?php if ($item['image']) { ?>
                                <?php echo wp_get_attachment_image($item['image'], '', ["class" => "width_height"]); ?> 
                            <?php } ?>
                            <?php if ($item['image_description']) { ?>
                                <p><?php echo $item['image_description'] ?></p>
                            <?php } ?>
                        </div>
                    <?php if ($item['description']) { ?>
                        <div class="description">
                            <?php echo $item['description']?>
                        </div>
                    <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>


<?php get_footer(); ?> 