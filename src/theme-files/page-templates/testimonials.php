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
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="fs-50 fw-600 lh-1"><?= $section_1['heading'] ?></div>
                        <div class="section_image mt-5 d-md-none"><img src="<?= $section_1['image']['url'] ?>" class="w-100" alt="<?= $section_1['image']['alt'] ?>"></div>
                        <div class="description"><?= $section_1['description'] ?></div>
                    </div>
                    <div class="col-lg-6 col-xl-5 d-none d-md-block" data-aos="fade-left">
                        <div class="section_image"><img src="<?= $section_1['image']['url'] ?>" class="w-100" alt="<?= $section_1['image']['alt'] ?>"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="reviews">
        <div class="container">
            <div class="text-center fs-50 lh-1 fw-600 pb-5 text-primary">Client love</div>
            <div class="reviews_slider" id="reviews_slider">
                <?php if (have_rows('testimonials')) :
                    while (have_rows('testimonials')) : the_row();
                        $username = get_sub_field('username');
                        $comment = get_sub_field('comment');
                ?>
                        <div class="review_slide">
                            <div class="initial"><?= substr($username, 0, 1) ?></div>
                            <div class="fs-20 fw-600 text-primary"><?= $username ?></div>
                            <div class="comment py-3">
                                <?= $comment ?>
                            </div>
                            <svg width="119" height="19" viewBox="0 0 119 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 0L11.6329 6.56434H18.535L12.9511 10.6213L15.084 17.1857L9.5 13.1287L3.91604 17.1857L6.04892 10.6213L0.464963 6.56434H7.36712L9.5 0Z" fill="#3498DB" />
                                <path d="M34.5 0L36.6329 6.56434H43.535L37.9511 10.6213L40.084 17.1857L34.5 13.1287L28.916 17.1857L31.0489 10.6213L25.465 6.56434H32.3671L34.5 0Z" fill="#3498DB" />
                                <path d="M59.5 0L61.6329 6.56434H68.535L62.9511 10.6213L65.084 17.1857L59.5 13.1287L53.916 17.1857L56.0489 10.6213L50.465 6.56434H57.3671L59.5 0Z" fill="#3498DB" />
                                <path d="M84.5 0L86.6329 6.56434H93.535L87.9511 10.6213L90.084 17.1857L84.5 13.1287L78.916 17.1857L81.0489 10.6213L75.465 6.56434H82.3671L84.5 0Z" fill="#3498DB" />
                                <path d="M109.5 0L111.633 6.56434H118.535L112.951 10.6213L115.084 17.1857L109.5 13.1287L103.916 17.1857L106.049 10.6213L100.465 6.56434H107.367L109.5 0Z" fill="#3498DB" />
                            </svg>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <?= get_template_part('parts/section', 'cta'); ?>
</div>

<?php get_footer(); ?>