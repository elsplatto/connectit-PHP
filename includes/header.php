<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Connect.IT</title>

    <link rel="apple-touch-icon" href="apple-icons/connect-it-icon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icons/connect-it-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icons/connect-it-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icons/connect-it-icon-152x152.png" />

    <?php
    if (($_SERVER['SERVER_NAME'] == 'tobiasandtobias.com.au') || ($_SERVER['SERVER_NAME'] == 'www.tobiasandtobias.com.au')){
    ?>
    <script type="text/javascript" src="http://fast.fonts.net/jsapi/cdbf6725-aac1-49eb-be1c-2eb45556c06d.js"></script>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6681852/778262/css/fonts.css" />
    <?php
    }
    ?>

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/custom.modernizr.js"></script>
    <!--LEAVE BELOW <SCRIPT> BLOCK OUT OF PRODUCTION CODE - IT IS FOR TOBIAS AND TOBIAS ISSUE TRACKING ONLY-->
    <?php
    if (($_SERVER['SERVER_NAME'] == 'tobiasandtobias.com.au') || ($_SERVER['SERVER_NAME'] == 'www.tobiasandtobias.com.au')){
    ?>
    <script type='text/javascript'>
        (function (d, t) {
            var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
            bh.type = 'text/javascript';
            bh.src = '//www.bugherd.com/sidebarv2.js?apikey=t6bjnphom3ngeaatp7xjdq';
            s.parentNode.insertBefore(bh, s);
        })(document, 'script');
    </script>
    <?php
    }
    ?>
</head>
<body class="body-<?php echo $pageType; ?> off-canvas hide-extras">
    <section role="main">