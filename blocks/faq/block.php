<?php

function render_block_faq($attributes, $content, $block)
{

    
    $title = $attributes['title'];
    
    $id = 'accordionFAQ' . rand(0, 99);
    
    ob_start(); // Start HTML buffering
?>

    <div class="gpr-faq py-5 bg-white" id="faq">
        <div class="container col-12 col-md-10 py-3 mx-auto">
            <div class="title text-center pb-4">
                <h2 class="fw-normal text-bluegpr"><?php echo $title; ?></h2>
            </div>
            <div class="perguntas">
                <div class="accordion">
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
