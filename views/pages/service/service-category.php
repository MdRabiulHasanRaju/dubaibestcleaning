<style>
    .service-category-name {
        padding: 15px !Important;
        text-align: center;
        background: #6bbfed;
        color: white;
        font-weight: bold;
    }

    @media screen and (max-width:600px) {}
</style>
<section class="service-category">
    <div class="card">
        <h4 class="card-header service-category-name"><?= $category_name; ?></h4>
        <div class="card-body services-title">
            <?php
            $cat_sql = "select id,name from category where name='$category_name'";
            $cat_stmt = mysqli_query($connection, $cat_sql);
            $cat_result = mysqli_fetch_assoc($cat_stmt);
            $cat_id = $cat_result['id'];
            $cat_name = $cat_result['name'];

            $service_cat_sql = "select title from services where category_id='$cat_id'";
            $service_cat_stmt = mysqli_query($connection, $service_cat_sql);
            while ($service_cat_result = mysqli_fetch_assoc($service_cat_stmt)) {
                $category_name_link = str_replace(" ", "_", $cat_name);
                $services_link = str_replace(" ", "_", $service_cat_result['title']);
            ?>
                <a href="<?=LINK;?><?=$category_name_link;?>/<?=$services_link;?>">
                    <h5 style="cursor:pointer;font-weight: bold;color:<?= ($service_title == $service_cat_result['title'] ? 'orange' : 'black') ?>;padding:8px 0!important;"><?= $service_cat_result['title']; ?></h5>
                </a>
            <?php } ?>
        </div>
    </div>
</section>