<?php 
$link = get_field('link');
$text = get_field('text');
?>

<section class="red-block">
    <div class="container">
        <div class="wrapper">
            <?php if ($link) { ?>
                <div class="btn-block">
                    <a href="<?php echo esc_url( $link['url'] ); ?>" class=""><?php echo esc_html( $link['title'] ); ?></a>
                </div>
            <?php } ?>
            <?php if ($text) { ?>
                <p><?php echo $text ?></p>
            <?php } ?>
        </div>
    </div>
</section>