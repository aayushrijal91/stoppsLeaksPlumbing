<section class="footer_top bg-primary py-6 text-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-4 col-xl-12">
                        <a href="<?= home_url() ?>"><img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['url'] ?>"></a>
                    </div>
                    <div class="col-auto d-xl-none">
                        <div class="row">
                            <?php if (have_rows('socials', 'option')) :
                                while (have_rows('socials', 'option')) : the_row();
                                    $icon = get_sub_field('icon');
                            ?>
                                    <div class="col-auto">
                                        <a href="<?= get_sub_field('url') ?>" target="_blank">
                                            <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                        </a>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="fw-500 text-white row flex-column gy-3 py-5">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.02933 0 0 3.88758 0 8.68338C0 13.4792 9 23 9 23C9 23 18 13.4789 18 8.68338C18 3.88784 13.9704 0 9 0ZM9 12.2961C6.51011 12.2961 4.4917 10.3487 4.4917 7.94642C4.4917 5.54413 6.51011 3.59672 9 3.59672C11.4899 3.59672 13.5083 5.54413 13.5083 7.94642C13.5083 10.3487 11.4899 12.2961 9 12.2961Z" fill="white" />
                            </svg>
                        </div>
                        <div><?= get_field('address', 'option') ?></div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1919 17.9974C12.1444 18.0393 11.1289 17.5623 10.1209 17.0945C5.38468 14.896 2.12348 11.3259 0.31449 6.43524C-0.634887 3.86857 0.635513 1.0965 3.1786 0.111367C3.83053 -0.141192 4.3463 0.0352947 4.68862 0.646153C5.27666 1.69367 5.86013 2.74422 6.43904 3.79706C6.78288 4.42237 6.73572 4.94042 6.27776 5.47749C5.84263 5.9887 5.39685 6.49153 4.94194 6.98524C4.79817 7.14119 4.7898 7.26671 4.87728 7.45384C6.07846 10.038 7.96884 11.9276 10.5545 13.1265C10.747 13.2155 10.8695 13.1935 11.0224 13.0535C11.5168 12.5994 12.0197 12.1536 12.5301 11.7177C13.0512 11.2734 13.5807 11.2171 14.1794 11.5458C15.255 12.1353 16.3276 12.7317 17.3957 13.335C17.951 13.6484 18.1267 14.1626 17.9099 14.7583C17.2047 16.6936 15.3562 17.9929 13.1919 17.9967V17.9974Z" fill="white" />
                            </svg>
                        </div>
                        <a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white"><?= get_field('phone_number', 'option') ?></a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1919 17.9974C12.1444 18.0393 11.1289 17.5623 10.1209 17.0945C5.38468 14.896 2.12348 11.3259 0.31449 6.43524C-0.634887 3.86857 0.635513 1.0965 3.1786 0.111367C3.83053 -0.141192 4.3463 0.0352947 4.68862 0.646153C5.27666 1.69367 5.86013 2.74422 6.43904 3.79706C6.78288 4.42237 6.73572 4.94042 6.27776 5.47749C5.84263 5.9887 5.39685 6.49153 4.94194 6.98524C4.79817 7.14119 4.7898 7.26671 4.87728 7.45384C6.07846 10.038 7.96884 11.9276 10.5545 13.1265C10.747 13.2155 10.8695 13.1935 11.0224 13.0535C11.5168 12.5994 12.0197 12.1536 12.5301 11.7177C13.0512 11.2734 13.5807 11.2171 14.1794 11.5458C15.255 12.1353 16.3276 12.7317 17.3957 13.335C17.951 13.6484 18.1267 14.1626 17.9099 14.7583C17.2047 16.6936 15.3562 17.9929 13.1919 17.9967V17.9974Z" fill="white" />
                            </svg>
                        </div>
                        <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="text-white"><?= get_field('mobile_number', 'option') ?></a>
                    </div>
                </div>
                <div class="row d-none d-xl-flex">
                    <?php if (have_rows('socials', 'option')) :
                        while (have_rows('socials', 'option')) : the_row();
                            $icon = get_sub_field('icon');
                    ?>
                            <div class="col-auto">
                                <a href="<?= get_sub_field('url') ?>" target="_blank">
                                    <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md">
                <div class="row gy-md-5 gy-lg-0">
                    <div class="col-md-6 col-lg-3 order-1 order-lg-1">
                        <a href="javascript:void(0)" class="mobile_footer_link_header py-3">
                            <div class="fs-20 fw-600 text-white">Quick Links</div>
                            <div class="d-md-none">
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L6 6L1 1" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                        <?php wp_nav_menu(array(
                            'menu' => 'Quick Links',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link',
                            'container_class' => 'footer_menu',
                            'container_id' => '',
                        )); ?>
                    </div>
                    <div class="col-md order-2 order-md-3">
                        <a href="javascript:void(0)" class="mobile_footer_link_header py-3">
                            <div class="fs-20 fw-600 text-white">Services</div>
                            <div class="d-md-none">
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L6 6L1 1" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                        <div class="footer_menu">
                            <ul class="menu menu_services">
                                <?php
                                $args = array(
                                    'post_type'      => 'page',
                                    'posts_per_page' => -1,
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
                                ?>
                                        <li class="menu-item nav-item">
                                            <a href="<?= get_the_permalink() ?>" class="nav-link"><?= get_the_title() ?></a>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto order-3 order-md-2 order-lg-3">
                        <a href="javascript:void(0)" class="mobile_footer_link_header py-3">
                            <div class="fs-20 fw-600 text-white">Support</div>
                            <div class="d-md-none">
                                <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L6 6L1 1" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                        <?php wp_nav_menu(array(
                            'menu' => 'Footer Support',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link',
                            'container_class' => 'footer_menu',
                            'container_id' => '',
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark py-4 text-light-grey">
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center gy-5 gy-md-0">
            <div class="col-md-auto fs-12 d-md-none text-center">
                Copyright <?= date('Y') ?>
                <span class="text-secondary px-4">|</span>
                Stopps Plumbing
            </div>
            <div class="col-auto fs-12 d-none d-md-block">
                Copyright <?= date('Y') ?>
                <span class="text-secondary px-4">|</span>
                Stopps Plumbing
                <span class="text-secondary px-4">|</span>
                All Rights Reserved
            </div>
            <div class="col-auto">
                <a href="https://aiims.com.au/" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/images/logo/aiims.png" alt="Aiims">
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>