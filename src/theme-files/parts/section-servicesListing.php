<?php $services = get_field('service_listing');
if (!empty($services['heading'])) : ?>
    <section class="service_listing <?= strtolower($services['theme']) ?>">
        <div class="container">
            <?php if (!empty($services['heading'])) : ?>
                <div class="fw-600 fs-75 heading lh-1 pb-4"><?= $services['heading'] ?></div>
            <?php endif; ?>
            <?php if (!empty($services['sub_heading'])) : ?>
                <div class="fs-20 pt-2 subheading">
                    <?= $services['sub_heading'] ?>
                </div>
            <?php endif; ?>
            <div class="row <?= !empty($services['sub_heading']) ? 'mt-5 mb-4 my-lg-6' : 'mt-0 mb-5' ?> services gy-md-5 gy-lg-6" id="services">
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
                            <div class="service_card <?= strtolower($services['theme']) ?>">
                                <div class="featured_image">
                                    <img src="<?= $featured_img_url ?>" alt="featured">
                                    <div class="overlay">
                                        <a href="<?= get_the_permalink() ?>" class="btn bordered border-white rounded-pill text-white py-2 px-4 fw-500">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 pt-md-4">
                                    <a href="<?= get_the_permalink() ?>" class="service_title lh-1 fw-600"><?= get_the_title() ?></a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

                <?php if ($services['show_cta'] == 'Visible') : ?>
                    <div class="col d-none d-md-block">
                        <div class="service_card">
                            <div class="featured_image px-4 px-lg-5 d-flex align-items-center text-white">
                                <div>
                                    <div class="fs-35 fw-600 lh-1">We Would love to hear from you!</div>
                                    <div class="fs-20 pt-2 pb-5">Why not give us a call on <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white fw-600"><?= get_field('mobile_number', 'option') ?></a> or <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white fw-600"><?= get_field('phone_number', 'option') ?></a></div>
                                    <?php if (!empty($services['cta_button'])) : ?>
                                        <a href="<?= $services['cta_button']['url'] ?>" target="<?= $services['cta_button']['target'] ?>" class="btn btn-primary rounded-pill fw-600 px-4"><?= $services['cta_button']['title'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if (!empty($services['short_text'])) : ?>
                <div class="fs-20 lh-1 pb-5"><?= $services['short_text'] ?></div>
            <?php endif; ?>

            <?php if (!empty($services['main_button'])) : ?>
                <a href="<?= $services['main_button']['url'] ?>" class="btn btn-primary rounded-pill fw-600 px-4" target="<?= $services['main_button']['target'] ?>"><?= $services['main_button']['title'] ?></a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>