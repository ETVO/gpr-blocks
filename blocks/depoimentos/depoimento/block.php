<?php

function render_block_depoimento($attributes)
{
    $text = $attributes['text'];
    $photo = $attributes['photo'];
    $name = $attributes['name'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-depoimento carousel-item">
        <div class="column-wrap col-xl-4">
            <div class="inner">
                <div class="text">
                    <?php echo $text; ?>
                </div>
                <div class="author d-flex">
                    <div class="photo">
                        <img src="<?php echo $photo; ?>" alt="">
                    </div>
                    <div class="name">
                        <?php echo $name; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
