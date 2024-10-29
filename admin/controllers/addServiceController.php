<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (
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


            $title = validate($_POST['title']);
            $service_category = validate($_POST['service_category']);
            $subTitle = $_POST['subTitle'];
            $serviceDetails = $_POST['serviceDetails'];


            if (isset($_FILES['featured_image'])) {
                if (!file_exists($_FILES["featured_image"]["tmp_name"])) {
                    $image_err = "Please Choose an Image";
                    echo $image_err;
                    exit();
                }
            }

            if (isset($_FILES['banner_image'])) {
                if (!file_exists($_FILES["banner_image"]["tmp_name"])) {
                    $image_err = "Please Choose an Image";
                    echo $image_err;
                    exit();
                }
            }
            
            $banner_image = $_FILES['banner_image']["tmp_name"];
            $banner_imageName = "$title-banner_image-" . rand(9999, 999999) . time() . '.png';
            $banner_imagedestination = "../../public/images/services/" . $banner_imageName;

            $featured_image = $_FILES['featured_image']["tmp_name"];
            $featured_imageName = "$title-featured_image-" . rand(9999, 999999) . time() . '.png';
            $featured_imagedestination = "../../public/images/services/" . $featured_imageName;

            $insert_sql = "INSERT INTO `services`(
                                            `category_id`,
                                            `title`,
                                            `sub_title`,
                                            `featured_image`,
                                            `banner_image`,
                                            `description`
                                            ) VALUES (?,?,?,?,?,?)";


            $insert_stmt = mysqli_prepare($connection, $insert_sql);
            mysqli_stmt_bind_param(
                $insert_stmt,
                "isssss",
                $param_category_id,
                $param_title,
                $param_sub_title,
                $param_featured_image,
                $param_banner_image,
                $param_description,
            );

            $param_category_id = $service_category;
            $param_title  = $title;
            $param_sub_title = $subTitle;
            $param_featured_image = $featured_imageName;
            $param_banner_image = $banner_imageName;
            $param_description = $serviceDetails;

            if (mysqli_stmt_execute($insert_stmt)) {
                move_uploaded_file($banner_image, $banner_imagedestination);
                move_uploaded_file($featured_image, $featured_imagedestination);

                if($_POST['service_category']=="1"){
					header("location: " . ADMIN_LINK."");
				}
				else if($_POST['service_category']=="2"){
					header("location: " . ADMIN_LINK."cleaning-services");
				}
				else if($_POST['service_category']=="3"){
					header("location: " . ADMIN_LINK."technical-services");
				}
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
