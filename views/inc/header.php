<?php
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (60)));
header("Cache-Control: no-cache,must-revalidate");
header("Pragma: no-cache");
header_remove('x-powered-by');

if (!isset($connection)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/lib/Database.php";
}
if (!isset($baseurl)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/utility/Baseurl.php";
  $baseurl = new Baseurl;
  define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
}
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/utility/Format.php";
$format = new Format;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="creator" content="@Md Rabiul Hasan">
  <meta name="description" content="<?php if (!$meta_description) {
                                      header("location:" . LINK . "error/404?metaDataError");
                                    } else {
                                      echo $meta_description;
                                    }; ?>"> 

  <meta name="keywords" content="<?= $meta_keywords; ?>">
  <meta name="title" content="<?= $title; ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="creator" content="@Md Rabiul Hasan">
  <meta name="robots" content="index, follow">

  <meta property="og:site_name" content="NeatandHealthyCleaning - Dubai's Finest Deep Cleaning Services Provider">
  <meta property="og:title" content="Dubai's Top Cleaning Services Provider: Deep Cleaning Services" />
  <meta property="og:image" content="<?=LINK;?>public/images/favicon/apple-touch-icon.png" />
  <meta data-n-head="ssr" data-hid="og:image:type" property="og:image:type" content="image/png">
  <meta property="og:image:alt" content="post-construction-cleaning-services">
  <meta property="og:type" content="Website" />
  <meta property="og:description" content="Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai. Call now +971 56 459 8416" />
  <meta property="og:url" content="https://NeatandHealthyCleaning.com" />

  <link rel="canonical" href="https://neatandhealthycleaning.com/" />


  <!-- <meta name="dc.title" content="Dubai's Finest Deep Cleaning Services Provider - NeatandHealthyCleaning">
  <meta name="dc.description" content="Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai.">
  <meta name="dc.relation" content="https://NeatandHealthyCleaning.com/">
  <meta name="dc.source" content="https://NeatandHealthyCleaning.com/">
  <meta name="dc.language" content="en_US">
  <meta name="description" content="Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai.">


  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@NeatandHealthyCleaning1">
  <meta name="twitter:creator" content="@NeatandHealthyCleaning1">
  <meta name="twitter:title" content="Dubai's Top Cleaning Services Provider: Deep Cleaning Services">
  <meta name="twitter:description" content="Are you trying to find a cleaning service in Dubai? Deep cleaning for home and business spaces is what we do best in Dubai. Call now +971 56 459 8416">
  <meta name="twitter:image" content="<?=LINK;?>public/images/favicon/apple-touch-icon.png"> -->

  <title><?= $title; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/8a0fad0de8.js" crossorigin="anonymous"></script> -->



  <link rel="stylesheet" href="<?= LINK; ?>public/fontAwesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= LINK; ?>public/fontAwesome/css/all.min.css">

  <link rel="stylesheet" href="<?= LINK; ?>public/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="<?= LINK; ?>public/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= LINK; ?>public/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= LINK; ?>public/WOW-master/css/libs/animate.css" />




  <link rel="stylesheet" href="<?= LINK; ?>views/pages/explorer/slider/swiper.css">
  <script src="<?= LINK; ?>views/pages/explorer/slider/swiper.js"></script>

  <link rel="stylesheet" href="<?= LINK; ?>style.css">
  <link rel="stylesheet" href="<?= LINK; ?>responsive.css">

  <link rel="apple-touch-icon" sizes="180x180" href="<?=LINK;?>public/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=LINK;?>public/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=LINK;?>public/images/favicon/favicon-16x16.png">
  <!-- <link rel="manifest" href="<?=LINK;?>public/images/site.webmanifest"> -->
  <link rel="mask-icon" href="<?=LINK;?>public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">

</head>

<body>
  <?php include "topbar.php"; ?>