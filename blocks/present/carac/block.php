<?php

function render_block_carac($attributes)
{
    $icon = $attributes['icon'];
    $desc = $attributes['desc'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-carac text-center col-12 col-sm-6 col-lg-4 col-xl-3">
        <div class="icon mb-2">
            <img src="<?php echo $icon; ?>" alt="">
        </div>
        <div class="desc">
            <span><?php echo $desc; ?></span>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
