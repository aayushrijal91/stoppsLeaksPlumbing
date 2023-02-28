<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');

$section_1 = get_field('section_1');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
?>

<div class="homepage">
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

    <section class="section_2">
        <?php get_template_part('parts/section', 'servicesListing') ?>
    </section>

    <?php if (!empty($section_3['heading'])) : ?>
        <section class="section_3 lazyload" data-src="<?= $section_3['cover_image']['url'] ?>">
            <div class="section_3_inner">
                <div class="container">
                    <div class="fw-600 fs-50"><?= $section_3['heading'] ?></div>
                    <div class="description">
                        <?= $section_3['description'] ?>
                    </div>
                    <a href="<?= $section_3['button']['url'] ?>" target="<?= $section_3['button']['target'] ?>" class="btn btn-secondary rounded-pill text-white px-4 fw-600"><?= $section_3['button']['title'] ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($section_4['heading'])) : ?>
        <section class="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="fs-75 fw-600 text-primary lh-0_86"><?= $section_4['heading'] ?></div>
                    </div>
                </div>
                <div class="row py-6">
                    <?php
                    if (have_rows('section_4')) :
                        while (have_rows('section_4')) : the_row();
                            if (have_rows('reasons')) :
                                while (have_rows('reasons')) : the_row();
                    ?>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="why-us-card">
                                            <div><?= get_sub_field('icon') ?></div>
                                            <div class="pt-4"><?= get_sub_field('text') ?></div>
                                        </div>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
                <a href="<?= $section_4['button']['url'] ?>" target="<?= $section_4['button']['target'] ?>" class="btn btn-primary rounded-pill fw-500 px-4"><?= $section_4['button']['title'] ?></a>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($section_5['heading'])) : ?>
        <section class="section_5 bg-secondary text-white">
            <div class="container">
                <div class="fs-75 fw-600 pb-5"><?= $section_5['heading'] ?></div>
                <?php if (have_rows('section_5')) :
                    while (have_rows('section_5')) : the_row();
                        if (have_rows('reasons')) :
                ?>
                            <ul class="reasons">
                                <?php while (have_rows('reasons')) : the_row();
                                    $icon = get_sub_field('icon');
                                    $text = get_sub_field('text');
                                ?>
                                    <li class="d-flex align-items-center gap-5">
                                        <img src="<?= $icon['url'] ?>" alt="<?= $icon['url'] ?>">
                                        <div class="fs-20 fw-600"><?= $text ?></div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                <?php
                        endif;
                    endwhile;
                endif; ?>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>