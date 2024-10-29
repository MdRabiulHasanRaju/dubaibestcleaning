<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/utility/Baseurl.php";
$baseurl = new Baseurl;
define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
$root = $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning";
session_start();

// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (
        isset($_FILES["profile_picture"]) &&
        isset($_POST["name"]) &&
        isset($_POST["star-radio"]) &&
        isset($_POST["comment"])
    ) {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/lib/Database.php";
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $starRadio = validate($_POST['star-radio']);
        $comment = $_POST['comment'];
        $profile_picture = $_FILES['profile_picture'];

        if (isset($_FILES['profile_picture'])) {
            if (!file_exists($_FILES["profile_picture"]["tmp_name"])) {
                $image_err = "Please Choose an Image";
                echo $image_err;
                exit();
            }
        }
        $profile_picture = $_FILES['profile_picture']["tmp_name"];
        $profile_pictureName = "$name-profile_picture-" . rand(9999, 999999) . time() . '.png';
        $profile_picturedestination = "../public/images/review/" . $profile_pictureName;

        $insert_sql = "INSERT INTO `review`(
                `name`,
                `image`,
                `star`,
                `comment`
                ) VALUES (?,?,?,?)";

        $insert_stmt = mysqli_prepare($connection, $insert_sql);
        mysqli_stmt_bind_param(
            $insert_stmt,
            "ssss",
            $param_name,
            $param_image,
            $param_star,
            $param_comment
        );
        $param_name = $name;
        $param_image  = $profile_pictureName;
        $param_star = $starRadio;
        $param_comment = $comment;

        if (mysqli_stmt_execute($insert_stmt)) {
            move_uploaded_file($profile_picture, $profile_picturedestination);
                header("location: " .LINK."review");
        }


    } else {
        echo "red data error";
    }
} else {
    echo "Post method not working!";
}
// } else {
//     echo LINK."auth/1";
//     die();
// }
