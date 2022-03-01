<?php

function render_block_galeria($attributes)
{

    $title = $attributes['title'];
    $images = $attributes['images'];

    $rand = rand(0, 999);
    $modal_id = "galeriaModal" . clean_str($title) . $rand;
    $modal_carousel_id = "galeriaModalCarousel" . clean_str($title) . $rand;

    ob_start(); // Start HTML buffering
?>

    <div class="gpr-galeria py-4 py-md-5 bg-white">
        <div class="container col-12 col-md-10 col-xl-9 py-3 mx-auto">
            <div class="title text-center pb-4">
                <h2 class="text-bluegpr"><?php echo $title; ?></h2>
            </div>
            <div class="images galeria row g-3">
                <?php foreach ($images as $i => $image) : ?>
                    <div class="image col-12 col-sm-6 col-md-4 col-xxl-3">
                        <img class="w-100" 
                            src="<?php echo $image['url']; ?>" 
                            alt="" 
                            
                            data-bs-target="#<?php echo $modal_id; ?>" 
                            data-bs-toggle="modal" 
                            data-bs-dismiss="modal"
                        >
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="modal fade p-0" id="<?php echo $modal_id; ?>" aria-hidden="true" aria-label="<?php echo __('Visualização de imagens'); ?>" tabindex="-1">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="modal-content text-light">
                    <div class="modal-header">
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="<?php echo __('Fechar'); ?>">
                            <span class="bi bi-x text-light" style="line-height: 1rem; font-size: 2rem;"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="<?php echo $modal_carousel_id; ?>" class="carousel slide" data-touch='false' data-bs-ride="carousel" data-bs-interval="40000">

                            <div class="carousel-inner h-100">
                                <?php for ($i = 0; $i < count($images); $i++) : ?>
                                    <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                                        <img src="<?php echo $images[$i]['url']; ?>" class="d-block" alt="">
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $modal_carousel_id; ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?php echo __("Anterior"); ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $modal_carousel_id ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?php echo __("Próximo"); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="selectors m-auto d-flex justify-content-center">
                            <?php for ($i = 0; $i < count($images); $i++) : ?>
                                <div class="image-preview">
                                    <img src="<?php echo $images[$i]['url']; ?>" class="d-block" alt="" data-bs-target="#<?php echo $modal_carousel_id; ?>" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i; ?>">
                                </div>
                            <?php endfor; ?>
                        </div>
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
