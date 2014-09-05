<?php 
  $base_url = "http://" . $_SERVER['SERVER_NAME']; 
  //$base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//$base_url = "http://localhost/GoldenLiving/GOL01433-Salude-Website-Design";
  //$base_url = "http://salude.redonkhost.com";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="<?php echo $metaDescription; ?>">
        <meta name="keywords" content="<?php echo $metaKeywords; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- =====================================================================
        CSS
        ========================================================================== -->
        <link rel="stylesheet" href="<?php echo $base_url;?>/css/main.css">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/styles/vs.min.css">

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo $base_url;?>/css/old-ie.css">
        <![endif]-->
        <!--[if gt IE 9]><!-->
            <link rel="stylesheet" href="<?php echo $base_url;?>/css/global.css">
        <!--<![endif]-->



        <!-- =====================================================================
        FONTS
        ========================================================================== -->
        
        <script type="text/javascript" src="//use.typekit.net/rcc8dgf.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <!-- =====================================================================
        JS
        ========================================================================== -->
        <script src="<?php echo $base_url;?>/js/vendor/modernizr-2.6.2.js"></script>
    </head>
    <body class="sg <?php echo $body_class; ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->