<?php
$title = "New Order - Neat and Healthy Cleaning Admin";
$meta_description = "$title - Neat and Healthy Cleaning";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning";
$header_active = "New Order";
?>
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
$baseurl = new Baseurl;
define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");

if (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin'] == true) {
    include("../../inc/header.php");
?>
    <style>
        label {
            font-weight: bold;
        }

        .form-group {
            margin-top: 10px;
        }

        .row {
            margin: 0;
            padding: 0;
        }

        .col-md-6 {
            padding: 5px;
            box-sizing: border-box;
        }

        .col-md-12 {
            padding: 0;
        }
    </style>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add Order</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add New Order</h5>
                    </div>
                    <div class="card-body add-course">
                        <form action="<?= ADMIN_LINK; ?>controllers/serviceOrderController.php" method="POST">
                            <div id="form-container">
                                <!-- First Service Form (without remove button) -->
                                <div class="service-form border p-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Service Name <span class="text-danger">*</span></label>
                                            <input type="text" name="service_Name[]" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Client Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label class="form-label">Client Address <span class="text-danger">*</span></label>
                                            <input type="text" name="address[]" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                                            <input type="text" name="number[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                            <input value="1" type="number" name="quantity[]" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Unit Price <span class="text-danger">*</span></label>
                                            <input type="number" name="price[]" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Tax Rate (%) <span class="text-danger">*</span></label>
                                            <input type="number" name="tax[]" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label class="form-label">Discount Amount <span class="text-danger">*</span></label>
                                            <input type="number" name="discount[]" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" id="add-service" class="btn btn-success mt-2">Add New Service</button>
                            <button type="submit" class="btn btn-primary mt-2">Submit Order</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    include("../../inc/footer.php");
} else {
    header("location: " . ADMIN_LINK . "login");
    die();
}
?>
<script src="<?= ADMIN_LINK; ?>public/js/app.js"></script>
<script>
    document.getElementById("add-service").addEventListener("click", function() {
        let formContainer = document.getElementById("form-container");
        let firstForm = document.querySelector(".service-form"); // Select first form
        let newForm = firstForm.cloneNode(true); // Clone the first form

        // Get values from the first form
        let clientName = firstForm.querySelector("input[name='name[]']").value;
        let clientAddress = firstForm.querySelector("input[name='address[]']").value;
        let clientPhone = firstForm.querySelector("input[name='number[]']").value;
        let taxRate = firstForm.querySelector("input[name='tax[]']").value;
        let quantity = firstForm.querySelector("input[name='quantity[]']").value;

        // Clear only service-specific input values in new form
        newForm.querySelector("input[name='service_Name[]']").value = "";
        newForm.querySelector("input[name='price[]']").value = "";
        newForm.querySelector("input[name='discount[]']").value = "";

        // Keep Client Name, Address, Phone, and Tax Rate same
        newForm.querySelector("input[name='name[]']").value = clientName;
        newForm.querySelector("input[name='address[]']").value = clientAddress;
        newForm.querySelector("input[name='number[]']").value = clientPhone;
        newForm.querySelector("input[name='tax[]']").value = taxRate;
        newForm.querySelector("input[name='quantity[]']").value = quantity;

        // Add remove button only for new forms
        let removeButton = document.createElement("button");
        removeButton.type = "button";
        removeButton.className = "btn btn-danger mt-2 remove-service";
        removeButton.textContent = "Remove";

        removeButton.addEventListener("click", function() {
            newForm.remove();
        });

        // Append remove button to new service form
        newForm.appendChild(removeButton);

        formContainer.appendChild(newForm);
    });
</script>

</body>

</html>