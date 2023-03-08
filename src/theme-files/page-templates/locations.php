<?php
/*
 * Template Name: Locations
 * The Locations Page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    foreach (range('A', 'Z') as $char) {
        $htm3[$char] = '';

        while ($the_query->have_posts()) : $the_query->the_post();
            if (strpos(get_the_title(), $char) === 0) {
                $liclass = str_replace(' ', '-', strtolower(get_the_title()));
                $htm3[$char] .= '<li class="fw-300 ' . $liclass . '"><a href='. get_the_permalink() . '>' . get_the_title() . '</a></li>';
            }
        endwhile;
    }
}
?>

<div class="locations">
    <section class="section_1 bg-primary text-white pt-6 pb-4 py-md-7">
        <div class="container">
            <div class="fs-60 fw-600 lh-1 pb-4 pb-xl-5">See what locations we service</div>

            <section class="areas">
                <div class="container">
                    <?php  // The Loop
                    if ($the_query->have_posts()) {
                        $count = 0;
                    ?>
                        <ul class="areasWrapper">
                            <li class="border"></li>
                            <li class="border"></li>
                            <li class="border"></li>
                        </ul>
                        <ul class="areasWrapper">
                            <?php foreach (range('A', 'Z') as $char) {
                                if (isset($htm3[$char]) && $htm3[$char] != '') {
                            ?>
                                    <li class="areaCharacterGrouping char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
                                        <div class="areaCharacter fs-20 fw-600"><?= $char ?></div>
                                        <ul class="arealist">
                                            <?php echo $htm3[$char]; ?>
                                        </ul>
                                        <div class="mbottom "></div>
                                    </li>
                            <?php $count++;
                                }
                            } ?>
                        </ul>
                    <?php }
                    wp_reset_postdata(); ?>

                </div>
            </section>

        </div>
    </section>

    <?php get_template_part('parts/section', 'servicesListing') ?>
</div>

<?php get_footer(); ?>