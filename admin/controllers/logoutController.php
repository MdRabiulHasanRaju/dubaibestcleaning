<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");

session_start();
unset($_SESSION["admin_loggedin"]);
unset($_SESSION["admin_username"]);
unset($_SESSION["admin_id"]);
// session_destroy();
header("location: ".ADMIN_LINK."login");
