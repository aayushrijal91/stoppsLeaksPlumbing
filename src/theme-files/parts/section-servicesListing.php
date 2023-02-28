<?php $services = get_field('service_listing');
if (!empty($services['heading'])) : ?>
    <section class="service_listing">
        <div class="container">
            <div class="fw-600 fs-75 text-primary lh-1 pb-4"><?= $services['heading'] ?></div>
            <div class="fs-20 pt-2">
                <?= $services['sub_heading'] ?>
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
                wp_reset_postdata();
                ?>

                <div class="col">
                    <div class="service_card">
                        <div class="featured_image bg-secondary px-5 d-flex align-items-center text-white">
                            <div>
                                <div class="fs-35 fw-600 lh-1">We Would love to hear from you!</div>
                                <div class="fs-20 pt-2 pb-5">Why not give us a call on <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white fw-600"><?= get_field('mobile_number', 'option') ?></a> or <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white fw-600"><?= get_field('phone_number', 'option') ?></a></div>
                                <a href="<?= $services['cta_button']['url'] ?>" target="<?= $services['cta_button']['target'] ?>" class="btn btn-primary rounded-pill fw-600 px-4"><?= $services['cta_button']['title'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= $services['main_button']['url'] ?>" class="btn btn-primary rounded-pill fw-600 px-4" target="<?= $services['main_button']['target'] ?>"><?= $services['main_button']['title'] ?></a>
        </div>
    </section>
<?php endif; ?>