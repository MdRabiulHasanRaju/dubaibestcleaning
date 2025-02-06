<?php
$title = "Neat and Healthy Cleaning Admin - Order List";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning";
$header_active = "Order List";
?>
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("LINK", "{$baseurl->url()}/dubaibestcleaning/");
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
    // include_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";
    include("../../inc/header.php");
// Fetch all invoices
$sqlInvoices = "SELECT invoiceNumber, MIN(date) AS date, MAX(name) AS name, MAX(address) AS address, MAX(phone) AS phone 
                FROM service_order 
                GROUP BY invoiceNumber 
                ORDER BY id DESC";
$resultInvoices = $connection->query($sqlInvoices);
?>
<!-- <div class="container-fluid p-0">


</div> -->

<div class="container mt-5">
    <h2 class="mb-4">Order List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Invoice Number</th>
                <th>Customer Name</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($resultInvoices->num_rows > 0) { 
                $count = 1;
                while ($invoice = $resultInvoices->fetch_assoc()) { ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= htmlspecialchars($invoice['invoiceNumber']); ?></td>
                    <td><?= htmlspecialchars($invoice['name']); ?></td>
                    <td><?= htmlspecialchars($invoice['phone']); ?></td>
                    <td><?= htmlspecialchars($invoice['date']); ?></td>
                    <td>
                        <a href="<?=ADMIN_LINK;?>invoice?invoiceNumber=<?= urlencode($invoice['invoiceNumber']); ?>" target="_blank" class="btn btn-primary btn-sm">Print</a>
                        <button class="btn btn-danger btn-sm delete-btn" data-invoice="<?= urlencode($invoice['invoiceNumber']); ?>">Delete</button>
                    </td>
                </tr>
            <?php } 
            } else { ?>
                <tr><td colspan="6" class="text-center">No orders found</td></tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on("click", ".delete-btn", function() {
        var invoiceNumber = $(this).data("invoice");
        if (confirm("Are you sure you want to delete this order?")) {
            $.ajax({
                url: "<?= ADMIN_LINK; ?>controllers/deleteOrderController.php",
                type: "POST",
                data: { invoiceNumber: invoiceNumber },
                success: function(response) {
                    alert(response);
                    location.reload();
                }
            });
        }
    });
</script>


<?php
    include("../../inc/footer.php");
} else {    
    header("location: " . ADMIN_LINK . "login");
    die();
}
?>
<script src="<?= ADMIN_LINK; ?>public/js/app.js"></script>

</body>

</html>
