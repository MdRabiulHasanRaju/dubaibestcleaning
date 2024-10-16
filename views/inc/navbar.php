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

  .dropdown-menu.show {
    display: block;
    width: 570px;
  }

  .dropdown-menu.show>p {
    display: inline-flex;
  }

  @media screen and (max-width:600px) {
    .dropdown-menu.show {
      width: 100%;
    }

    .dropdown-menu.show>p {
      display: block;
    }
    .dropdown-item{
      width: 100%;
    }
  }
</style>
<?php
$contact_sql = "select address,number from contact";
$contact_stmt = mysqli_query($connection, $contact_sql);
$contact_result = mysqli_fetch_assoc($contact_stmt);
$contact_number = str_replace(" ", "", $contact_result['number']);
$wp_api_number = str_replace("+", "", $contact_number);
?>
<section class="my-navbar">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: unset !important;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=LINK;?>">
          <img style="width: 90px;min-height:70px" src="<?= LINK; ?>public/images/logo-h.png" alt="Your Print Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span style="color: white;" class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=LINK;?>">HOME</a>
            </li>

            <?php
            $cat_sql = "select * from category";
            $cat_stmt = mysqli_query($connection, $cat_sql);
            while ($cat_result = mysqli_fetch_assoc($cat_stmt)) { ?>
              <li class="nav-item dropdown">
                <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $cat_result['name']; ?></div>
                <?php
                $cat_id = $cat_result['id'];
                $services_sql = "select title from services where category_id='$cat_id'";
                $services_stmt = mysqli_query($connection, $services_sql);
                if (mysqli_num_rows($services_stmt) > 0) { ?>
                  <div class="dropdown-menu">
                    <?php
                    while ($services_result = mysqli_fetch_assoc($services_stmt)) {
                        $category_name_link = str_replace(" ", "_", $cat_result['name']);
                        $services_link = str_replace(" ", "_", $services_result['title']);
                      ?>
                      <p>
                        <a style="color: #3EACE7;width:280px" class="dropdown-item" href="<?=LINK;?><?=$category_name_link;?>/<?=$services_link;?>">
                          <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                          <?= $services_result['title']; ?>
                        </a>
                      </p>
                    <?php } ?>
                  </div>
                <?php }
                ?>

              </li>
            <?php  }
            ?>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

          </ul>
          <a href="https://api.whatsapp.com/send?phone=<?=$wp_api_number;?>">
            <button style="font-size:15px;" type="button" class="btn btn-success my-btn">Contact: <?= $contact_result['number']; ?></button>
          </a>
        </div>
      </div>
    </nav>
  </div>
</section>