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

    @media screen and (max-width:600px) {
        .service-details-row {
            flex-direction: column-reverse;
        }
    }
</style>
<section class="service-details">

    <?php include "service-banner.php"; ?>

    <div style="padding:40px 0" class="container">
        <div class="row col-md-12 service-details-row">
            <div class="col-md-4">
                <?php include "service-category.php"; ?>
                <br>
                <?php include "service-contact.php"; ?>
            </div>
            <div class="col-md-8 service-description">





                +971 56 459 8416




                <h2>EXPERT GROUT RESTORATION SERVICES IN DUBAI CAN RESTORE THE BEAUTY OF YOUR TILES.</h2>
                <p>Is the grout missing, cracked, or discolored, making your once-vibrant tilework appear drab and dull? Do not give up! We at <b>NeatandHealthyCleaning</b> provide thorough grout restoration services in Dubai that will restore your tiles to their original splendor.</p>

                <p>Our skilled professionals revitalize your grout using state-of-the-art methods and premium products, leaving it pristine, sealed, and safeguarded. We have the skills and ability to tackle any restoration project, no matter how big or small, whether you have natural stone, porcelain, or ceramic tiles.</p>


                <div class="services-image-div" style="display: grid;place-items:Center;">
                    <img class="services-watermark" src="/public/images/logo-h.png" alt="logo-watermark">
                    <img class="services-image" src="/public/images/services/GROUT RESTORATION.png" alt="GROUT RESTORATION.png-Image">
                </div>

                <h2>THIS IS WHAT TO EXPECT:</h2>
                <ul>
                    <li><b>Deep cleaning and stain removal: </b>To leave your grout immaculate, our skilled specialists employ specialized tools and cleaning agents to get rid of tough stains as well as embedded dirt and grime.</li>
                    <li><b>Restoration of grout color: </b>Over time, grout may fade and lose its color. To give your grout a new, contemporary appearance, we can either restore its original color or even paint it a different hue.</li>
                    <li><b>Grout repair & sealing: </b>To stop additional damage and maintain the finest possible appearance for your tiles, we may fix cracked, chipped, or missing grout. We can also apply a sealer to shield your grout from wear and future stains.</li>
                </ul>

                <h2>GROUT RESTORATION BENEFITS:</h2>

                <ul>
                    <li><b>Cost-effective: </b>Compared to replacing your tiles, grout restoration is far less expensive.</li>
                    <li><b>Time-saving: </b>You can resume walking on your surfaces in a matter of hours thanks to the rapid and effective procedure.</li>
                    <li><b>Better hygiene: </b>Your family will live in a healthier atmosphere since clean grout stops the formation of mold and mildew.</li>
                    <li><b>Improved appearance: </b>Restored grout gives your entire surface a modern, clean, and fresh appearance.</li>
                </ul>

                <p>Whether you have a huge commercial space or a little bathroom floor, our grout restoration services in Dubai can help you get beautiful results.</p>
































            </div>
        </div>
    </div>
</section>

<?php
include "../explorer/google-review.php";
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