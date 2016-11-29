<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="viewport" content="width=device-width">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url()  . '/assets/images/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo url()  . '/assets/images/favicon-96x96.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url()  . '/assets/images/favicon-16x16.png' ?>">

    <!-- fontawesome icons plugin /site/plugins/icons -->
    <!-- <script src="https://use.fontawesome.com/62059e4801.js"></script> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <?php echo css('assets/css/main.css') ?>
    <?php echo css('assets/css/hljs.css') ?>
    <?php echo css('assets/css/pattern-library.css') ?>
    <?php echo css('assets/css/comments.css') ?>
    <?php echo css('assets/css/search.css') ?>

  </head>
  <body>
  <div class="container">

  <?php snippet('sidebar') ?>

  <main>
