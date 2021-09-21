<?php
/*
* The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d276a35b25.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <!--link rel="stylesheet" href="css/custom.css"-->
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

        <!--nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                </u>
              
            </div>
        </nav-->

        <section class="container-fluid">
            <div class="row position-relative d-flex justify-content-center align-items-center text-center">
                <img src="images/backgroundwood.jpg" alt="postresito" class="img-size header_img">
                <div class="position-absolute d-flex justify-content-center  feature-bg  bg-imga">
                    <p class="feature-text">FULL RESPONSIVE <br> PREMIUM SPA THEME <br> FOR WORDPRESS </p>
                </div>
            </div>
        </section>
    </header>