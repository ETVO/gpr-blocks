<?php

function render_block_heading($attributes)
{
    $image = $attributes['image'];
    $title = $attributes['title'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-heading" style="background-image: url('<?php echo $image; ?>');">
        <div class="overlay d-flex">
            <div class="container m-auto d-flex">
                <div class="title m-auto ms-0">
                    <h1><?php echo $title; ?></h1>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
