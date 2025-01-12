<style>
    section.whatsapp-booking {
        background: gray;
        display:flex;
        width: 100%;
        bottom: 0;
        position: fixed;
        z-index: 8;
    }

    .whatsapp-booking img {
        width: 100%;
    }

    .whatsapp-booking-icon {
        width: 50%;
        position: fixed;
        bottom: 2%;
        left: 0%;
        z-index: 10;
        display: grid;
        justify-content: start;
        place-items: center;
    }

    .whatsapp-booking-icon img {
        width: 80px;
    }

    .whatsapp-booking-icon h6 {
        font-weight: bold;
        color: #ffc107;
    }

    .mobile-whatsapp-booking {
        display: none;
    }


    @media screen and (max-width:768px) {
        .whatsapp-booking-icon {
            bottom: 1%;
            right: 3%;
            place-items: start;

        }

        .whatsapp-booking-icon img {
            width: 60px !important;
            border: none;
            background: none;
        }

        .mobile-whatsapp-booking {
            display: block;
        }
    }
</style>
<section class="whatsapp-booking">
    <a class="mobile-whatsapp-booking" href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>">
        <img src="<?= LINK; ?>public/images/icon/whatsapp-text.jpg" alt="whatsapp-text-icon">
    </a>
    <a class="mobile-whatsapp-booking" href="tel:+<?=$wp_api_number;?>">
        <img src="<?= LINK; ?>public/images/icon/call-now.png" alt="call-now-text-icon">
    </a>
        <a class="mobile-whatsapp-booking" href="javascript:void(Tawk_API.toggle())">
        <img src="<?= LINK; ?>public/images/icon/live-chat.png" alt="live-chat-text-icon">
    </a>
</section>