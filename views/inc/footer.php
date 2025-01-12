<?php
include "footer-content/contact.php";
// include "footer-content/services-category-bottom.php";
?>
<section>

    <div class="container">
        <footer style="text-align: center;">
            <div class="footer__copyright" style="padding-bottom: 50px;">
                <small>Copyrights &copy; Neat and Healthy Cleaning || <?= date('Y'); ?></small> <br>
                <small>Developed By &copy;<a target="_blank" href="https://www.linkedin.com/in/mdrabiulhasanraju">Md Rabiul Hasan</a></small>
            </div>
        </footer>
    </div>

</section>

<script src="<?= LINK; ?>public/jquery/jquery.js"></script>
<script src="<?= LINK; ?>public/jquery/jquery.validate.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67842a0a49e2fd8dfe066da9/1ihe48f3h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();




Tawk_API = Tawk_API || {};

</script>
<!--End of Tawk.to Script-->

<?php
// include "service-booking/call-now.php";
include "service-booking/mobile-whatsapp.php";
?>


<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>