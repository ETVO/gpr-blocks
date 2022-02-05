<?php

function render_block_mapref($attributes)
{
    $desc = $attributes['desc'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-mapref">
        <span class="icon bi-geo-alt-fill"></span>
        <span class="desc"><?php echo $desc; ?></sp>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
