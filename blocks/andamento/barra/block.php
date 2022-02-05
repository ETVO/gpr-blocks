<?php

function render_block_barra($attributes)
{
    $desc = $attributes['desc'];
    $percent = $attributes['percent'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-barra mb-4">
        <div class="desc mb-1">
            <span>
                <?php echo $desc; ?>
            </span>
            <span class="percent">
                <?php echo $percent ?>%
            </span>
        </div>
        <div class="progress">
            <div class="progress-bar" style="width: <?php echo $percent; ?>%;" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
