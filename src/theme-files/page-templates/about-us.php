<?php
/*
 * Template Name: About Us
 * The about us
 *
 */
get_header();
get_template_part('parts/section', 'banner');

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
?>

<div class="about_us">
    <?php if (!empty($section_1['heading'])) : ?>
        <section class="section_1 bg-primary text-white">
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
        </section>
    <?php endif; ?>

    <?php if (!empty($section_2['heading'])) : ?>
        <section class="section_2">
            <div class="container">
                <div class="row align-items-center gx-lg-6">
                    <div class="col-lg-6">
                        <div class="section_image"><img src="<?= $section_2['hero_image']['url'] ?>" class="w-100" alt="<?= $section_2['hero_image']['alt'] ?>"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fs-50 lh-1 fw-600 text-primary"><?= $section_2['heading'] ?></div>
                        <div class="text-secondary lh-1 fw-600 fs-20 py-4"><?= $section_2['sub_heading'] ?></div>
                        <div class="description"><?= $section_2['description'] ?></div>
                        <div class="section_image mt-5"><img src="<?= $section_2['secondary_image']['url'] ?>" class="w-100" alt="<?= $section_2['secondary_image']['alt'] ?>"></div>
                    </div>
                </div>
                <div class="fs-50 lh-1 fw-600 text-primary pt-7 pb-6"><?= $section_2['secondary_heading'] ?></div>
                <div class="row gy-4">
                    <?php if (have_rows('section_2')) :
                        while (have_rows('section_2')) : the_row();
                            if (have_rows('commitments')) :
                                while (have_rows('commitments')) : the_row();
                    ?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="commitment">
                                            <?= get_sub_field('text') ?>
                                        </div>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($section_3['heading'])) : ?>
        <section class="section_3">
            <div class="container">
                <div class="fs-50 fw-600 lh-1"><?= $section_3['heading'] ?></div>
                <div class="description"><?= $section_3['description_1'] ?></div>
                <div class="row justify-content-center gx-5">
                    <?php
                    if (have_rows('section_3')) :
                        while (have_rows('section_3')) : the_row();
                            if (have_rows('tools')) :
                                while (have_rows('tools')) : the_row();
                    ?>
                                    <div class="col-12 col-md-4 col-xl">
                                        <div class="section_image"><img src="<?= get_sub_field('image')['url'] ?>" class="w-100" alt="<?= get_sub_field('image')['alt'] ?>"></div>
                                        <div class="text-center fs-20 fw-500 pt-4"><?= get_sub_field('name') ?></div>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="description"><?= $section_3['description_2'] ?></div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'servicesListing') ?>

    <?php if (!empty($section_5['heading'])) : ?>
        <section class="section_5 bg-secondary text-white">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="fs-50 fw-600 lh-1"><?= $section_5['heading'] ?></div>
                        <div class="description"><?= $section_5['description'] ?></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section_image"><img src="<?= $section_5['image']['url'] ?>" class="w-100" alt="<?= $section_5['image']['alt'] ?>"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?= get_template_part('parts/section', 'cta'); ?>
</div>

<?php get_footer(); ?>