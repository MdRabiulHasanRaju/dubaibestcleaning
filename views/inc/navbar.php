<style>
  .nav-link {
    font-weight: bold;
    text-transform: uppercase;
    color: #3EACE7;
    font-size: 0.8675rem;
  }

  .active {
    color: orange !important;
  }

  button.navbar-toggler.collapsed {
    background: #3eace7;
  }

  button.navbar-toggler {
    background: #3EACE7;
  }
</style>
<section class="my-navbar">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: unset !important;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img style="width: 120px;min-height:70px" src="<?= LINK; ?>public/images/logo-h.png" alt="Your Print Logo">
          <!-- <b>Dubai Best Cleaning</b> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span style="color: white;" class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DEEP CLEANING</a>
              <div class="dropdown-menu">
                <div style="display: flex;">
                  <!-- i=1
                  flag=5
                  while(){
                    if(flag!=i){
                      if(i==1) <ul>
                        <li></li>
                      if(i==1) </ul>
                    }else{
                      i=1;
                    }
                    i++;
                  } -->
                  <ul>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Action</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Another action</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Something else here</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Separated link</a></li>
                  </ul>
                  <ul>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Action</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Another action</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Something else here</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass-arrow-right"></i> Separated link</a></li>
                  </ul>
                </div>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">CLEANING SERVICES</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">DEEP CLEANING</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

          </ul>
          <a href="tel:+971561004127">
            <button type="button" class="btn btn-success my-btn">Contact: +971 56 100 4127</button>
          </a>
        </div>
      </div>
    </nav>
  </div>
</section>