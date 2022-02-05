<?php

function render_block_galeria($attributes)
{

    $title = $attributes['title'];
    $images = $attributes['images'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-galeria py-4 py-md-5 bg-white">
        <div class="container col-12 col-md-10 col-xl-9 py-3 mx-auto">
            <div class="title text-center pb-4">
                <h2 class="text-bluegpr"><?php echo $title; ?></h2>
            </div>
            <div class="images row g-3">
                <?php foreach($images as $image): ?>
                    <div class="image col-12 col-sm-6 col-md-4 col-xxl-3">
                        <img class="w-100" src="<?php echo $image['url']; ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
