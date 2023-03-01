<?php
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="inner_service">
    <?php
    $section_1 = get_field('section_1');
    if ($section_1['display'] == 'Visible') :
    ?>
        <section class="section_1 order-<?= $section_1['order'] ?> bg-secondary text-white">
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
    <?php endif; ?>

    <?php
    $section_2 = get_field('section_2');
    if ($section_2['display'] == 'Visible') :
    ?>
        <section class="section_2 order-<?= $section_2['order'] ?>">
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
    <?php endif; ?>
</div>
<?php get_footer(); ?>