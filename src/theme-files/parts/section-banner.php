<?php
get_template_part('parts/section', 'nav');
$heading = "";
$coverImg = "";
$colorPreference = "";

if (!empty(get_field('banner')['heading']) && !is_home()) {
    $heading = get_field('banner')['heading'];
    $coverImg = get_field('banner')['cover_image']['url'];
    $button = get_field('banner')['button'];
    $colorPreference = get_field('banner')['heading_color_preference'];
} else if (get_page_template('page-templates/suburb.php')) {
    $heading = get_the_title();
    $coverImg = get_template_directory_uri() . '/images/background/suburb-banner.jpg';
    $colorPreference = 'Light';
}

if (!empty($heading)) :
?>
    <header class="<?= (is_front_page() && is_page()) ? 'homepage' : '' ?><?= (!is_front_page() && is_page()) ? 'page' : '' ?><?= (is_page_template('page-templates/service.php')) ? ' servicePage' : '' ?><?= (is_page_template('page-templates/suburb.php')) ? ' suburbPage' : '' ?>" style="background-image: url('<?= $coverImg ?>');">
        <div class="container">
            <div class="row<?= is_front_page() ? ' justify-content-end' : '' ?>">
                <div class="col-lg-10<?= is_front_page() ? ' text-md-end' : '' ?>">
                    <h1 class="fs-75 <?= $colorPreference == 'Light' ? 'text-white' : 'text-primary' ?> fw-600 lh-0_86"><?= $heading ?></h1>
                </div>
            </div>
            <?php if (!empty($button)) { ?>
                <div class="row justify-content-md-end pt-6">
                    <div class="col-auto">
                        <a href="<?= $button['url'] ?>" target="<?= $button['target'] ?>" class="btn btn-primary rounded-pill text-white px-4 fw-600">
                            <?= $button['title'] ?>
                        </a>
                    </div>
                    <div class="col-auto">
                        <img src="<?= get_template_directory_uri() ?>/images/icons/247.svg" alt="24/7">
                    </div>
                </div>
            <?php } ?>
        </div>
    </header>
<?php
endif;
//if (!is_404()) : 
?>
<?php // endif; 
?>