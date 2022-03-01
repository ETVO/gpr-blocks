<?php

function render_block_link($attributes)
{
    $text = $attributes['text'];
    $link = $attributes['link'];

    $class = '';
    if(!isset($link)) $class = 'disabled';

    ob_start(); // Start HTML buffering
?>



    <div class="gpr-link col-6 col-md-3 month <?php echo $class ?>">
        <a class="inner" href="<?php echo $link; ?>" target="_blank">
            <?php echo $text; ?>
        </a>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
