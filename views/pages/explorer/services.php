<style>
    .services-explorer {
        background: white;
        padding: 50px 0;
    }

    .services-img {
        width: 70%;
        min-height: 100px;
        padding-top: 20px;
        /* border-radius:10px ; */
    }

    .services-explorer-h1 {
        color: #87C547;
        font-weight: bold;
        text-align: center;
        padding: 20px 0 !important;
    }

    .services-card-title {
        padding: 10px 0 !important;
        font-weight: bold;
        font-size: 17px;
        text-align: center;
    }

    .services-card-text {
        text-align: justify;
        font-size: 13px;

    }

    .services-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-services {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        box-shadow: 1px 1px 18px -15px black;
        background: #fcfcfc;
        transition: all 300ms;
        margin-bottom: 20px;
        min-height: 350px;
    }

    .card-services:hover {
        background: #ededed;
    }
</style>
<section class="services-explorer">
    <div class="container">
        <h1 class="services-explorer-h1">COMPLETE CLEANING SOLUTIONS</h1>
        <div class="row col-md-12">


            <?php
            $feature_services_sql = "select category_id,title,sub_title,featured_image from services where featured='1'";
            $feature_services_stmt = mysqli_query($connection, $feature_services_sql);
            while ($featured_result = mysqli_fetch_assoc($feature_services_stmt)) {

                $category_id = $featured_result['category_id'];
                $cat_sql = "select name from category where id='$category_id'";
                $cat_stmt = mysqli_query($connection, $cat_sql);
                $cat_result = mysqli_fetch_assoc($cat_stmt);
                $cat_name = $cat_result['name'];

                $category_name_link = str_replace(" ", "_", $cat_name);
                $services_link = str_replace(" ", "_", $featured_result['title']);

            ?>
                <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="card card-services">
                        <img src="<?= LINK; ?>public/images/services/<?= $featured_result['featured_image']; ?>" class="services-img" alt="services-img">
                        <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                            <h5 class="card-title services-card-title"><?= $featured_result['title']; ?></h5>
                            <p class="card-text services-card-text"><?= $featured_result['sub_title']; ?></p>
                            <a href="<?=LINK;?><?=$category_name_link;?>/<?=$services_link;?>">
                                <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>


           

        </div>
    </div>
</section>