<?php

function render_block_depoimentos($attributes, $content)
{
    $auto_slide = false;
    $interval = 5000;

    $block_id = 'gprDepoimentos' . rand(0, 100);

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-depoimentos py-5">
        <div class="container col-12 col-md-10 d-flex flex-column py-3">
            <div class="title m-auto mb-4">
                <h2>Depoimentos</h1>
            </div>

            <div class="row mx-auto my-auto justify-content-center">
                <div class="multi-carousel carousel slide" data-bs-ride="<?php echo ($auto_slide) ? "carousel" : "false" ?>" <?php echo ($auto_slide) ? 'data-bs-interval="' . $interval . '"' : ""; ?> data-bs-pause="false" data-custom-indicators="false" id="<?php echo $block_id; ?>">
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php echo __("Anterior"); ?></span>
                    </button>
                    <div class="carousel-inner" role="listbox">
                        <?php echo $content; ?>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php echo __("Próximo"); ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
