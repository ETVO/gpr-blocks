<?php

function render_block_pergunta($attributes)
{
    $question = $attributes['question'];
    $answer = $attributes['answer'];

    $id = 'pergunta' . rand(0, 99);

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-pergunta accordion-item">
        <h3 class="accordion-header" id="heading<?php echo $id; ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-controls="collapse<?php echo $id; ?>">
                <?php echo $question; ?>
            </button>
        </h3>
        <div id="collapse<?php echo $id; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $id; ?>">
            <div class="accordion-body">
                <?php echo $answer; ?>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
