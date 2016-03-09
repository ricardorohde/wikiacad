<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="<?php echo URL::base(); ?>">
    <title><?php echo (isset($title) ? $title. ' - ' : '') . Kohana::$config->load('site.title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php echo Kohana::$config->load('site.description') ?>">
    <meta name="keywords" content="<?php echo Kohana::$config->load('site.keywords') ?>">
    <meta name="author" content="<?php echo Kohana::$config->load('site.author') ?>">

    <!-- Le styles -->
    <?php Template::compile_css() ?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="media/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="media/img/apple-touch-icon-57-precomposed.png">

    <script src="media/js/vendor/modernizr.js"></script>
    <script src="media/js/vendor/less.min.js"></script>

</head>
<body class="landing-page">

    <?php echo $header ?>
    <?php echo $content ?>
    <?php echo $footer ?>

    <?php Template::compile_js() ?>
    <?php if (isset($_GET['login'])) : ?>
      <script>$('#modalLogin').modal('show');</script>
    <?php endif; ?>

    <?php if(Kohana::$environment === Kohana::PRODUCTION): ?>

    <?php endif; ?>
</body>
</html>