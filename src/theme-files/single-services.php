<?php
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
                            <div class="col-lg-7">
                                <div class="description py-0"><?= $section_1['description'] ?></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_2['display'] == 'Visible') : ?>
            <div class="order-<?= $section_2['order'] ?>">
                <section class="section_2">
                    <div class="container">
                        <div class="fs-50 fw-600 text-primary pb-2"><?= $section_2['heading'] ?></div>
                        <div class="description pt-4 pb-0"><?= $section_2['description'] ?></div>
                        <?php
                        if (have_rows('section_2')) :
                            while (have_rows('section_2')) : the_row();
                                if (have_rows('services')) :
                        ?>
                                    <div class="row py-5 g-4">
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
                            <div class="description py-4"><?= $section_2['secondary_description'] ?></div>
                        <?php endif; ?>
                        <a href="<?= $section_2['button']['url'] ?>" target="<?= $section_2['button']['target'] ?>" class="btn btn-primary rounded-pill px-4 fw-600"><?= $section_2['button']['title'] ?></a>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_3['display'] == 'Visible') : ?>
            <div class="order-<?= $section_3['order'] ?>">
                <section class="section_3 bg-primary text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="fs-50 fw-600 lh-1"><?= $section_3['heading'] ?></div>
                                <div class="description"><?= $section_3['description'] ?></div>
                                <a href="<?= $section_3['button']['url'] ?>" target="<?= $section_3['button']['target'] ?>" class="btn btn-secondary rounded-pill px-4 fw-600 text-white"><?= $section_3['button']['title'] ?></a>
                            </div>
                            <div class="col-lg-6" data-aos="fade-left">
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
                        <div class="fs-50 fw-600 <?= ($section_4['theme'] == 'Dark') ? 'text-white' : 'text-primary'; ?> pb-2"><?= $section_4['heading'] ?></div>
                        <div class="description pt-4 pb-0"><?= $section_4['description'] ?></div>
                        <?php
                        if (have_rows('section_4')) :
                            while (have_rows('section_4')) : the_row();
                                if (have_rows('list')) :
                        ?>
                                    <div class="row justify-content-center py-5 gy-4 gy-lg-0<?= ($section_4['theme'] == 'Light') ? ' gx-lg-5' : ''; ?>">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-md-4 col-lg">
                                                <div class="list_card">
                                                    <img src="<?= get_sub_field('image')['url'] ?>" class="w-100 rounded-10" alt="<?= get_sub_field('image')['alt'] ?>">
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
                <section class="section_5 py-7">
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
                                    <div class="row py-5">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-4 text-center">
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
                        <a href="<?= $section_6['button']['url'] ?>" target="<?= $section_6['button']['target'] ?>" class="btn btn-primary text-white fw-600 px-4 rounded-pill"><?= $section_6['button']['title'] ?></a>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_7['display'] == 'Visible') : ?>
            <div class="order-<?= $section_7['order'] ?>">
                <section class="section_7 text-white">
                    <div class="container">
                        <div class="fs-50 fw-600 pb-2"><?= $section_7['heading'] ?></div>
                        <div class="description pt-4 pb-0"><?= $section_7['description'] ?></div>
                    </div>
                </section>
            </div>
        <?php endif; ?>

        <?php if ($section_8['display'] == 'Visible') : ?>
            <div class="order-<?= $section_8['order'] ?>">
                <section class="section_8"></section>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>