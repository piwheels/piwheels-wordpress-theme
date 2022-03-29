<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php pw_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation.min.css">
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
      <a class="logo" href="https://www.piwheels.org/"><div></div><h1>piwheels</h1></a>
      <?php get_template_part('nav'); ?>
    </header>

    <article>