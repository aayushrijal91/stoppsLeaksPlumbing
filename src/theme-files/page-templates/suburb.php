<?php

/**
 * Template Name: Suburb
 * The suburb Page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="suburb">
    <section class="section_1 py-6">
        <div class="container">
            <div class="fs-20 lh-1_6">Stopps Plumbing is the experienced and reliable plumber in <?= the_title() ?> you can trust. We truly are experts at what we do and take pride in a job well done with decades of experience in the plumbing industry. Our workmanship is second to none, and client satisfaction is our ultimate goal. We are licensed and fully insured in <?= the_title() ?>. Our team are experienced in all types of plumbing systems, including installations, repairs, replacements, servicing, cleaning, and maintenance. We are a local company with an impeccable track record of quality workmanship and happy customers in <?= the_title() ?>.</div>
        </div>
    </section>

    <section class="section_2 bg-primary text-white py-6 py-md-8">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="fs-50 lh-1 fw-600 text-capitalize">Professional <?= the_title() ?> plumbing team on-call now</div>
                    <div class="section_image d-lg-none mt-4 mt-md-5 mb-md-4"><img src="<?= get_template_directory_uri() ?>/images/lib/suburb-aaron.jpg" class="w-100" alt="Suburb"></div>
                    <div class="description">
                        <p>Our qualified team, offer a wide range plumbing service in <?= the_title() ?>. We specialise in general maintenance, blocked drains, pipe locating to identify broken or blocked pipes and leaks, gas installation & repairs, tap and toilet repairs and installation, installation of hot water systems, gas and water leak detection, backflow prevention testing and certification and more in <?= the_title() ?>.</p>
                        <p>We will inspect the problem, assess and discuss appropriate solutions and recommend the best remedy. After consultation will we proceed and fix the problem. We take full responsibility of cleanliness at your property in <?= the_title() ?> leaving the job site neat and tidy.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 d-none d-lg-block" data-aos="fade-left">
                    <div class="section_image"><img src="<?= get_template_directory_uri() ?>/images/lib/suburb-aaron.jpg" class="w-100" alt="Suburb"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_3 pt-7 pb-4 py-md-7">
        <div class="container">
            <div class="row justify-content-between align-items-center gy-5">
                <div class="col-lg-6 col-xl-5" data-aos="fade-right">
                    <div class="section_image"><img src="<?= get_template_directory_uri() ?>/images/lib/backflow.jpg" class="w-100" alt="Suburb"></div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-primary lh-1 fw-600 fs-50">Need an Emergency Plumber in <?= the_title() ?>?</div>
                    <div class="description">
                        <p>Stopps Plumbing operate in <?= the_title() ?> seven days a week 24 hours a day. Being a local business we take a responsive approach to meet any emergency plumbing needs.</p>
                        <p>Our vehicles are loaded with all the equipment, accessories, materials and additional gear to get the job done on site as quickly as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4 pt-7 pb-4 py-md-7 text-white bg-secondary">
        <div class="container">
            <div class="fs-50 lh-1 fw-600">We are the most trusted <?= the_title() ?> plumber</div>
            <div class="description">
                <p>Over the years, we have emerged as the most trusted plumber in <?= the_title() ?>. There are many reasons why residents and businesses in <?= the_title() ?> rely on Stopps Plumbing. Our team have many years of experiences and prioritise customer communication. We assess and diagnose the plumbing issue and thoroughly explain the options to complete the job prior to commencing work.</p>
                <p>Stopps Plumbing guarantees you would always have a trained and experienced plumber in <?= the_title() ?>, ensuring quality workmanship is carried out for every job. We confirm appointments and update clients about our movements and when on approach to your property in <?= the_title() ?>. We supply a booking window so you don’t have to wait for the whole day.</p>
            </div>
        </div>
    </section>

    <section class="service_listing">
        <div class="container">
            <div class="fw-600 fs-75 heading text-primary lh-1 pb-5 pb-md-4">Our <?= the_title() ?> plumbing services include:</div>

            <div class="row py-md-6 services gy-md-5 gy-lg-6" id="services">
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'post__not_in' => array(get_the_ID()),
                    'order'          => 'ASC',
                    'orderby'        => 'publish_date',
                    'meta_query' => array(
                        array(
                            'key' => '_wp_page_template',
                            'value' => 'page-templates/service.php'
                        )
                    )
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                ?>
                        <div class="col-md-6 col-xl-4">
                            <div class="service_card">
                                <div class="featured_image"><img src="<?= $featured_img_url ?>" alt="featured"></div>
                                <div class="pt-4"><a href="<?= get_the_permalink() ?>" class="service_title lh-1 fw-600 text-primary"><?= get_the_title() ?></a></div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

                <div class="col d-none d-md-block">
                    <div class="service_card">
                        <div class="featured_image bg-secondary px-5 d-flex align-items-center text-white">
                            <div>
                                <div class="fs-35 fw-600 lh-1">We Would love to hear from you!</div>
                                <div class="fs-20 pt-2 pb-5">Why not give us a call on <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white fw-600"><?= get_field('mobile_number', 'option') ?></a> or <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white fw-600"><?= get_field('phone_number', 'option') ?></a></div>
                                <a href="<?= get_site_url() ?>/contact-us" class="btn btn-primary rounded-pill fw-600 px-4">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>