<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
$root = $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning";
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['id']) && isset($_POST['prev_banner_image']) && isset($_POST['prev_featured_image']) && isset($_GET['action']) && isset($_POST['submit'])) {

			include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";

            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $id = validate($_POST['id']);
            $prev_featured_image = validate($_POST['prev_featured_image']);
            $prev_banner_image = validate($_POST['prev_banner_image']);

		
			$sql = "DELETE FROM `services` WHERE id=?";
			$stmt = mysqli_prepare($connection, $sql);
			mysqli_stmt_bind_param($stmt, "i", $param_id);
			$param_id = $id;

			if (mysqli_stmt_execute($stmt)) {
				$featured_imageLink = "$root/public/images/services/$prev_featured_image";
				$banner_imageLink = "$root/public/images/services/$prev_banner_image";

				// if (file_exists($featured_imageLink) || file_exists($banner_imageLink)) {
					$delImage_featured = unlink($featured_imageLink);
					$delImage_banner = unlink($banner_imageLink);
					if (!$delImage_featured) {
						echo "Image_featured not deleted!";
						exit();
					}
					if (!$delImage_banner) {
						echo "Image_banner not deleted!";
						exit();
					}
				// }else{
				// 	echo "file not found! .$imageLink";
				// 	exit;
				// }

				if($_GET['action']=="deep"){
					header("location: " . ADMIN_LINK."");
				}
				else if($_GET['action']=="cleaning"){
					header("location: " . ADMIN_LINK."cleaning-services");
				}
				else if($_GET['action']=="technical"){
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
