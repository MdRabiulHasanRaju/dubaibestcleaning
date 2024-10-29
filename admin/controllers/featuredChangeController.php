<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['featured']) && isset($_POST['refid'])) {

			include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";

            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $featured = validate($_POST['featured']);
            $refid = validate($_POST['refid']);

			$insert_sql = "UPDATE `services` SET featured=? WHERE id=?";
			$insert_stmt = mysqli_prepare($connection, $insert_sql);
			mysqli_stmt_bind_param($insert_stmt, "ii", $param_featured, $param_id);
			$param_featured = $featured;
			$param_id = $refid;

			if (mysqli_stmt_execute($insert_stmt)) {
				header("location: " . ADMIN_LINK."featured-services");
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
