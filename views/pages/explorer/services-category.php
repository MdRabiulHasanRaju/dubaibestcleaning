<style>
    .services-category {
        /*background: #3eace7c4;*/
        background:#0b4a6cc4;
        padding: 80px 0;
    }

    .services-categroy-list {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
    }

    .services-categroy-list>ul>li {
        padding: 10px 0 !important;
        color: white;
        font-weight: bold;
    }

    .services-categroy-list>ul>li>.icon-img {
        background: none !important;
        border: none;
    }

    @media screen and (max-width:600px) {
        .services-categroy-list>ul>li {
            display: grid;
            place-items: center;
        }
        .services-categroy-list {
        padding-top:20px ;
    }
    }
</style>
<section class="services-category">
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6" style="display: flex;align-items: center;flex-direction: column;gap:7px;justify-content: center;text-align: left;">
                <h1 style="color:white;font-weight:bold;">THE CLEANING SERVICES WE PROVIDE
                </h1>
                <h6 style="color:white;">In addition, we provide specialty services for specific events as a full-service cleaning company in Dubai. For recently built or remodeled buildings, we provide post-construction cleanup. Our powerful machinery allows us to swiftly and effectively clear away the construction debris.
                </h6>
            </div>
            <div id="services-category" class="col-md-6" style="display: flex;align-items:center;justify-content:center;">
                <div class="services-categroy-list">
                    <ul>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/villa.png" alt="icon-img"> Villas</li>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/office.png" alt="icon-img"> Offices</li>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/warehouse.png" alt="icon-img"> Warehouse</li>
                    </ul>
                    <ul>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/apartment.png" alt="icon-img"> Apartments</li>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/restaurant.png" alt="icon-img"> Restaurants</li>
                        <li><img class="icon-img" src="<?= LINK; ?>public/images/icon/gym.png" alt="icon-img"> Gym</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>