<?php ob_start();
$title= "Best Deep Cleaning Services Company in Dubai - NeatandHealthyCleaning";
$meta_description = "$title - Neat and Healthy Cleaning provides the top-notch villa deep cleaning services all across Dubai. Our clients are 100% satisfied with our work. Call us now +971 56 459 8416";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning, Neat and Healthy,Neat Healthy Cleaning, cleaning service in dubai, NeatHealthyCleaning, NeatCleaning,best deep cleaning services in dubai, Top 10 cleaning comapany in dubai, deep cleaning services dubai,cheap cleaning services dubai, cleaningdubai, best dubai cleaning, best dubai cleaning service, best dubai cleaning, dubai cleaning service, cleaning service";
$header_active = "Home";
?>
<?php
include "views/inc/header.php";
include "views/inc/navbar.php";
?>

<?php
include "views/pages/explorer/banner.php";
include "views/pages/explorer/about.php";
include "views/pages/explorer/services.php";
include "views/pages/explorer/services-category.php";
include "views/pages/explorer/review.php";
// include "views/pages/explorer/google-review.php";
include "views/pages/explorer/services-category-2.php";
include "views/pages/explorer/faqs.php";
?>

<?php
include "views/inc/footer.php";
ob_end_flush();
?>
<script src="<?= LINK; ?>public/owl/owl.carousel.min.js"></script>
<!-- <script src="<?//= LINK; ?>public/bootstrap/bootstrap.min.js"></script> -->
<script src="<?= LINK; ?>public/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= LINK; ?>public/WOW-master/dist/wow.min.js"></script>
<script src="<?= LINK; ?>public/bootstrap/popper.min.js"></script>
<script>
  new WOW().init();
</script>
<script src="<?=LINK;?>main.js"></script>
</body>

</html>