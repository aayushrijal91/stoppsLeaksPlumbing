<?php
/*
 * Template Name: Locations
 * The Locations Page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="locations">
    <section class="section_1 bg-primary text-white py-7">
        <div class="container">
            <div class="fs-60 fw-600 lh-1">See what locations we service</div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'servicesListing') ?>
</div>

<?php get_footer(); ?>