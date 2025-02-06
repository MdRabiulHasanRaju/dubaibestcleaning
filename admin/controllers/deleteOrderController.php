<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["invoiceNumber"])) {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";
        $invoiceNumber = $_POST["invoiceNumber"];
        $sqlDelete = "DELETE FROM service_order WHERE invoiceNumber = ?";
        $stmt = $connection->prepare($sqlDelete);
        $stmt->bind_param("s", $invoiceNumber);

        if ($stmt->execute()) {
            echo "Order deleted successfully!";
        } else {
            echo "Error deleting order.";
        }

        $stmt->close();
        $connection->close();
    } else {
        echo "Invalid request!";
    }
} else {
    header("location: " . ADMIN_LINK . "login");
    die();
}
