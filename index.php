<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body <?php body_class(); ?>>

    <div id="altf_header">
        <!--header-top-->
        <div class="altf_header_top">
            <div class="container ">
                <div class="row">
                    <div class="col email d-flex align-items-center">
                        <i class="fas fa-envelope text-white"></i>
                        <span class="ms-2 text-white">shakirahmed@gmail.com</span>
                    </div>
                    <div class="col altf-social-bar d-flex justify-content-end align-items-center">
                        <a href="https://www.facebook.com/" target="_blank" class="text-white me-3 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-white me-3 transition"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" class="text-white transition"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--header-nav-->
        <div class="altf_header_nav">
            <div class="container">
                <div class="row <?php echo get_theme_mod('altf_menu_set') ?>">
                    <div class="col-md-3">
                        <img src="<?php echo get_theme_mod('altf_logo', get_template_directory_uri() . '/img/altf_logo.png'); ?>" class="altf_logo">
                    </div>
                    <div class="col-md-9 altf_nav_bar d-flex justify-content-end">
                        <?php wp_nav_menu(array('theme_location' => 'altf_main_menu', 'menu_id' => 'nav')); ?>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>