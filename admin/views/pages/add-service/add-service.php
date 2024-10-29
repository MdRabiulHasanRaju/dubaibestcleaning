<?php
$title = "Neat and Healthy Cleaning Admin - Add Service";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning";
$header_active = "Add Service";
?>
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
    include("../../inc/header.php");
?>
<style>
    .ck-editor__editable {
    min-height: 300px;
}
</style>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add Service</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add New Service</h5>
                    </div>
                    <div class="card-body add-course">
                        <form class="add-course-form" action="<?= ADMIN_LINK; ?>controllers/addServiceController.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="service_category">Service Category <span style="color:red;">*</span></label>
                                <select class="form-control" name="service_category" id="service_category">
                                    <option selected disabled> - Choose Service Category</option>
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
                                <input id="title" name="title" type="text" class="form-control" placeholder="Enter Title" required>
                            </div>

                            <div class="form-group">
                                <label for="subTitle">Sub Title <span style="color:red;">*</span></label>
                                <input id="subTitle" name="subTitle" type="text" class="form-control" placeholder="Enter subTitle" required>
                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image <span style="color:red;">*</span></label>
                                <input id="featured_image" name="featured_image" type="file" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="banner_image">Banner Image <span style="color:red;">*</span></label>
                                <input id="banner_image" name="banner_image" type="file" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="serviceDetails">Service Details <span style="color:red;">*</span></label>
                                <textarea class="form-control" name="serviceDetails" id="serviceDetails" placeholder="Enter Service Details"></textarea>
                            </div>

                            <div class="form-group">
                                <input value="Add Service" id="submit" class="form-control my-btn" name="submit" type="submit">
                            </div>

                        </form>
                    </div>
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
<script type="importmap">
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
</script>



</body>

</html>