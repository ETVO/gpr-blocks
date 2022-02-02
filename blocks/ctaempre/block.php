<?php

function render_block_ctaempre($attributes)
{
    $image = $attributes['image'];
    $title = $attributes['title'];
    $link = $attributes['link'];
    $link_text = $attributes['linkText'];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-ctaempre" style="background-image: url('<?php echo $image; ?>');">
        <div class="overlay d-flex">
            <div class="container m-auto text-center">
                <div class="title m-auto ms-0">
                    <h1 class="text-uppercase text-white"><?php echo $title; ?></h1>
                </div>
                <div class="action mt-4">
                    <a class="btn btn-primary" href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
