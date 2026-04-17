<?php savv_scripts(); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= ROOT_PATH ?>/assets/js/main.js"></script>

<?php if (isset($extraJS)) echo $extraJS; ?>