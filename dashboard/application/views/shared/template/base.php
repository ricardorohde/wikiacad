<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <base href="<?php echo URL::base(); ?>">
    <title><?php echo (isset($title) ? $title. ' - ' : '') . Kohana::$config->load('site.title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php echo Kohana::$config->load('site.description') ?>">
    <meta name="keywords" content="<?php echo Kohana::$config->load('site.keywords') ?>">
    <meta name="author" content="<?php echo Kohana::$config->load('site.author') ?>">

    <!-- Le styles -->
    <?php Template::compile_css() ?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="media/img/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="media/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="media/img/apple-touch-icon-57-precomposed.png">

</head>
<body class="hold-transition skin-yellow-light fixed sidebar-mini" >

    <?php echo $header ?>
    <?php echo $content ?>
    <?php echo $footer ?>

    <?php Template::compile_js() ?>

    <?php if(Kohana::$environment === Kohana::PRODUCTION): ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        <?php echo Kohana::$config->load('site.GA') ?>
        ga('send', 'pageview');
    </script>
    <?php endif; ?>
</body>
</html>
