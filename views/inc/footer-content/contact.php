<style>
    .contact-explorer-category {
        background: #ffffff;
        padding: 80px 0;
    }
.contact-explorer-num{
    display: flex;gap:10px;
}
@media screen and (max-width:600px) {
    .contact-explorer-num{
    display: grid;gap:10px;
}
.contact-explorer-title{
    padding-top: 30px!important;
}
}
</style>
<section class="contact-explorer-category">
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6" style="display: flex;align-items: center;flex-direction: column;gap:30px;justify-content: center;text-align: left;">
                <img style="width: 200px;min-height:120px;" src="<?= LINK; ?>public/images/logo-h.png" alt="logo">
                <div style="display:flex;align-items:center;justify-content: center;gap:7px">
                    <a href="#"><img class="icon-img" src="<?= LINK; ?>public/images/icon/facebook.png" alt="facebook-icon"></a>
                    <a href="#"><img class="icon-img" src="<?= LINK; ?>public/images/icon/instagram.png" alt="instagram-icon"></a>
                    <a href="#"><img class="icon-img" src="<?= LINK; ?>public/images/icon/whatsapp.png" alt="whatsapp-icon"></a>
                </div>
            </div>

            <div class="col-md-6" style="display: flex;align-items: center;flex-direction: column;gap:7px;justify-content: center;text-align: center;">
                <h1 class="contact-explorer-title" style="color:black;font-weight:bold;">BUSINESS INFORMATION</h1>
                <p>
                    <b>Working Hours</b> <br>
                    8:00 am to 10:00 pm<br>
                    <b>Address</b><br>
                    <?= $contact_result['address']; ?><br>
                    <b>Call Us</b><br>
                </p>
                <div class="contact-explorer-num">
                    <a href="tel:<?=$contact_number;?>">
                        <button type="button" class="btn btn-success my-btn blue"><?= $contact_result['number']; ?></button>
                    </a>
                    <!-- <a href="tel:+971564598416">
                        <button type="button" class="btn btn-success my-btn"><?//= $contact_result['number']; ?></button>
                    </a> -->
                </div>
            </div>

        </div>
    </div>
</section>