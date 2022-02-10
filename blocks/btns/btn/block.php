<?php

function render_block_btn($attributes)
{
    $text = $attributes['text'];
    $link = $attributes['link'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-btn m-2">
        <a href="<?php echo $link; ?>" class="inner btn btn-outline-primary rounded-pill" target="_blank">
            <?php echo $text; ?>
        </a>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
