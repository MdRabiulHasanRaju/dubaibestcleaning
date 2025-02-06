<?php
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
session_start();

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";
    // Generate a unique invoice number (same for all entries in this submission)
    $invoiceNumber = "INV-" . time(); 

    // Loop through each set of form inputs
    for ($i = 0; $i < count($_POST['service_Name']); $i++) {
        $serviceName = $_POST['service_Name'][$i];
        $name = $_POST['name'][$i];
        $address = $_POST['address'][$i];
        $phone = $_POST['number'][$i];
        $quantity = $_POST['quantity'][$i];
        $unitPrice = $_POST['price'][$i];
        $taxRate = $_POST['tax'][$i];
        $discount = $_POST['discount'][$i];
        $date = date('Y-m-d'); // Current date

        // Prepare and execute SQL query
        $sql = "INSERT INTO service_order (invoiceNumber, service_name, name, address, phone, quantity, unit_price, tax_rate, discount, date) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $connection->prepare($sql)) {
            $stmt->bind_param("sssssiidis", $invoiceNumber, $serviceName, $name, $address, $phone, $quantity, $unitPrice, $taxRate, $discount, $date);
            $stmt->execute();
            $stmt->close();
        } else {
            die("Query failed: " . $connection->error);
        }
    }

    // echo "<script>alert('Order submitted successfully!'); window.location.href='index.php';</script>";
    header("location: " . ADMIN_LINK . "order-list");
} else {
    echo "Invalid request!";
}



} else {
	header("location: " . ADMIN_LINK . "login");
	die();
}
?>
