<footer class="bg-dark py-4 text-light-grey">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto fs-12">
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