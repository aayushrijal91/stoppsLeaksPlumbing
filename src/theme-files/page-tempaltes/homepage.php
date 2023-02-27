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

    <section class="section_2">
        <div class="container">
            <div class="fw-600 fs-75 text-primary lh-1 pb-4">Our Comprehensive Plumbing Services</div>
            <div class="fs-20 pt-2">
                Choosing the right plumbing can save you time and money. Stopps Plumbing can meet all your plumbing needs.
                <br><span class="fw-600">Our Services include, but are not limited to:</span>
            </div>
            <div class="row py-6 services gy-6">
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'services',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service_card">
                                <div class="featured_image"><img src="<?= $featured_img_url ?>" alt="featured"></div>
                                <div class="pt-4"><a href="<?= get_the_permalink() ?>" class="fs-35 lh-1 fw-600"><?= get_the_title() ?></a></div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

                <div class="col">
                    <div class="service_card">
                        <div class="featured_image bg-secondary px-5 d-flex align-items-center text-white">
                            <div>
                                <div class="fs-35 fw-600 lh-1">We Would love to hear from you!</div>
                                <div class="fs-20 pt-2 pb-5">Why not give us a call on <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white fw-600"><?= get_field('mobile_number', 'option') ?></a> or <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white fw-600"><?= get_field('phone_number', 'option') ?></a></div>
                                <a href="" class="btn btn-primary rounded-pill fw-600 px-4">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="btn btn-primary rounded-pill fw-600 px-4">Fix My Plumbing</a>
        </div>
    </section>
</div>

<?php get_footer(); ?>