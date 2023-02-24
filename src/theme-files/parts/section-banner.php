<?php
get_template_part('parts/section', 'nav');

if (!empty(get_field('banner')['heading']) && !is_home()) {
    $heading = get_field('banner')['heading'];
    $coverImg = get_field('banner')['cover_image'];
    $button = get_field('banner')['button'];
    $colorPreference = get_field('banner')['heading_color_preference'];
} elseif (is_home()) {
    $heading = "Our Blog";
    $sub_heading = "Our team will assist you in researching, organising, and negotiating loans on your behalf. View our services below.";
}
?>
<header class="lazyload" data-src="<?= $coverImg['url'] ?>">
    <div class="container">
        <div class="row<?= is_front_page() ? ' justify-content-end' : '' ?>">
            <div class="col-lg-10<?= is_front_page() ? ' text-end' : '' ?>">
                <h1 class="fs-75 text-primary fw-600 lh-0_86"><?= $heading ?></h1>
            </div>
        </div>
        <div class="row justify-content-end pt-6">
            <div class="col-auto">
                <a href="<?= $button['url'] ?>" class="btn btn-primary rounded-pill text-white px-4 fw-600">
                    <?= $button['title'] ?>
                </a>
            </div>
            <div class="col-auto">
                <img src="<?= get_template_directory_uri() ?>/images/icons/247.svg" alt="24/7">
            </div>
        </div>
    </div>
</header>
<?php //if (!is_404()) : 
?>
<?php // endif; 
?>