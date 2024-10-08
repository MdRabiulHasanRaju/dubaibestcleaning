<?php
$title= "Dubai Best Cleaning";
$meta_description = "$title - Dubai Best Cleaning provides the top-notch villa deep cleaning services all across Dubai. Our clients are 100% satisfied with our work. Call us now +971 4 568 9636";
$meta_keywords = "$title, dubai clean, dubai best clean, dubai best cleaning, cleaning service in dubai, dubaibestcleaning, dubaicleaning, cleaningdubai, bestdubaicleaning, best dubai cleaning service, best dubai cleaning, dubai cleaning service, cleaning service";
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
include "views/pages/explorer/google-review.php";
include "views/pages/explorer/services-category-2.php";
include "views/pages/explorer/faqs.php";
include "views/pages/explorer/contact.php";
include "views/pages/explorer/services-category-bottom.php";
?>

<?php
include "views/inc/footer.php";
?>
<script src="<?= LINK; ?>public/jquery/jquery.js"></script>
<script src="<?= LINK; ?>public/owl/owl.carousel.min.js"></script>
<!-- <script src="<?//= LINK; ?>public/bootstrap/bootstrap.min.js"></script> -->
<script src="<?= LINK; ?>public/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= LINK; ?>public/WOW-master/dist/wow.min.js"></script>
<script src="<?= LINK; ?>public/bootstrap/popper.min.js"></script>
<script>
  new WOW().init();
</script>
<script src="main.js"></script>
</body>

</html>