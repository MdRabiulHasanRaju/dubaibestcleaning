<?php ob_start();
session_start();
$title = "Contact - NeatandHealthyCleaning";
$meta_description = "$title - Neat and Healthy Cleaning provides the top-notch villa deep cleaning services all across Dubai. Our clients are 100% satisfied with our work. Call us now +971 56 459 8416";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning, Neat and Healthy,Neat Healthy Cleaning, cleaning service in dubai, NeatHealthyCleaning, NeatCleaning,best deep cleaning services in dubai, Top 10 cleaning comapany in dubai, deep cleaning services dubai,cheap cleaning services dubai, cleaningdubai, best dubai cleaning, best dubai cleaning service, best dubai cleaning, dubai cleaning service, cleaning service";

$header_active = "Contact";

include("../../inc/header.php");
include("../../inc/navbar.php");
require_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/lib/Database.php";

?>

<style>
    .contactForm .label {
        color: #000;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 600;
    }

    .contactForm .form-control {
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding: 0;
    }

    #contactForm .error {
        color: red;
        font-size: 12px;
    }

    #contactForm .form-control {
        font-size: 16px;
    }

    #message {
        resize: vertical;
    }

    #form-message-warning,
    #form-message-success {
        display: none;
    }

    #form-message-warning {
        color: red;
    }

    #form-message-success {
        color: #28a745;
        font-size: 18px;
        font-weight: bold;
    }

    .submitting {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-size: 16px;
        font-weight: bold;
    }

    .info-wrap {
        background-color: #87C547;
        color: white;
    }

    .dbox {
        width: 100%;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 25px;
        gap: 7px;
    }

    .info-wrap .dbox .icon {
        padding: 5px 10px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .info-wrap .dbox .icon span {
        font-size: 20px;
        color: #fff;
    }

    .contact-wrap {
        border: 1px solid #e4e4e4;
    }

    .text a {
        color: rgba(255, 255, 255, 0.8);
        font-weight: bold;
    }

    @media screen and (max-width:900px) {
        .text small {
            font-size: 11px !important;
        }
        .text a {
            font-size: 13px;
    }

    }
</style>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact With Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper" style="max-width: unset;padding:unset;">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                We received your message. We'll be with you shortly. If you require an instant booking, please contact +971 56 459 8416
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="phone">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-md-5 p-4">
                                <h3>Let's get in touch</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> <?= $contact_result['address']; ?></p>
                                    </div>
                                </div>

                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p>
                                            <span>Phone:</span>
                                            <a href="tel:<?= $contact_number; ?>">
                                                <?= $contact_result['number']; ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:info@NeatandHealthyCleaning.com"><small>info@NeatandHealthyCleaning.com</small></a></p>
                                    </div>
                                </div>

                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="<?= LINK; ?>">
                                                <small>www.NeatandHealthyCleaning.com</small>
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "../explorer/review.php";
// include "../explorer/google-review.php";
include "../../inc/footer.php";
?>
<script src="<?= LINK; ?>public/owl/owl.carousel.min.js"></script>
<!-- <script src="<? //= LINK; 
                    ?>public/bootstrap/bootstrap.min.js"></script> -->
<script src="<?= LINK; ?>public/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= LINK; ?>public/WOW-master/dist/wow.min.js"></script>
<script src="<?= LINK; ?>public/bootstrap/popper.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="<?= LINK; ?>main.js"></script>
<script>
    (function($) {

"use strict";


// Form
var contactForm = function() {
    if ($('#contactForm').length > 0 ) {
        $( "#contactForm" ).validate( {
            rules: {
                name: "required",
                subject: "required",
                phone: {
                    required: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                name: "Please enter your name",
                subject: "Please enter your subject",
                phone: "Please enter your Phone Number",
                email: "Please enter a valid email address",
                message: "Please enter a message"
            },
            /* submit via ajax */
            
            submitHandler: function(form) {		
                var $submit = $('.submitting'),
                    waitText = 'Submitting...';

                $.ajax({   	
                  type: "POST",
                  url: "/views/pages/contact/sendEmail.php",
                  data: $(form).serialize(),

                  beforeSend: function() { 
                      $submit.css('display', 'block').text(waitText);
                  },
                  success: function(msg) {
                   if (msg == 'OK') {
                       $('#form-message-warning').hide();
                        setTimeout(function(){
                           $('#contactForm').fadeIn();
                       }, 1000);
                        setTimeout(function(){
                           $('#form-message-success').fadeIn();   
                       }, 1400);

                       setTimeout(function(){
                           $('#form-message-success').fadeOut();   
                       }, 8000);

                       setTimeout(function(){
                           $submit.css('display', 'none').text(waitText);  
                       }, 1400);

                       setTimeout(function(){
                           $( '#contactForm' ).each(function(){
                                            this.reset();
                                        });
                       }, 1400);
                       
                    } else {
                       $('#form-message-warning').html(msg);
                        $('#form-message-warning').fadeIn();
                        $submit.css('display', 'none');
                    }
                  },
                  error: function() {
                      $('#form-message-warning').html("Something went wrong. Please try again.");
                     $('#form-message-warning').fadeIn();
                     $submit.css('display', 'none');
                  }
              });    		
              } // end submitHandler

        });
    }
};
contactForm();

})(jQuery);
</script>
</body>

</html>