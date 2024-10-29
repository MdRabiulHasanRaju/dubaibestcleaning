<?php
$title = "Neat and Healthy Cleaning Admin - Featured Services";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning";
$header_active = "Featured Services";
?>
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
    include("../../inc/header.php");
?>
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Featured Services</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Services List</h5>
                </div>
                <div class="card-body all-order">
                <table class="all-order-table">
                        <tbody>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Service Name</th>
                                <th>Featured</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $serviceSql = "select id,
                                    category_id,
                                    title,
                                    sub_title,
                                    featured_image,
                                    banner_image,
                                    banner_video,
                                    description,
                                    featured,
                                    date from `services` where featured='1' order by id desc";
                            $serviceStmt = fetch_data($connection, $serviceSql);
                            if (mysqli_stmt_num_rows($serviceStmt) == 0) {
                                $noservice = "Empty service";
                            } else {
                                mysqli_stmt_bind_result(
                                    $serviceStmt,
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
                                $i = 1;
                                while (mysqli_stmt_fetch($serviceStmt)) {
                                    $service_id = $id;
                                    $stdn_sql = "select name from category where id='$category_id'";
                                    $stdn_stmt = fetch_data($connection, $stdn_sql);
                                    mysqli_stmt_bind_result($stdn_stmt, $stdn_name);
                                    mysqli_stmt_fetch($stdn_stmt);
                                    $category_name_link = str_replace(" ", "_", $stdn_name);
                                    $services_link = str_replace(" ", "_", $title);
                                    ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <img style="width:60px;border-radius:10px;" src="<?= IMAGE_LINK; ?>services/<?= $featured_image; ?>" alt="">
                                        <td><?= $title; ?></td>
                                        <td>
                                            <form action="<?= ADMIN_LINK; ?>controllers/featuredChangeController.php" method="post">
                                                <input name="refid" type="hidden" value="<?= $id; ?>">
                                                <select <?= ($featured == 0) ? "style='background:red;color:white;'" : "style='background:green;color:white;'"; ?> name="featured" id="featured">
                                                    <option selected value="<?= ($featured == 0) ? 0 : 1; ?>">
                                                        <?php if ($featured == 0) { ?>
                                                            No
                                                        <?php } elseif ($featured == 1) { ?>
                                                            Yes
                                                        <?php } ?>
                                                    </option>

                                                    <option value="<?= ($featured == 0) ? 1 : 0; ?>">
                                                        <?php if ($featured == 0) { ?>
                                                            Yes
                                                        <?php } elseif ($featured == 1) { ?>
                                                            No
                                                        <?php } ?>
                                                    </option>

                                                </select>
                                                <input type="submit" name="" id="changeFeatured" value="Update">
                                            </form>
                                        </td>
                                        <td>
                                            <div class="actionBtn">

                                                <a target="_blank" style="padding:7px;font-size:12px;" class="my-btn green" href="<?= LINK; ?><?= $category_name_link; ?>/<?= $services_link; ?>">
                                                    View
                                                </a>

                                                <a style="padding:7px;font-size:12px;" class="my-btn black" href="<?= ADMIN_LINK; ?>edit-service/<?= $service_id; ?>">Edit</a>

                                                <form method="post" action="<?= ADMIN_LINK; ?>controllers/deleteServiceController.php?action=cleaning">
                                                    <input type="hidden" name="id" value="<?= $service_id; ?>">
                                                    <input type="hidden" name="prev_featured_image" value="<?= $featured_image; ?>">
                                                    <input type="hidden" name="prev_banner_image" value="<?= $banner_image; ?>">
                                                    <input name="submit" id="courseDeleteBtn" class="form-control my-btn" style="padding:7px;font-size:12px;" type="submit" value="Delete">
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                            <?php $i++;
                                }
                            }
                            ?>


                        </tbody>
                    </table>
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

</body>

</html>