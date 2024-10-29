<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");
$root = $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning";
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (
            isset($_POST['service_id']) &&
            isset($_POST['prev_featured_image']) &&
            isset($_POST['prev_banner_image']) &&
            isset($_POST['service_category']) &&
            isset($_POST['title']) &&
            isset($_FILES['featured_image']) &&
            isset($_FILES['banner_image']) &&
            isset($_POST['subTitle']) &&
            isset($_POST['serviceDetails']) &&
            isset($_POST['submit'])
        ) {

            include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";

            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


            $service_id = validate($_POST['service_id']);


            $title = validate($_POST['title']);
            $service_category = validate($_POST['service_category']);
            $subTitle = $_POST['subTitle'];
            $serviceDetails = $_POST['serviceDetails'];

            $prev_featured_image = validate($_POST['prev_featured_image']);
            $prev_banner_image = validate($_POST['prev_banner_image']);


            //update featured image
            if (isset($_FILES['featured_image'])) {
                if (!file_exists($_FILES["featured_image"]["tmp_name"])) {
                    $featured_imageName = $_POST['prev_featured_image'];
                } else {
                    $featured_image = $_FILES['featured_image']["tmp_name"];
                    $featured_imageName = "$title-featured_image-" . rand(9999, 999999) . time() . '.png';
                    $featured_imagedestination = "../../public/images/services/" . $featured_imageName;


                    $prev_featured_image_Link = "$root/public/images/services/$prev_featured_image";
                    if (file_exists($prev_featured_image_Link)) {
                        $del_featured_Image = unlink($prev_featured_image_Link);
                        if (!$del_featured_Image) {
                            echo "featured Image not deleted!";
                            //exit();
                        }
                    } else {
                        echo "file not found! .$prev_featured_image_Link";
                        //exit;
                    }


                    move_uploaded_file($featured_image, $featured_imagedestination);
                }
            }


            //update banner image
            if (isset($_FILES['banner_image'])) {
                if (!file_exists($_FILES["banner_image"]["tmp_name"])) {
                    $banner_imageName = $_POST['prev_banner_image'];
                } else {
                    $banner_image = $_FILES['banner_image']["tmp_name"];
                    $banner_imageName = "$title-banner_image-" . rand(9999, 999999) . time() . '.png';
                    $banner_imagedestination = "../../public/images/services/" . $banner_imageName;


                    $prev_banner_image_Link = "$root/public/images/services/$prev_banner_image";
                    if (file_exists($prev_banner_image_Link)) {
                        $del_banner_Image = unlink($prev_banner_image_Link);
                        if (!$del_banner_Image) {
                            echo "banner Image not deleted!";
                            //exit();
                        }
                    } else {
                        echo "file not found! .$prev_banner_image_Link";
                        //exit;
                    }


                    move_uploaded_file($banner_image, $banner_imagedestination);
                }
            }


            $update_sql = "UPDATE `services` SET
            `category_id`=?,
            `title`=?,
            `sub_title`=?,
            `featured_image`=?,
            `banner_image`=?,
            `description`=?
            WHERE id=?";

            $update_stmt = mysqli_prepare($connection, $update_sql);
            mysqli_stmt_bind_param(
                $update_stmt,
                "isssssi",
                $param_category_id,
                $param_title,
                $param_sub_title,
                $param_featured_image,
                $param_banner_image,
                $param_description,
                $param_id
            );


            $param_category_id = $service_category;
            $param_title  = $title;
            $param_sub_title = $subTitle;
            $param_featured_image = $featured_imageName;
            $param_banner_image = $banner_imageName;
            $param_description = $serviceDetails;
            $param_id = $service_id;

            if (mysqli_stmt_execute($update_stmt)) {
                header("location: " . ADMIN_LINK . "edit-service/".$service_id."?action=updated");
            }
        } else {
            echo "Req data eror!";
        }
    } else {
        echo "Post method not working!";
    }
} else {
    header("location: " . ADMIN_LINK . "login");
    die();
}
