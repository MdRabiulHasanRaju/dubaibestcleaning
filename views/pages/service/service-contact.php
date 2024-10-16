<style>
    section.service-contact {
    position: sticky;
    top: 120px;
    }
    .service-contact-name {
        padding: 15px !Important;
        text-align: center;
        background: #6bbfed;
        color: white;
        font-weight: bold;
    }

    @media screen and (max-width:600px) {}
</style>

<section class="service-contact">
    <div class="card">
        <h4 class="card-header service-contact-name">Contact Information</h4>
        <div class="card-body services-title">
            <h5 class="card-title"><b>ADDRESS:</b></h5>
            <br>
            <p class="card-text"><?= $contact_result['address']; ?></p>
            <br>
            <h5 class="card-title"><b>PHONE:</b></h5>
            <br>
            <a href="tel:<?=$contact_number;?>">
                <button type="button" class="btn btn-success my-btn"><?= $contact_result['number']; ?></button>
            </a>
        </div>
    </div>
</section>