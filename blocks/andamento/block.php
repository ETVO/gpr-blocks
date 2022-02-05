<?php

function render_block_andamento($attributes, $content)
{

    $image = $attributes['image'];
    $title = $attributes['title'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-andamento py-3 py-md-5 bg-white">
        <div class="container">
            <div class="title text-center pb-0 pb-md-4">
                <h2 class="fw-normal text-bluegpr mb-0"><?php echo $title; ?></h2>
            </div>
        </div>
        <div class="row g-0 w-100 m-0 p-0">
            <div class="content col-12 col-lg-6 d-flex">
                <div class="inner ">
                    <?php echo $content; ?>
                </div>
            </div>
            <div class="image col-12 col-lg-6">
                <img class="w-100" src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
