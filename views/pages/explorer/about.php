<style>
    .about-explorer {
        background: #F3F6F6;
        padding: 50px 0;
    }
    img.about-explorer-img {
    box-shadow: 1px 1px 44px -37px black;
    border-radius: 10px;
}
@media screen and (max-width:600px) {
    .about-btn{
        margin-bottom: 20px;
    }
    .explorer-about-p{
        font-size: 13px;
    }
    .about-explorer>.container>.row{
        flex-direction: column-reverse;
    }
    .about-explorer-img{
        margin-top: 25px;
        width: 100%;
    }
    }
</style>
<section class="about-explorer">
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s">
                <img class="about-explorer-img" src="<?= LINK; ?>public/images/about.jpg" alt="about-img">
            </div>
            <div class="col-md-6 wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" style="display: flex;align-items: center;flex-direction: column;gap:7px;justify-content: center;text-align: left;">
                <h5 style="color:orange;font-weight:bold;">What do we do, and who are we?
                </h5>
                <h3 style="color:#87C547;font-weight:bold;text-transform:uppercase;">finest deep cleaning company</h3>
                <p class="explorer-about-p" style="text-align: justify;">
                    Greetings and appreciation for visiting <b>Neat and Healthy Cleaning</b>, the top deep cleaning company. In Dubai, we offer the best AC duct cleaning and deep cleaning services.
                    <br>
                    <br>
                    "Deep Cleaning to be done on time" is our goal. Selecting the <b>Finest Deep Cleaning Services in Dubai</b> for your establishment might be difficult. On the other hand, <b>Neat and Healthy Cleaning</b>'s deep cleaning and AC duct cleaning services can create a customized site plan that will meet all of your cleaning requirements.

                    <br>
                    <br>
                    Use our excellent deep cleaning services to get your home and workplace thoroughly cleaned. Our crew of courteous and skilled cleaners goes above and beyond what other deep cleaning services in Dubai can offer. As <b>Neat and Healthy Cleaning</b>, we simplify your life by offering efficiency with a personal touch and making sure your house or place of business is always spotless. We specialize in providing deep cleaning services for homes and businesses in Dubai and around the United Arab Emirates. Regardless of the size of the project—a tiny house or a huge office building—we have the means to satisfy your needs with the highest caliber and meticulous attention to detail. Our main objective is to keep your space tidy.

                </p>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>">
                    <button type="button" class="btn btn-success about-btn my-btn" style="display: flex;align-items:center;gap:7px;">Contact Us Now<i class="fa-solid fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>
</section>