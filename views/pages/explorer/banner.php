<style>
    .banner{
        background:#3eace7c4;
        padding:50px 0;
    }
</style>
<section class="banner" >
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6" style="display: flex;align-items: center;flex-direction: column;gap:7px;justify-content: center;text-align: center;">
                <h1 style="color:white;font-weight:bold;">ADVANCED DEEP CLEANING SERVICES</h1>
                <h6 style="color:white;">Painting Services, Cleaning Services, and AC Duct Cleaning</h6>
                <a href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>">
                    <button type="button" class="btn btn-success my-btn" style="display: flex;align-items:center;gap:7px;">Book Now<i class="fa-solid fa-arrow-right"></i></button>
                </a>
                <a href="<?=LINK;?>review" class="btn btn-warning" style="width: 140px;">
                        Review Us
                </a>
            </div>
            <div class="col-md-6">
                <?php include "slider/slider.php"; ?>
            </div>
        </div>
    </div>
</section>