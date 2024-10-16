<style>
    .banner {
        background: #3eace7c4;
        padding: 50px 0;
    }

    .services-image {
        box-shadow: 1px 1px 28px -15px black;
        border-radius: 10px;
    }

    .services-watermark {
        width: 120px;
        min-height: 70px;
        position: absolute;
        padding: 10px;
        filter: opacity(0.5);
    }

    @media screen and (max-width:600px) {
        .services-image {
            width: 100%;
            min-height: 200px;
        }

        .services-text {
            padding-bottom: 30px;
        }
    }
</style>
<section class="banner">
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6 services-text" style="display: flex;align-items: center;flex-direction: column;gap:7px;justify-content: center;text-align: center;">
                <h1 style="color:white;filter: drop-shadow(2px 4px 6px black);font-weight:bold;"><?= $service_result['title']; ?></h1>
                <h6 style="color:white;"><?= $service_result['sub_title']; ?></h6>
            </div>
            <div class="col-md-6">
                <img class="services-watermark" src="<?= LINK; ?>public/images/logo-h.png" alt="logo-watermark">
                <img class="services-image" src="<?= LINK; ?>public/images/services/<?= $service_result['banner_image']; ?>" alt="<?= $service_result['title']; ?>-Image">
            </div>
        </div>
    </div>
</section>