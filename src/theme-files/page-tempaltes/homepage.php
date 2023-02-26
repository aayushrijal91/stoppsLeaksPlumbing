<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="homepage">
    <?php $section_1 = get_field('section_1'); ?>
    <div class="section_1 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 pe-5" data-aos="fade-right">
                    <div class="fs-50 fw-600 lh-1"><?= $section_1['heading'] ?></div>
                    <div class="fw-400 description">
                        <?= $section_1['description'] ?>
                    </div>
                    <a href="<?= $section_1['button']['url'] ?>" target="<?= $section_1['button']['target'] ?>" class="btn btn-secondary rounded-pill text-white px-4 fw-600"><?= $section_1['button']['title'] ?></a>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="section_image"><img src="<?= $section_1['image']['url'] ?>" class="w-100" alt="<?= $section_1['image']['alt'] ?>"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>