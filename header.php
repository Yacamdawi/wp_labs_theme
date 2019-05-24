<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo bloginfo('title'); ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src=<?php echo get_theme_mod('logo-menu-image'); ?> alt="">
            <h2>Loading.....</h2>
        </div>
    </div>


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="<?php echo get_theme_mod('logo-menu-image', __("Cette image s'affiche en haut à gauche du menu")); ?>" alt="" width="150px">
            <!-- "/img/logo.png"; -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
    </header>
    <!-- Header section end -->

    <!-- FIN HEADER
    ============================================ -->