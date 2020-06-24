
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head()?>
        <title><?php
         if(is_home()){
            echo get_bloginfo('name');
         }else if(is_single()){
            echo the_title();
         }else{
            echo get_bloginfo('name');
         }
         ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <script src="https://kit.fontawesome.com/9fa3e1d5e3.js" crossorigin="anonymous"></script>

            
    </head>
    <body class="contenedor-principal">
        <!-- navegacion -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="logo mb-2 mt-2">
                    <img width="100" src="<?php bloginfo('template_url')?>/images/screenshot.png" alt="">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavDropdown">

                    <?php wp_nav_menu( array(
                        'container' => false,
                        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>',
                        'theme_location' => 'menu-top'
                    )); ?>

                </div>
            </nav>
        </header>
    <!-- navegacion -->