<?php ob_start();
session_start();

if ($_GET['service_title'] || $_GET['category_name']) {
    $category_name = str_replace("_", " ", $_GET['category_name']);
    $service_title = str_replace("_", " ", $_GET['service_title']);

    $title = "$service_title - NeatandHealthyCleaning";
    $meta_description = "$title - Neat and Healthy Cleaning provides the top-notch villa deep cleaning services all across Dubai. Our clients are 100% satisfied with our work. Call us now +971 56 459 8416";
    $meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning, Neat and Healthy,Neat Healthy Cleaning, cleaning service in dubai, NeatHealthyCleaning, NeatCleaning,best deep cleaning services in dubai, Top 10 cleaning comapany in dubai, deep cleaning services dubai,cheap cleaning services dubai, cleaningdubai, best dubai cleaning, best dubai cleaning service, best dubai cleaning, dubai cleaning service, cleaning service";


    include("../../inc/header.php");
    include("../../inc/navbar.php");
    require_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/lib/Database.php";

    $service_sql = "select * from services where title='$service_title'";
    $service_stmt = mysqli_query($connection, $service_sql);
    if (mysqli_num_rows($service_stmt) == 1) {
        $service_result = mysqli_fetch_assoc($service_stmt);
    } else {
        header("location:" . LINK . "404");
        die();
    }
} else {
    header("location:" . LINK . "404");
    die();
}
$header_active = "Services";
?>

<style>
    .service-description h2 {
        color: #54595F;
        font-weight: bold;
    }

    .service-description p {
        color: #888;
        opacity: 0.9;
        padding: 20px 0 !important;
    }

    .service-description ul {
        color: #888;
        opacity: 0.9;
        padding: 20px 0 !important;
    }

    .service-description ul li {
        color: #54595F;
        padding-bottom: 10px !important;
        list-style: inside;
    }

    .services-image-div {
        padding: 20px 0 !important;
    }
</style>
<section class="service-details">

    <?php include "service-banner.php"; ?>

    <div style="padding:40px 0" class="container">
        <div class="row col-md-12">
            <div class="col-md-4">
                <?php include "service-category.php"; ?>
                <br>
                <?php include "service-contact.php"; ?>
            </div>
            <div class="col-md-8 service-description">
                <?=$service_result['description'];?>
            </div>
        </div>
    </div>
</section>

<?php
include "../../inc/footer.php";
?>
<script src="<?= LINK; ?>public/jquery/jquery.js"></script>
<script src="<?= LINK; ?>public/owl/owl.carousel.min.js"></script>
<!-- <script src="<? //= LINK; 
                    ?>public/bootstrap/bootstrap.min.js"></script> -->
<script src="<?= LINK; ?>public/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= LINK; ?>public/WOW-master/dist/wow.min.js"></script>
<script src="<?= LINK; ?>public/bootstrap/popper.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="<?= LINK; ?>main.js"></script>
</body>

</html>