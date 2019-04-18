<!DOCTYPE html>
<html>

<head>
  <title>Amir Aty | Decoration</title>
  <meta charset="utf-8">
  <meta name="title" content="Amir Aty">
  <meta name="description" content="Amir Aty Decoration">
<meta name="keywords" content="Amir Aty Decoration">
<meta name="author" content="Inetwork-Me">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#de751f">


</head>

<body>
  <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky navbar_theme_midnight; bottom: #transparent-sticky-navbar">
    <nav class="uk-position-top" uk-navbar style="position: relative; z-index: 980; padding:10px 50px;">
      <div class="uk-navbar-left">
        <a href="<?php echo site_url(); ?>"> <img width="100" src="<?php the_field('logo', 'option'); ?>" alt=""></a>
      </div>
      <div class="uk-navbar-right">
        <?php wp_nav_menu([
        'theme_location'  => '',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => '',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav">%3$s</ul>',
          'depth'           => 0,
          'walker'          => new Bootstrap_Walker_Menu_Nav(),

        ]); ?>

        <ul class="uk-navbar-nav">


        <li><a href="#offcanvas-slide" class="uk-hidden@m nav__toggle_color_white" uk-toggle>
            <span class="" uk-navbar-toggle-icon>

            </span>
          </a>
        </li>
          </ul>
      </div>
    </nav>
  </div>


  <!-- Start uk-offcanvas Mobile Nav  -->
  <div id="offcanvas-slide" uk-offcanvas>

    <!-- START .uk-offcanvas-bar -->
    <div class="uk-offcanvas-bar">

      <?php wp_nav_menu([
      'theme_location'  => '',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => '',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s uk-nav uk-nav-default" style="margin-top: 10em;">%3$s</ul>',
        'depth'           => 0,
        'walker'          => new Bootstrap_Walker_Menu_Mobile(),

      ]); ?>



    </div> <!-- END .uk-offcanvas-->
  </div><!-- END uk-offcanvas Mobile Nav  -->
