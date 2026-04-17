<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle ?? 'Savadub Limited'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Savadub Limited'; ?>" />

    <?php savv_head(); ?>

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://savadub.com/<?php echo trim($_SERVER['REQUEST_URI'], '/'); ?>" />
    <meta property="og:title" content="<?php echo $pageTitle ?? 'Savadub Limited'; ?>" />
    <meta property="og:description" content="<?php echo $pageDescription ?? 'Savadub Limited'; ?>" />
    <meta property="og:image" content="<?= ROOT_PATH ?>/assets/images/og-main.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $pageTitle ?? 'Savadub Limited'; ?>" />
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'Savadub Limited'; ?>" />
    <meta name="twitter:image" content="<?= ROOT_PATH ?>/assets/images/og-main.jpg" />

    <link rel="icon" type="image/png" href="<?= ROOT_PATH ?>/assets/images/icons/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= ROOT_PATH ?>/assets/css/main.css">

    <?php if (isset($extraCSS)) echo $extraCSS; ?>
</head>