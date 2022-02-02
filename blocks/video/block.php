<?php

function render_block_video($attributes, $content)
{

    $video = $attributes['video'];
    $date = $attributes['date'];
    $text = $attributes['text'];

    $dormitorios = get_field('dormitorios');
    $metragem = get_field('metragem');
    $area = get_field('area');

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-video py-5 bg-white">
        <div class="row g-0 w-100 m-0 p-0">
            <div class="content col-12 col-lg-6 d-flex">
                <div class="inner">
                    <div class="text text-bluegpr">
                        <?php echo $text; ?>
                    </div>
                    <div class="caracs mt-4">
                        <div class="carac d-flex">
                            <img src="<?php echo THEME_IMG_URI . '/dormitorios.png'; ?>" alt="">
                            <span><?php echo $dormitorios; ?></span>
                        </div>
                        <div class="carac d-flex">
                            <img src="<?php echo THEME_IMG_URI . '/metragem.png'; ?>" alt="">
                            <span><?php echo $metragem; ?></span>
                        </div>
                        <div class="carac d-flex">
                            <img src="<?php echo THEME_IMG_URI . '/area.png'; ?>" alt="">
                            <span><?php echo $area; ?></span>
                        </div>
                    </div>
                    <div class="date-wrap mt-4">
                        <h6 class="text-bluegpr">Data da entrega</d>
                        <h6 class="date text-primary"><?php echo $date; ?></h6>
                    </div>
                </div>
            </div>
            <div class="image col-12 col-lg-6">
                <?php echo $video; ?>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
