<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); ?>
   
</head>

<body <?php body_class(); ?>>

<header class="sticky-top">

    <div class="container">
        <div class="row">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation',
                )

            ); ?>
        </div>    
    </div>

</header>

    