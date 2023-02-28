<?php
/*
 * Template Name: Testimonials
 * The Testimonials page
 *
 */
get_header();
get_template_part('parts/section', 'banner');

$section_1 = get_field('section_1');
?>

<div class="testimonials">
    <?php if (!empty($section_1)) : ?>
        <section class="section_1 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="fs-50 fw-600 lh-1"><?= $section_1['heading'] ?></div>
                        <div class="description"><?= $section_1['description'] ?></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section_image"><img src="<?= $section_1['image']['url'] ?>" class="w-100" alt="<?= $section_1['image']['alt'] ?>"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?= get_template_part('parts/section', 'cta'); ?>
</div>

<?php get_footer(); ?>