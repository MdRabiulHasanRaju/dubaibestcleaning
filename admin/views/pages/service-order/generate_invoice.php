<?php
require_once('./dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;
include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";

// Validate invoice number
if (!isset($_GET['invoiceNumber']) || empty($_GET['invoiceNumber'])) {
    die("Invalid Invoice Number.");
}

$invoiceNumber = $_GET['invoiceNumber'];

// Fetch Invoice Details
$sqlInvoice = "SELECT DISTINCT invoiceNumber, date, name, address, phone FROM service_order WHERE invoiceNumber = ?";
$stmt = $connection->prepare($sqlInvoice);
$stmt->bind_param("s", $invoiceNumber);
$stmt->execute();
$resultInvoice = $stmt->get_result();
$invoice = $resultInvoice->fetch_assoc();

if (!$invoice) {
    die("Invoice not found.");
}

// Fetch Ordered Services
$sqlOrders = "SELECT * FROM service_order WHERE invoiceNumber = ?";
$stmtOrders = $connection->prepare($sqlOrders);
$stmtOrders->bind_param("s", $invoiceNumber);
$stmtOrders->execute();
$resultOrders = $stmtOrders->get_result();

$orders = [];
$totalAmount = 0;
$totalTax = 0;
$totalDiscount = 0;

while ($row = $resultOrders->fetch_assoc()) {
    $orders[] = $row;
}

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

ob_start();
include("invoice_template.php");
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("invoice_{$invoiceNumber}.pdf", array("Attachment" => false));

$stmt->close();
$stmtOrders->close();
$connection->close();
?>
