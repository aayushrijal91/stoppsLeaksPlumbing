<?php $cta = get_field('general_cta', 'options');
if (!empty($cta['heading'])) : ?>
    <section class="general_cta">
        <div class="container">
            <div class="general_cta_inner">
                <div class="fs-75 fw-600 lh-0_86"><?= $cta['heading'] ?></div>
                <div class="description"><?= $cta['description'] ?></div>
                <div class="row">
                    <div class="col-auto">
                        <a href="tel:<?= get_field('phone_number', 'option') ?>" class="btn bordered border-white rounded-pill text-white px-4 fw-600"><?= get_field('phone_number', 'option') ?></a>
                    </div>
                    <div class="col-auto">
                        <a href="tel:<?= get_field('mobile_number', 'option') ?>" class="btn bordered border-white rounded-pill text-white px-4 fw-600"><?= get_field('mobile_number', 'option') ?></a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $cta['button']['url'] ?>" target="<?= $cta['button']['target'] ?>" class="btn btn-secondary rounded-pill text-white px-4 fw-600">
                            <?= $cta['button']['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>