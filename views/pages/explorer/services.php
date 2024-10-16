<style>
    .services-explorer {
        background: white;
        padding: 50px 0;
    }

    .services-img {
        width: 70%;
        min-height: 100px;
        padding-top: 20px;
        /* border-radius:10px ; */
    }

    .services-explorer-h1 {
        color: #87C547;
        font-weight: bold;
        text-align: center;
        padding: 20px 0 !important;
    }

    .services-card-title {
        padding: 10px 0 !important;
        font-weight: bold;
        font-size: 17px;
    }

    .services-card-text {
        text-align: justify;
        font-size: 13px;

    }

    .services-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-services {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        box-shadow: 1px 1px 18px -15px black;
        background: #fcfcfc;
        transition: all 300ms;
        margin-bottom: 20px;
    }

    .card-services:hover {
        background: #ededed;
    }
</style>
<section class="services-explorer">
    <div class="container">
        <h1 class="services-explorer-h1">COMPLETE CLEANING SOLUTIONS</h1>
        <div class="row col-md-12">
            
            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/commercial-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">COMMERCIAL CLEANING</h5>
                        <p class="card-text services-card-text">Many people spend as much time at office as they do at home. But few of them pay attention to keeping...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/move-in-move-out-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">MOVE IN MOVE OUT CLEANING</h5>
                        <p class="card-text services-card-text">Among all best steam cleaning companies in Dubai, Dubai Clean is a professional deep clean...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/painting-service.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">PAINTING SERVICE</h5>
                        <p class="card-text services-card-text">We're providing you an extensive range of specialists for Wall Painting Services in Dubai to residenti..</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/windows-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">WINDOWS CLEANING</h5>
                        <p class="card-text services-card-text">Dubai Clean Inc., provides an affordable and professional high rise window cleaning, towers...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/office-carpet-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">OFFICE CARPET CLEANING</h5>
                        <p class="card-text services-card-text">Dubai Clean offers expert Office Carpet Shampoo Cleaning services at competitive rates</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/post-construction-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">POST CONSTRUCTION CLEANING</h5>
                        <p class="card-text services-card-text">Professional Post Construction Cleaning is another cleaning service that Dubai Clean Inc. offers. We ...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/floor-maintenance.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">FLOOR MAINTENANCE</h5>
                        <p class="card-text services-card-text">Our experience & best quality of work has made us famous within both commercial and domes...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 services-box wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                <div class="card card-services">
                    <img src="<?= LINK; ?>public/images/ac-duct-cleaning.jpg" class="services-img" alt="services-img">
                    <div class="card-body" style="display:flex;flex-direction:column;align-items: center;justify-content:center;gap:5px;">
                        <h5 class="card-title services-card-title">AC DUCT CLEANING</h5>
                        <p class="card-text services-card-text">Dubai Clean extend its services by introducing Professional AC\Air Duct Cleaning Services. We hav...</p>
                        <a href="#">
                            <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;font-size:13px;">VIEW DETAILS<i class="fa-solid fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>