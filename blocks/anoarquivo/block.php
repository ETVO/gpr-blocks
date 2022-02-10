<?php

function render_block_anoarquivo($attributes)
{
    $year = $attributes['year'];

    $months = [
        'jan' => 'Janeiro', 
        'fev' => 'Fevereiro', 
        'mar' => 'Março', 
        'apr' => 'Abril', 
        'may' => 'Maio', 
        'jun' => 'Junho', 
        'jul' => 'Julho', 
        'aug' => 'Agosto', 
        'sep' => 'Setembro', 
        'oct' => 'Outubro', 
        'nov' => 'Novembro', 
        'dec' => 'Dezembro'
    ];

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-anoarquivo my-3 ">
        <div class="d-flex row">
            <div class="col-12 col-lg-3 year d-flex">
                <h3 class="fs-2 fw-bold m-auto">
                    <?php echo $year; ?>
                </h3>
            </div>
            <div class="col-12 col-lg-9 months">
                <div class="row g-3">
                    <?php 
                    foreach($months as $month => $name): 
                        $class = '';
                        $value = $attributes[$month];
                        if(!isset($value)) $class = 'disabled';
                    ?>

                        <div class="col-6 col-md-3 month <?php echo $class ?>">
                            <a class="inner" href="<?php echo $value; ?>" target="_blank">
                                <?php echo $name; ?>
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
