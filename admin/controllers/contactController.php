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
        isset($_POST['contact_id']) &&
        isset($_POST['phone']) &&
        isset($_POST['address'])
    ) {

        include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


        $contact_id = validate($_POST['contact_id']);
        $phone = validate($_POST['phone']);
        $address = validate($_POST['address']); 



        $update_sql = "UPDATE `contact` SET
            `number`=?,
            `address`=?
            WHERE id=?";

        $update_stmt = mysqli_prepare($connection, $update_sql);
        mysqli_stmt_bind_param(
            $update_stmt,
            "ssi", 
            $param_phone ,
            $param_address,
            $param_id
        );

        $param_phone  = $phone;
        $param_address = $address;
        $param_id = $contact_id;

        if (mysqli_stmt_execute($update_stmt)) {
            header("location: " . ADMIN_LINK . "contact");
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
