<?php

function render_block_etapas($attributes, $content)
{
    $timeline = $attributes['timeline'];

    ob_start(); // Start HTML buffering
?>
    <section class="gpr-projeto py-5 bg-white">
        <div class="container col-12 col-md-10 col-xl-9 mx-auto py-3">
            <div class="row w-100 m-0 mb-4">
                <?php echo $content; ?>
            </div>
            <div class="timeline d-none d-lg-block">
                <img class="w-100" src="<?php echo $timeline; ?>" alt="">
            </div>
        </div>
    </section>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
