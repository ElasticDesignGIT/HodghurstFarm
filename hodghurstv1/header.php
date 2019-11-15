<?php
/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */

?>

<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->        
<head>
<meta charset="utf-8">
<title>Hodghurst Farm - Shropshire</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
<meta name="description" content="Shropshire Hills traditional free range meat farm shop. We produce, process, pack and even deliver.">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- <link rel='stylesheet' id='photoswipe-css'  href='<?php bloginfo('template_directory'); ?>/assets/css/photoswipe/photoswipe.css?ver=3.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='h<?php bloginfo('template_directory'); ?>/assets/css/photoswipe/default-skin/default-skin.css?ver=3.2.1' type='text/css' media='all' /> -->
<?php wp_head();?>
</head>

<body>

<header class="container">  
    <div class="brown-bar">
        <ul class="contact-list">
            <li>Email: <a href="mailto:info@hodghurstfarm.co.uk">info@hodghurstfarm.co.uk</a></li>
            <li>Tel: 01694 771224</li>
        </ul>
    </div>

    <div class="header-area wrapper-100">
        <div class="white-bar">
            <div class="logo">
                <a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Hodghurst Farm Logo"/></a>
            </div>

            <!-- <p class="h1">Hodghurst Farm</p> -->
            <p class="h3" style="margin-top:20px;">Shropshire hills home of miniature Hereford cattle,<br/>Shropshire and blue faced Leicester sheep</p>
        </div>
        <div class="brown-bar">
            <nav class="mainMenu">
                <label for="toggleMenu" class="menuTitle" onclick="">Menu</label>
                <input type="checkbox" id="toggleMenu" />
               	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' )); ?>
            </nav>
        </div>
    </div>
</header>

<div id="main-content"><!-- You can set a class for the body tag on individual pages -->