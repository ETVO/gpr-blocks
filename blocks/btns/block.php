<?php

function render_block_btns($attributes, $content)
{

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-btns mt-4 d-flex">
        <?php echo $content; ?>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
