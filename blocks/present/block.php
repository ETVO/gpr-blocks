<?php

function render_block_present($attributes, $content)
{

    $image = $attributes['image'];
    $title = $attributes['title'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-present py-5 bg-white">
        <div class="row g-0 w-100 m-0 p-0">
            <div class="image col-12 col-lg-6">
                <img class="w-100" src="<?php echo $image; ?>" alt="">
            </div>
            <div class="content col-12 col-lg-6 d-flex">
                <div class="inner">
                    <div class="title">
                        <h2 class="text-black"><?php echo $title; ?></h2>
                    </div>
                    <div class="text text-bluegpr">
                        <?php echo $text; ?>
                    </div>
                    <div class="caracs mt-5 row gy-3">
                        <?php echo $content; ?>
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
