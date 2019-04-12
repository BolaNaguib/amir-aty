<!DOCTYPE html>
<html>

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>

<body>
  <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky navbar_theme_midnight; bottom: #transparent-sticky-navbar">
    <nav class="uk-position-top" uk-navbar style="position: relative; z-index: 980; padding:10px 50px;">
      <div class="uk-navbar-left">
        <a href="#"> <img width="100" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpeg" alt=""></a>
      </div>
      <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
          <li class=""><a class="navbar__link  uk-button-text" href="#">Active</a></li>
          <li>
            <a class="navbar__link uk-button-text" href="#">Parent</a>

          </li>
          <li><a class="navbar__link uk-button-text" href="#">Item</a></li>
        </ul>

      </div>
    </nav>
  </div>
