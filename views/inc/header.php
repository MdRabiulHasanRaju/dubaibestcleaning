<?php
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60)));
header("Cache-Control: no-cache,must-revalidate");
header("Pragma: no-cache");

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="creator" content="@Md Rabiul Hasan">
  <meta name="description" content="<?php if (!$meta_description) {
                                      header("location:" . LINK . "error/404?metaDataError");
                                    } else {
                                      echo $meta_description;
                                    }; ?>">
  <meta name="keywords" content="<?= $meta_keywords; ?>">
  <meta name="title" content="<?=$title;?>">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8a0fad0de8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= LINK; ?>views/pages/explorer/slider/swiper.css">
  <script src="<?= LINK; ?>views/pages/explorer/slider/swiper.js"></script>

  <link rel="stylesheet" href="<?= LINK; ?>style.css">
  <link rel="stylesheet" href="<?= LINK; ?>responsive.css">
  <link rel="icon" type="image/x-icon" href="<?= LINK; ?>public/images/favicon/favicon-32x32.png">

</head>

<body>
<?php include "topbar.php";?>

  