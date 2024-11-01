<style>
    .booking-card {
        display: none;
        width: 400px;
        position: fixed;
        bottom: 1%;
        right: 9%;
        z-index: 10;
        box-shadow: 1px 1px 31px -12px black;
    }

    .service-booking-icon {
        width: 400px;
        position: fixed;
        bottom: 2%;
        right: 9%;
        z-index: 10;


        display: grid;
        justify-content: end;
        place-items: center;
    }

    .service-booking-icon img {
        width: 80px;
    }

    .service-booking-icon h6 {
        font-weight: bold;
        color: #ffc107;
    }

    #service-msg-warning,
    #service-msg-success {
        display: none;
    }

    #service-msg-warning {
        color: red;
    }

    #service-msg-success {
        color: #28a745;
        font-size: 18px;
        font-weight: bold;
    }

    #serviceBookingForm .error {
        color: red;
        font-size: 12px;
    }

    .booking {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-size: 16px;
        font-weight: bold;
    }

    @media screen and (max-width:768px) {
        .service-booking-icon {
            bottom: 1%;
            right: 3%;
            place-items: end;

        }

        .booking-card {
            width: 300px;
            right: 1%;
        }

        .service-booking-icon img {
            width: 60px !important;
            border: none;
            background: none;
        }
    }
</style>
<section class="service-booking">
    <div class="card card-body booking-card">
        <div class="text-end">
            <button type="button" class="btn-close service-close-btn" aria-label="Close"></button>
        </div>
        <div class="card-title">
            <h4 style="color:#6bbfed;" class="py-2 text-center"><b>BOOK SERVICE</b></h4>
        </div>
        <form method="POST" id="serviceBookingForm" name="serviceBookingForm" class="serviceBookingForm">
            <div class="form-group">
                <i class="fa-solid fa-file-pen"></i>
                <label for="name">Name</label>
                <input name="name" id="name" type="text" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <label for="email">Email</label>
                <input name="email" id="email" type="Email" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-phone"></i>
                <label for="phone">Phone</label>
                <input name="phone" id="phone" type="text" class="form-control" value="+971">
            </div>

            <div id="service-msg-warning" class="mb-4"></div>
            <div id="service-msg-success" class="mb-4">
                Service Booked Successfully. We'll be with you shortly. If you require an instant booking, please contact +971 56 459 8416
            </div>

            <div style="text-align: center;" class="form-group btn btn-success d-flex flex-column">
                <input name="submit" id="submit" type="submit" value="Book Service" class="btn btn-success">
                <div class="booking"></div>
            </div>
        </form>
    </div>
    <div class="service-booking-icon">
        <h6 style="display:flex;align-items:center;gap:5px"><i style="color:#007580;font-size:20px;" class="fa-solid fa-message"></i> Book a Service</h6>
        <img class="icon-img" id="service-icon" src="<?= LINK; ?>public/images/icon/message.png" alt="service-booking-icon">
    </div>
</section>

<script>
    let serviceOpen = document.getElementById("service-icon");
    let serviceClose = document.getElementsByClassName("service-close-btn")[0];

    let serviceForm = document.getElementsByClassName("booking-card")[0];
    let serviceIcon = document.getElementsByClassName("service-booking-icon")[0];

    serviceOpen.addEventListener("click", (e) => {
        serviceForm.style.display = "block";
        serviceIcon.style.display = "none";
    })

    serviceClose.addEventListener("click", (e) => {
        serviceForm.style.display = "none";
        serviceIcon.style.display = "grid";
    })
</script>
<script>
    (function($) {

        "use strict";


        // Form
        var serviceBookingForm = function() {
            if ($('#serviceBookingForm').length > 0) {
                $("#serviceBookingForm").validate({
                    rules: {
                        name: "required",
                        phone: {
                            required: true,
                            minlength: 10
                        },
                        email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        name: "Please enter your name",
                        phone: "Please enter your Phone Number",
                        email: "Please enter a valid email address",
                    },
                    /* submit via ajax */

                    submitHandler: function(form) {
                        var $submit = $('.booking'),
                            waitText = 'booking...';

                        $.ajax({
                            type: "POST",
                            url: "/controllers/serviceBookingController.php",
                            data: $(form).serialize(),

                            beforeSend: function() {
                                $submit.css('display', 'block').text(waitText);
                            },
                            success: function(msg) {
                                if (msg == 'OK') {
                                    $('#service-msg-warning').hide();
                                    setTimeout(function() {
                                        $('#serviceBookingForm').fadeIn();
                                    }, 1000);
                                    setTimeout(function() {
                                        $('#service-msg-success').fadeIn();
                                    }, 1400);

                                    setTimeout(function() {
                                        $('#service-msg-success').fadeOut();
                                    }, 8000);

                                    setTimeout(function() {
                                        $submit.css('display', 'none').text(waitText);
                                    }, 1400);

                                    setTimeout(function() {
                                        $('#serviceBookingForm').each(function() {
                                            this.reset();
                                        });
                                    }, 1400);

                                } else {
                                    $('#service-msg-warning').html(msg);
                                    $('#service-msg-warning').fadeIn();
                                    $submit.css('display', 'none');
                                }
                            },
                            error: function() {
                                $('#service-msg-warning').html("Something went wrong. Please try again.");
                                $('#service-msg-warning').fadeIn();
                                $submit.css('display', 'none');
                            }
                        });
                    } // end submitHandler

                });
            }
        };
        serviceBookingForm();

    })(jQuery);
</script>