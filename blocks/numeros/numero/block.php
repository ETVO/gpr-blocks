<?php

function render_block_numero($attributes)
{
    $icon = $attributes['icon'];
    $number = $attributes['number'];
    $desc = $attributes['desc'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-numero text-center col-12 col-sm-6 col-lg-3 col-xl-2">
        <div class="icon mb-4">
            <img src="<?php echo $icon; ?>" alt="">
        </div>
        <div class="number">
            <h5 class="text-dark fw-bold"><?php echo $number; ?></h5>
        </div>
        <div class="desc">
            <small><?php echo $desc; ?></small>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
