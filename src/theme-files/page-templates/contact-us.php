<?php
/*
 * Template Name: Contact Us
 * The Contact Us
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="contact_us">
    <div class="tagline">
        <div class="container">
            <?= get_field('tagline') ?>
        </div>
    </div>

    <div class="d-md-none">
        <div class="container">
            <div class="main_form">
                <?= do_shortcode('[contact-form-7 id="215" title="Contact Us"]') ?>
            </div>
        </div>
    </div>


    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="contacts">
                        <li>
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/images/icons/contact-phone.png" alt="Phone">
                            </div>
                            <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white"><?= get_field('phone_number', 'option') ?></a>
                        </li>
                        <li>
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/images/icons/contact-phone.png" alt="Phone">
                            </div>
                            <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white"><?= get_field('mobile_number', 'option') ?></a>
                        </li>
                        <li>
                            <div>
                                <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3594 23.36L29.073 31.5584C30.1538 32.572 31.845 32.572 32.9258 31.5584L41.6394 23.36" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M41.6396 37.92L33.9004 30.64" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M28.0986 30.64L20.3594 37.92" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M42.2 20H19.8C18.2536 20 17 21.2536 17 22.8V38.48C17 40.0264 18.2536 41.28 19.8 41.28H42.2C43.7464 41.28 45 40.0264 45 38.48V22.8C45 21.2536 43.7464 20 42.2 20Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="31" cy="31" r="30" stroke="#3498DB" stroke-width="2" />
                                </svg>
                            </div>
                            <a href="mailto:<?= get_field('admin_email', 'option') ?>" class="text-white"><?= get_field('admin_email', 'option') ?></a>
                        </li>
                        <li>
                            <div>
                                <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31 45.8879C30.6775 45.53 30.2281 45.0244 29.6929 44.404C28.5754 43.1088 27.0873 41.3168 25.6009 39.327C24.1123 37.3343 22.637 35.1582 21.5369 33.0931C20.4238 31.0033 19.75 29.1264 19.75 27.7037C19.75 21.6716 24.7689 16.75 31 16.75C37.2308 16.75 42.25 21.6719 42.25 27.7037C42.25 29.1263 41.5762 31.0032 40.4631 33.0929C39.363 35.1581 37.8876 37.3341 36.3991 39.3268C34.9127 41.3167 33.4245 43.1087 32.3071 44.404C31.7719 45.0244 31.3224 45.53 31 45.8879ZM24.2389 26.7104C24.2389 30.38 27.2837 33.323 31 33.323C34.7163 33.323 37.7611 30.38 37.7611 26.7104C37.7611 23.0407 34.7163 20.0978 31 20.0978C27.2837 20.0978 24.2389 23.0407 24.2389 26.7104Z" stroke="white" stroke-width="1.5" />
                                    <circle cx="31" cy="31" r="30" stroke="#3498DB" stroke-width="2" />
                                </svg>
                            </div>
                            Servicing the <?= get_field('servicing_area', 'option') ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 position-relative d-none d-md-block">
                    <div class="main_form">
                        <?= do_shortcode('[contact-form-7 id="215" title="Contact Us"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'servicesListing') ?>
</div>

<?php get_footer(); ?>