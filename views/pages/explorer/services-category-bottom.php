<style>
    .services-bottom-explorer {
        background: #87C547;
        padding: 80px 0;
    }

    .services-bottom-explorer-num {
        display: flex;
        gap: 10px;
    }

    .services-bottom-explorer-row {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 2rem;
        text-align: center;
    }

    .services-bottom-item>ul>li>a {
        font-size: 13px;
        color: white;
        font-weight: 500;
    }

    @media screen and (max-width:900px) {
        .services-bottom-explorer-row {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media screen and (max-width:600px) {
        .services-bottom-explorer-row {
            grid-template-columns: 1fr;
        }
    }
</style>
<section class="services-bottom-explorer">
    <div class="container">
        <div class="row col-md-12 services-bottom-explorer-row">

            <div class="services-bottom-item">
                <h6 style="font-weight: bold;color:white;padding-bottom:20px!important;">CLEANING SERVICES</h6>
                <ul>
                    <li><a href="">REGULAR OFFICE CLEANING SERVICE</a></li>
                    <li><a href="">RESIDENTIAL CLEANING</a></li>
                    <li><a href="">WINDOWS CLEANING</a></li>
                    <li><a href="">FACADE CLEANING</a></li>
                    <li><a href="">DEEP CLEANING SERVICES</a></li>
                </ul>
            </div>

            <div class="services-bottom-item">
                <h6 style="font-weight: bold;color:white;padding-bottom:20px!important;">MAINTENANCE</h6>
                <ul>
                    <li><a href="">AC MAINTENANCE</a></li>
                    <li><a href="">AC SERVICING</a></li>
                    <li><a href="">VINYL FLOOR POLISHING</a></li>
                    <li><a href="">WRAPPING SERVICES</a></li>
                    <li><a href="">MARBLE POLISHING</a></li>
                    <li><a href="">PEST CONTROL SERVICE</a></li>
                </ul>
            </div>

            <div class="services-bottom-item">
                <h6 style="font-weight: bold;color:white;padding-bottom:20px!important;">INSTALLATION</h6>
                <ul>
                    <li><a href="">MARBLE FLOORING</a></li>
                    <li><a href="">TILE FLOORING</a></li>
                    <li><a href="">FALSE CEILING</a></li>
                    <li><a href="">GYPSUM PARTITION</a></li>
                    <li><a href="">CURTAIN INSTALLATION</a></li>
                </ul>
            </div>

            <div class="services-bottom-item">
                <h6 style="font-weight: bold;color:white;padding-bottom:20px!important;">TECHNICAL SERVICES</h6>
                <ul>
                    <li><a href="">HANDYMAN SERVICES</a></li>
                    <li><a href="">ELECTRICAL SERVICES</a></li>
                    <li><a href="">PLUMBING SERVICES</a></li>
                    <li><a href="">WALL PAINTERS IN DUBAI</a></li>
                    <li><a href="">PAINTING SERVICES</a></li>
                    <li><a href="">WALL PAPER FIXING</a></li>
                    <li><a href="">GROUT RESTORATION</a></li>
                </ul>
            </div>

            <div class="services-bottom-item">
                <h6 style="font-weight: bold;color:white;padding-bottom:20px!important;">PAINTING SERVICES</h6>
                <ul>
                    <li><a href="">WALL PAINTERS IN DUBAI</a></li>
                    <li><a href="">WALL PAPER FIXING</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li>
                        <div style="padding-top:20px!important;">
                            <h6 style="color:white;font-weight:bold;">WE ACCEPT:</h6>
                            <img style="width:50px;border-radius: 0;background:none;border:none;" src="<?= LINK; ?>public/images/icon/visa.png" alt="visa-icon">
                            <img style="width:50px;border-radius: 0;background:none;border:none;" src="<?= LINK; ?>public/images/icon/card.png" alt="card-icon">
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</section>