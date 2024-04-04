<?php

function render_block_banner($attributes)
{
    $title = $attributes['title'];
    $subtitle = $attributes['subtitle'];
    $action = $attributes['action'];
    $image_url = $attributes['image'];
    // $order = $attributes['order'];
    // $align = $attributes['align'];

    ob_start(); // Start HTML buffering
    if ($image_url) :
?>
        <div class="gpr-banner carousel-item" style="background-image: url('<?php echo $image_url; ?>');">
            <div class="overlay position-absolute top-0 w-100 h-100 d-flex">
                <div class="container col-12 col-md-10 col-xl-9 d-flex m-auto">
                    <div class="banner-content my-auto">
                        <div class="titles">
                            <h1 class="title"><?php echo $title; ?></h1>
                            <h5 class="subtitle"><?php echo $subtitle; ?></h5>
                        </div>
                        <?php if ($action) : ?>
                            <div class="action">
                                <a class="btn btn-primary" href="<?php echo $action; ?>">Saiba Mais</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    endif;

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
