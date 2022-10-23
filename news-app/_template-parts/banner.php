<?php 
$title = get_field('title');
$topic = get_field('topic');
$image = get_field('image');
$description = get_field('description');
?>

<section class="banner-section">
    <div class="container">
        <?php if ($image) { ?>
            <div>
                <?php echo wp_get_attachment_image($image, 'full', "", ["class" => ""]); ?>  
            </div>
        <?php } ?>
        <div>
            <?php if ($topic) { ?>
                <p class="topic"><?php echo $topic ?></p>
            <?php } ?>
            <?php if ($title) { ?>
                <h1> <?php echo $title ?></h1>
            <?php } ?>
            <?php if ($description) { ?>
                <div class="description">
                    <?php echo $description ?>
                </div>
            <?php } ?>
            <div class="info">
                <p>2 hours ago</p>
                <p>By Lucy Hiddleston  |  4min read</p>
            </div>
        </div>
    </div>
</section>
