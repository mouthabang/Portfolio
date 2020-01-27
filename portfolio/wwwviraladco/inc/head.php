<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="locale" content="EN">
        <meta name="language" content="ENGLISH">
        <meta name="content-language" content="EN">



        <!-- Indexing -->
        <meta name="robots" content="<?php
        if ($strPageRobot != '')
            {
            echo $strPageRobot;
            }
        else
            {
            echo ENV_ROBOT;
            }
        ?>">

        <title><?php
            if ($strPageTitle != '')
                {
                echo $strPageTitle;
                }
            else
                {
                echo ENV_TITLE;
                }
            ?></title>
        <meta name="title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>">
        <meta name="description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>">
        <meta name="keywords" content="<?php
        if ($strPageKeywords != '')
            {
            echo $strPageKeywords;
            }
        else
            {
            echo ENV_KEYWORDS;
            }
        ?>">

        <link rel="canonical" href="<?php echo ENV_WEBSITE; ?>">


        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/animate.css">


        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/css/settings.css" media="screen" />

        <!-- StyleSheets -->
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/responsive.css">

        <!-- FontsOnline -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

        <!-- COLORS -->
        <!--<link rel="stylesheet" id="color" href="<?php echo ENV_ROOTURL; ?>assets/css/default.css">-->

        <!-- JavaScripts -->
        <script src="<?php echo ENV_ROOTURL; ?>assets/js/modernizr.js"></script>


        
        
        
        
        
        
        <?php
        if ($strPageSlider == TRUE)
            {
            ?>


        <?php }; ?>
        <meta property="fb:app_id" content="126845677382791"/>
        <meta property="og:title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo curPageURL(); ?>"/>
        <meta property="og:description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>" />
        <meta property="og:image" content="<?php
        if ($strPageImg != '')
            {
            echo $strPageImg;
            }
        else
            {
            echo ENV_ROOTURL . 'assets/img/logo.png';
            }
        ?>"/>
        <meta property="article:publisher" content="https://www.facebook.com/eonmedia/"/>

        <!-- SEO Twitter  -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="<?php
        if ($strPageDescription != '')
            {
            echo $strPageDescription;
            }
        else
            {
            echo ENV_DESCRIPTION;
            }
        ?>">
        <meta name="twitter:site" content="@viraladco">
        <meta name="twitter:creator" content="@viraladco">
        <meta name="twitter:title" content="<?php
        if ($strPageTitle != '')
            {
            echo $strPageTitle;
            }
        else
            {
            echo ENV_TITLE;
            }
        ?>">
        <meta name="twitter:image" content="<?php
        if ($strPageImg != '')
            {
            echo $strPageImg;
            }
        else
            {
            echo ENV_ROOTURL . 'assets/img/logo.png';
            }
        ?>" />

        <meta name="msvalidate.01" content=""/>
        <meta name="google-site-verification" content="" />
        <link rel="author" href="https://plus.google.com/102998473476836489650">

        <link rel="shortcut icon" href="/favicon.ico">
    </head>
