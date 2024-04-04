<?php

function render_block_etapa($attributes)
{
    $title = $attributes['title'];
    $icon = $attributes['icon'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-etapa col-12 col-md-6 col-lg-3 etapa">
        <div class="title mb-3">
            <h5 class="fw-bold text-black text-center"><?php echo $title; ?></h5>
        </div>
        <div class="icon mb-3 d-flex">
            <img class="m-auto" src="<?php echo $icon; ?>" alt="">
        </div>
        <div class="desc">
            <?php echo $text; ?>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
