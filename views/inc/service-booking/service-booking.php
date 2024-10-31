<style>
    .booking-card {
        display: none;
        width: 400px;
        position: fixed;
        bottom: 1%;
        right: 9%;
        z-index: 10;
        box-shadow: 1px 1px 31px -12px black;
    }

    .service-booking-icon {
        width: 400px;
        position: fixed;
        bottom: 2%;
        right: 9%;
        z-index: 10;


        display: grid;
        justify-content: end;
        place-items: center;
    }

    .service-booking-icon img {
        width: 80px;
    }

    .service-booking-icon h6 {
        font-weight: bold;
        color: #ffc107;
    }
    @media screen and (max-width:768px) {
        .service-booking-icon {
        bottom: 1%;
        right: 1%;

    }
    .booking-card {
        width: 300px;
        right: 1%;
    }

    }
</style>
<section class="service-booking">
    <div class="card card-body booking-card">
        <div class="text-end">
            <button type="button" class="btn-close service-close-btn" aria-label="Close"></button>
        </div>
        <div class="card-title">
            <h4 style="color:#6bbfed;" class="py-2 text-center"><b>BOOK SERVICE</b></h4>
        </div>
        <form action="">
            <div class="form-group">
                <i class="fa-solid fa-file-pen"></i>
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <label for="email">Email</label>
                <input id="email" type="Email" class="form-control" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-phone"></i>
                <label for="phone">Phone</label>
                <input id="phone" type="text" class="form-control" value="+971" required>
            </div>
            <div style="text-align: center;" class="form-group btn btn-success d-flex flex-column">
                <input id="phone" type="submit" value="Book Service" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="service-booking-icon">
        <h6 style="display:flex;align-items:center;gap:5px"><i style="color:#007580;font-size:20px;" class="fa-solid fa-message"></i> Book a Service</h6>
        <img class="icon-img" id="service-icon" src="<?= LINK; ?>public/images/icon/message.png" alt="service-booking-icon">
    </div>
</section>

<script>
    let serviceOpen = document.getElementById("service-icon");
    let serviceClose = document.getElementsByClassName("service-close-btn")[0];

    let serviceForm = document.getElementsByClassName("booking-card")[0];
    let serviceIcon = document.getElementsByClassName("service-booking-icon")[0];

    serviceOpen.addEventListener("click",(e)=>{
        serviceForm.style.display = "block";
        serviceIcon.style.display = "none";
    })

    serviceClose.addEventListener("click",(e)=>{
        serviceForm.style.display = "none";
        serviceIcon.style.display = "grid";
    })
</script>