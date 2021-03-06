<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php pw_title(); ?></title>
    <link rel="stylesheet" href="https://www.piwheels.org/foundation-float.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" href="https://www.piwheels.org/styles.css" />
    <link href="<?php timestamped_stylesheet(); ?>" rel="stylesheet" />
    <link rel="shortcut icon" href="https://www.piwheels.org/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.piwheels.org/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="row">
        <div class="title-bar" data-responsive-toggle="nav-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle="nav-menu"></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="nav-menu">
          <div class="top-bar-left">
            <ul class="menu">
              <li class="menu-text">
                <a href="https://www.piwheels.org/">
                  <div class="logo"></div>
                  <h1>piwheels</h1>
                </a>
              </li>
            </ul>
          </div>
		  <?php get_template_part('nav'); ?>
        </div>
      </div>
    </header>

    <div>
