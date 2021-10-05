<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header flex__center">

        <div class="social__media__links flex__center">
            <a href="https://github.com/MarceliBil" target="_blank" rel="nofollow noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/github.svg">
            </a>

            <a href="https://github.com/MarceliBil" target="_blank" rel="nofollow noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg">
            </a>

            <a href="https://github.com/MarceliBil" target="_blank" rel="nofollow noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg">
            </a>
        </div>


        <nav class="nav">

            <a href="/" class="logo__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" class="logo__image">
            </a>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'menu_class' => 'top__bar'
            ));
            ?>

        </nav>

        <?php get_search_form(); ?>


    </header>

    <div class="hamburger__bar flex__center">

        <div class="hamburger">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>

    </div>