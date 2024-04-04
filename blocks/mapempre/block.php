<?php

function render_block_mapempre($attributes, $content)
{

    $title = $attributes['title'];
    $link = $attributes['link'];
    $address = $attributes['address'];

    $map_url = htmlspecialchars(strip_tags($address));

    ob_start(); // Start HTML buffering
?>

    <section class="gpr-mapempre">
        <div class="wrap d-flex">
            <iframe src="https://maps.google.com/maps?q=<?php echo $map_url; ?>&t=m&mrt=yp&z=15&output=embed&iwloc=addr&msa=0" frameborder="0"></iframe>

            <div class="inner d-flex py-5">
                <div class="container d-flex my-auto">
                    <div class="content my-auto">
                        <div class="title mb-3">
                            <h2 class="text-bluegpr fw-normal"><?php echo $title; ?></h2>
                        </div>
                        <div class="address mb-3">
                            <span class="icon bi-geo-alt-fill"></span>
                            <span class="text"><?php echo $address; ?></span>
                        </div>
                        <div class="refs mb-3">
                            <?php echo $content; ?>
                        </div>
                        <div class="action">
                            <a href="<?php echo $link; ?>">FALAR COM UM CONSULTOR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
