<?php
/*
 * Template Name: Service
 * The Service Page
 *
 */
get_header();
get_template_part('parts/section', 'banner');

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');
$section_8 = get_field('section_8');
$section_9 = get_field('section_9');
$section_10 = get_field('section_10');
$section_11 = get_field('section_11');
$section_12 = get_field('section_12');
$section_13 = get_field('section_13');
?>
<div class="inner_service">
    <div class="d-flex flex-column">
        <?php if ($section_1['display'] == 'Visible') : ?>
            <div class="order-<?= $section_1['order'] ?>">
                <section class="section_1 bg-secondary text-white">
                    <div class="container">
                        <div class="row align-items-center gy-4 gy-lg-0">
                            <div class="col-lg">
                                <div class="fs-50 lh-1 fw-600"><?= $section_1['heading'] ?></div>
                            </div>
                            <?php if (!empty($section_1['description'])) : ?>
                                <div class="col-lg-7">
                                    <div class="description py-0"><?= $section_1['description'] ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_2['display'] == 'Visible') : ?>
            <div class="order-<?= $section_2['order'] ?>">
                <section class="section_2">
                    <div class="container">
                        <div class="fs-50 fw-600 text-primary"><?= $section_2['heading'] ?></div>
                        <div class="description"><?= $section_2['description'] ?></div>
                        <?php
                        if (have_rows('section_2')) :
                            while (have_rows('section_2')) : the_row();
                                if (have_rows('services')) :
                        ?>
                                    <div class="row py-md-5 gy-3 gy-md-4 justify-content-center">
                                        <?php while (have_rows('services')) : the_row(); ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="service_card"><?= get_sub_field('service') ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <?php if (!empty($section_2['secondary_description'])) : ?>
                            <div class="description"><?= $section_2['secondary_description'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($section_2['button'])) : ?>
                            <a href="<?= $section_2['button']['url'] ?>" target="<?= $section_2['button']['target'] ?>" class="btn btn-primary rounded-pill px-4 fw-600"><?= $section_2['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_3['display'] == 'Visible') : ?>
            <div class="order-<?= $section_3['order'] ?>">
                <section class="section_3 <?= ($section_3['theme'] == 'Dark') ? 'bg-primary text-white' : 'bg-white' ?>">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="fs-50 fw-600 lh-1 <?= ($section_3['theme'] == 'Light') ? 'text-primary' : '' ?>"><?= $section_3['heading'] ?></div>
                                <div class="section_image d-lg-none mt-5"><img src="<?= $section_3['image']['url'] ?>" class="w-100" alt="<?= $section_3['image']['alt'] ?>"></div>
                                <div class="description"><?= $section_3['description'] ?></div>
                                <?php if (!empty($section_3['button'])) : ?>
                                    <a href="<?= $section_3['button']['url'] ?>" target="<?= $section_3['button']['target'] ?>" class="btn <?= ($section_3['theme'] == 'Dark') ? 'btn-secondary' : 'btn-primary' ?> rounded-pill px-4 fw-600 text-white"><?= $section_3['button']['title'] ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left">
                                <div class="section_image"><img src="<?= $section_3['image']['url'] ?>" class="w-100" alt="<?= $section_3['image']['alt'] ?>"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_4['display'] == 'Visible') : ?>
            <div class="order-<?= $section_4['order'] ?>">
                <section class="section_4<?= ($section_4['theme'] == 'Dark') ? ' bg-primary text-white' : ''; ?>">
                    <div class="container">
                        <div class="fs-50 fw-600 <?= ($section_4['theme'] == 'Dark') ? 'text-white' : 'text-primary'; ?>"><?= $section_4['heading'] ?></div>
                        <div class="description"><?= $section_4['description'] ?></div>
                        <?php
                        if (have_rows('section_4')) :
                            while (have_rows('section_4')) : the_row();
                                if (have_rows('list')) :
                        ?>
                                    <div class="row justify-content-md-center py-md-5 gy-5 gy-lg-4 gy-lg-0<?= ($section_4['theme'] == 'Light') ? ' gx-lg-5' : ''; ?>">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-md-6 col-lg">
                                                <div class="list_card">
                                                    <div class="section_image"><img src="<?= get_sub_field('image')['url'] ?>" class="w-100 rounded-10" alt="<?= get_sub_field('image')['alt'] ?>"></div>
                                                    <div class="fw-500 fs-20 pt-3 <?= ($section_4['theme'] == 'Dark') ? 'text-white' : 'text-center text-primary'; ?>"><?= get_sub_field('title') ?></div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <?php if (!empty($section_4['secondary_description'])) : ?>
                            <div class="description py-4"><?= $section_4['secondary_description'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($section_4['button'])) : ?>
                            <a href="<?= $section_4['button']['url'] ?>" target="<?= $section_4['button']['target'] ?>" class="btn <?= ($section_4['theme'] == 'Light') ? 'btn-primary' : 'btn-secondary'; ?> text-white rounded-pill px-4 fw-600"><?= $section_4['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_5['display'] == 'Visible') : ?>
            <div class="order-<?= $section_5['order'] ?>">
                <section class="section_5 py-5 py-md-7">
                    <div class="container">
                        <div class="fs-50 fw-600 text-primary pb-2"><?= $section_5['heading'] ?></div>
                        <div class="description"><?= $section_5['description'] ?></div>
                        <?php if (!empty($section_5['button'])) : ?>
                            <a href="<?= $section_5['button']['url'] ?>" target="<?= $section_5['button']['target'] ?>" class="btn btn-primary rounded-pill px-4 fw-600"><?= $section_5['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_6['display'] == 'Visible') : ?>
            <div class="order-<?= $section_6['order'] ?>">
                <section class="section_6 bg-secondary text-white">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-7">
                                <div class="fs-50 lh-1 fw-600"><?= $section_6['heading'] ?></div>
                                <div class="description"><?= $section_6['description'] ?></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="section_image"><img src="<?= $section_6['image']['url'] ?>" class="w-100" alt="<?= $section_6['image']['alt'] ?>"></div>
                            </div>
                        </div>

                        <?php
                        if (have_rows('section_6')) :
                            while (have_rows('section_6')) : the_row();
                                if (have_rows('list')) :
                        ?>
                                    <div class="row py-5 gy-5 gy-md-0">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-md-4 text-center">
                                                <div class="pb-2"><img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>"></div>
                                                <div class="fs-20 pt-4 fw-600"><?= get_sub_field('title') ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>

                        <?php if (!empty($section_6['description_2'])) : ?>
                            <div class="description"><?= $section_6['description_2'] ?></div>
                        <?php endif; ?>
                    </div>
                    <?php
                    if (have_rows('section_6')) :
                        while (have_rows('section_6')) : the_row();
                            if (have_rows('brands')) : ?>
                                <div class="brand_slider" id="brand_slider">
                                    <?php while (have_rows('brands')) : the_row(); ?>
                                        <div><img src="<?= get_sub_field('brand')['url'] ?>" alt="<?= get_sub_field('brand')['alt'] ?>"></div>
                                    <?php endwhile; ?>
                                </div>
                    <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
                    <div class="container">
                        <?php if (!empty($section_6['description_3'])) : ?>
                            <div class="description"><?= $section_6['description_3'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($section_6['button'])) : ?>
                            <a href="<?= $section_6['button']['url'] ?>" target="<?= $section_6['button']['target'] ?>" class="btn btn-primary text-white fw-600 px-4 rounded-pill"><?= $section_6['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_7['display'] == 'Visible') : ?>
            <div class="order-<?= $section_7['order'] ?>">
                <section class="section_7 text-white <?= strtolower($section_7['theme']) ?>">
                    <div class="container">
                        <div class="fs-50 fw-600"><?= $section_7['heading'] ?></div>
                        <div class="description pb-0"><?= $section_7['description'] ?></div>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_8['display'] == 'Visible') : ?>
            <div class="order-<?= $section_8['order'] ?>">
                <section class="section_8 bg-primary text-white">
                    <div class="container">
                        <div class="fs-50 fw-600 lh-1"><?= $section_8['heading'] ?></div>
                        <div class="description"><?= $section_8['description'] ?></div>
                        <?php
                        if (have_rows('section_8')) :
                            while (have_rows('section_8')) : the_row();
                                if (have_rows('list')) :
                                    $index = 1;
                                    while (have_rows('list')) : the_row();
                        ?>
                                        <div class="list_card">
                                            <div class="row align-items-center">
                                                <div class="col-1 col-md-2 col-lg-2">
                                                    <div class="index text-center"><?= $index ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="fs-20 fw-600 lh-2"><?= get_sub_field('title') ?></div>
                                                    <div class="fs-20 fw-400 lh-1_6 d-none d-md-block"><?= get_sub_field('description') ?></div>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                        $index++;
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <?php if (!empty($section_8['description'])) : ?>
                            <div class="description"><?= $section_8['description'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($section_8['button'])) : ?>
                            <a href="<?= $section_8['button']['url'] ?>" target="<?= $section_8['button']['target'] ?>" class="btn btn-secondary text-white fw-600 px-4 rounded-pill"><?= $section_8['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_9['display'] == 'Visible') : ?>
            <div class="order-<?= $section_9['order'] ?>">
                <section class="section_9 py-6 py-md-7">
                    <div class="container">
                        <div class="fs-50 lh-1 fw-600 text-primary"><?= $section_9['heading'] ?></div>
                        <?php if (!empty($section_9['description'])) : ?>
                            <div class="description"><?= $section_9['description'] ?></div>
                        <?php endif; ?>
                        <?php if (have_rows('section_9')) :
                            while (have_rows('section_9')) : the_row();
                                if (have_rows('list')) :
                        ?>
                                    <div class="row gy-4">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="list_card">
                                                    <img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                                    <div class="caption"><?= get_sub_field('title') ?></div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <?php if (!empty($section_9['description_2'])) : ?>
                            <div class="description"><?= $section_9['description_2'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($section_9['button'])) : ?>
                            <a href="<?= $section_9['button']['url'] ?>" target="<?= $section_9['button']['target'] ?>" class="btn btn-primary text-white fw-600 px-4 rounded-pill"><?= $section_9['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_10['display'] == 'Visible') : ?>
            <div class="order-<?= $section_10['order'] ?>">
                <section class="section_10 bg-primary text-white">
                    <div class="container">
                        <div class="fs-50 lh-1 fw-600"><?= $section_10['heading'] ?></div>
                        <?php
                        if (have_rows('section_10')) :
                            while (have_rows('section_10')) : the_row();
                                if (have_rows('list')) :
                        ?>
                                    <div class="py-6">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="row gap-1 gap-md-3 align-items-center py-3">
                                                <div class="col-2 col-md-auto"><img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>"></div>
                                                <div class="col fs-20"><?= get_sub_field('text') ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <?php if (!empty($section_10['button'])) : ?>
                            <a href="<?= $section_10['button']['url'] ?>" target="<?= $section_10['button']['target'] ?>" class="btn btn-secondary text-white fw-600 px-4 rounded-pill"><?= $section_10['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_11['display'] == 'Visible') : ?>
            <div class="order-<?= $section_11['order'] ?>">
                <section class="section_11 bg-primary text-white">
                    <div class="container">
                        <div class="fs-50 fw-600"><?= $section_11['heading'] ?></div>
                        <div class="description">
                            <?= $section_11['description'] ?>
                        </div>
                        <?php if (!empty($section_11['button'])) : ?>
                            <a href="<?= $section_11['button']['url'] ?>" target="<?= $section_11['button']['target'] ?>" class="btn btn-secondary text-white fw-600 px-4 rounded-pill"><?= $section_11['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_12['display'] == 'Visible') : ?>
            <div class="order-<?= $section_12['order'] ?>">
                <section class="section_12 bg-primary text-white">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-right">
                                <div class="section_image"><img src="<?= $section_12['image']['url'] ?>" class="w-100" alt="<?= $section_12['image']['alt'] ?>"></div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left">
                                <div class="fs-50 fw-600 lh-1"><?= $section_12['heading'] ?></div>
                                <div class="description"><?= $section_12['description'] ?></div>
                            </div>
                        </div>

                        <div class="section_image d-lg-none"><img src="<?= $section_12['image']['url'] ?>" class="w-100" alt="<?= $section_12['image']['alt'] ?>"></div>

                        <div class="fs-50 fw-600 lh-1 pt-5 pb-4 pt-lg-7 pb-md-5">We Can:</div>

                        <?php
                        if (have_rows('section_12')) :
                            while (have_rows('section_12')) : the_row();
                                if (have_rows('list')) :
                                    $index = 1;
                                    while (have_rows('list')) : the_row();
                        ?>
                                        <div class="list_card gap-3 gap-md-5">
                                            <div class="index"><?= $index ?></div>
                                            <div class="fs-18"><?= get_sub_field('text') ?></div>
                                        </div>
                        <?php
                                        $index++;
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_13['display'] == 'Visible') : ?>
            <div class="order-<?= $section_13['order'] ?>">
                <section class="section_13 bg-primary text-white">
                    <div class="container">
                        <div class="fs-50 lh-1 fw-600"><?= $section_13['heading'] ?></div>
                        <div class="description"><?= $section_13['description'] ?></div>
                        <div class="accordion-container">
                            <?php
                            if (have_rows('section_13')) :
                                while (have_rows('section_13')) : the_row();
                                    if (have_rows('accordion')) :
                                        $index = 1;
                                        while (have_rows('accordion')) : the_row();
                                            $question = get_sub_field('title');
                                            $answer = get_sub_field('description');
                            ?>
                                            <div class="accordion-card">
                                                <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                                    <div class="row g-0 w-100 justify-content-between align-items-center">
                                                        <div class="col h-inherit">
                                                            <?= $question ?>
                                                        </div>
                                                        <div class="col-auto h-inherit">
                                                            <div class="plusminus">
                                                                <?php if ($index == 1) { ?>
                                                                    <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M8.79759 0.950905V3.34224H0.414062V0.950905H8.79759Z" fill="white" />
                                                                    </svg>
                                                                <?php } else { ?>
                                                                    <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.10449 13.4713V0.988392H7.58816V13.4713H5.10449ZM0.109464 8.46709V5.98342H12.5924V8.46709H0.109464Z" fill="white" />
                                                                    </svg>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                                    <?= $answer ?>
                                                </div>
                                            </div>
                            <?php
                                            $index++;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>

    <?php get_template_part('parts/section', 'servicesListing') ?>
</div>
<?php get_footer(); ?>