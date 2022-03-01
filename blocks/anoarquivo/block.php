<?php

function render_block_anoarquivo($attributes, $content)
{
    $year = $attributes['year'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-anoarquivo my-3 ">
        <div class="d-flex row">
            <div class="col-12 col-lg-3 year d-flex">
                <h3 class="fs-2 fw-bold m-auto">
                    <?php echo $year; ?>
                </h3>
            </div>
            <div class="col-12 col-lg-9 months">
                <div class="row g-3">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
