<?php

function render_block_numeros($attributes, $content)
{

    $title = $attributes['title'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-numeros py-5 bg-white">
        <div class="container col-12 col-md-10 py-3 mx-auto">
            <div class="title text-center pb-4">
                <h2 class="text-bluegpr"><?php echo $title; ?></h2>
            </div>
            <div class="numeros-content row gy-4 gx-3">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
