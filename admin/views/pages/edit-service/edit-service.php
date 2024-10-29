<?php
$title = "Neat and Healthy Cleaning Admin - Edit Service";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning";
$header_active = "Edit Service";
?>
<?php 
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
    include("../../inc/header.php");
?>
<?php
if(isset($_GET['id'])){
    $service_id = $_GET['id'];
}
else{
    header("location: ".LINK."error/404");
}
?>
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Edit service</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit service's Information</h5>
                </div>
                <?php
                $sql = "select * from services where id=?";
                $stmt = mysqli_prepare($connection, $sql);
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_id = $service_id;
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 0) {
                        header("location: " . LINK . "error/404");
                        die();
                    } else {
                        mysqli_stmt_bind_result(
                            $stmt,
                            $id,
                            $category_id,
                            $title,
                            $sub_title,
                            $featured_image,
                            $banner_image,
                            $banner_video,
                            $description,
                            $featured,
                            $date
                        );
                        if (mysqli_stmt_fetch($stmt)) {?>
                <div class="card-body add-course">
                    <form class="add-course-form" action="<?= ADMIN_LINK; ?>controllers/editServiceController.php" method="post" enctype="multipart/form-data">

                    <input name="service_id" type="hidden" value="<?=$service_id;?>">

                    <div class="form-group">

                            <label for="service_category">Service Category <span style="color:red;">*</span></label>
                            <select class="form-control" name="service_category" id="service_category">
                                
                                <?php
                                $Sql = "SELECT * FROM `category` where id='$category_id'";
                                $Stmt = fetch_data($connection, $Sql);
                                mysqli_stmt_bind_result($Stmt, $id, $cat_name);
                                mysqli_stmt_fetch($Stmt);
                                ?>
                                <option value="<?= $id; ?>" selected><?= $cat_name; ?></option>
                                <?php
                                $Sql = "SELECT * FROM `category`";
                                $Stmt = fetch_data($connection, $Sql);
                                mysqli_stmt_bind_result($Stmt, $id, $cat_name);
                                while (mysqli_stmt_fetch($Stmt)) {
                                ?>
                                    <option value="<?= $id; ?>">
                                        <?= $cat_name; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-group">
                                <label for="title">Title <span style="color:red;">*</span></label>
                                <input value="<?=$title;?>" id="title" name="title" type="text" class="form-control" placeholder="Enter Title" required>
                        </div>

                        <div class="form-group">
                                <label for="subTitle">Sub Title <span style="color:red;">*</span></label>
                                <input value="<?=$sub_title;?>" id="subTitle" name="subTitle" type="text" class="form-control" placeholder="Enter subTitle" required>
                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image <span style="color:red;">*</span></label>
                                <img src="<?=IMAGE_LINK;?>services/<?=$featured_image;?>" alt="">
                                <input type="hidden" value="<?=$featured_image;?>" name="prev_featured_image">
                                <input id="featured_image" name="featured_image" type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="banner_image">Banner Image <span style="color:red;">*</span></label>
                                <img src="<?=IMAGE_LINK;?>services/<?=$banner_image;?>" alt="">
                                <input type="hidden" value="<?=$banner_image;?>" name="prev_banner_image">
                                <input id="banner_image" name="banner_image" type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="serviceDetails">Service Details <span style="color:red;">*</span></label>
                                <textarea style="height:400px" class="form-control" name="serviceDetails" id="serviceDetails" placeholder="Enter Service Details">
                                    <?=$description;?>
                                </textarea>
                            </div>

                        <div class="form-group">
                            <input value="Save Changes" id="submit" class="form-control my-btn" name="submit" type="submit">
                        </div>

                    </form>
                </div>
                
                <?php   }
                    }
                } ?>
            </div>
        </div>
    </div>

</div>

<?php
include("../../inc/footer.php");
} else {
	header("location: " . ADMIN_LINK . "login");
	die();
}
?>
<script src="<?= ADMIN_LINK; ?>public/js/app.js"></script>
<!-- <script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.2.0/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,
        List,
        Alignment,
        AutoLink,
        Link,
        Heading
    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#serviceDetails' ), {
            plugins: [ Essentials, Bold, Italic, Font, Paragraph,List,Alignment,Link, AutoLink,Heading],
            toolbar: [
                'undo', 'redo','heading', '|', 'bold', 'italic', '|', 'bulletedList','numberedList','alignment',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor','link'
            ]
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
</script> -->
</body>

</html>