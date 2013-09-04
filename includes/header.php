<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Connect.IT</title>

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/lt-ie9.css" />
    <![endif]-->
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/custom.modernizr.js"></script>
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