<?php
session_start();
$title = "Neat and Healthy Cleaning";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning";
$header_active = "Home";
?>
<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
	include "views/inc/header.php";
?>

	<?php
	include "views/pages/home/home.php";
	?>

	<?php
	include "views/inc/footer.php";
	?>

	<script src="public/js/app.js"></script>

	</body>

	</html>
<?php
} else {
	header("location: " . ADMIN_LINK . "login");
	die();
}
?>