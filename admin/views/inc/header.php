<?php
if (!isset($connection)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/lib/Database.php";
}
if (!isset($baseurl)) {
  include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Baseurl.php";
  $baseurl = new Baseurl;
  define("ADMIN_LINK", "{$baseurl->url()}/dubaibestcleaning/admin/");
  define("IMAGE_LINK", "{$baseurl->url()}/dubaibestcleaning/public/images/");
}
include $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/admin/utility/Format.php";
$format = new Format;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <script src="https://kit.fontawesome.com/8a0fad0de8.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />

  <link rel="stylesheet" href="<?= ADMIN_LINK; ?>public/css/app.css">
  <link rel="stylesheet" href="<?= ADMIN_LINK; ?>style.css">
  <link rel="stylesheet" href="<?= ADMIN_LINK; ?>responsive.css">
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?= ADMIN_LINK; ?>public/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= ADMIN_LINK; ?>public/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= ADMIN_LINK; ?>public/images/favicon/favicon-16x16.png">
  <!-- <link rel="manifest" href="<?= ADMIN_LINK; ?>public/images/site.webmanifest"> -->
  <link rel="mask-icon" href="<?= ADMIN_LINK; ?>public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">

</head>

<body>

  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="<?= ADMIN_LINK; ?>">
          <span class="align-middle">Neat and Healthy Cleaning Admin</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">
            Manage - Services
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Home") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Deep Cleaning</span>
            </a>
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Cleaning Services") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>cleaning-services">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Cleaning Services</span>
            </a>
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Technical Services") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>technical-services">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Technical Services</span>
            </a>
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Painting Services") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>painting-services">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Painting Services</span>
            </a>
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Add Service") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>add-service">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Add New Service</span>
            </a>
          </li>

          <li class="sidebar-header">
            Utility
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Featured Services") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>featured-services">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Featured Services</span>
            </a>
          </li>

          <li class="sidebar-item <?php
                                  if (isset($header_active) && $header_active == "Contact") {
                                    echo 'myactive';
                                  } ?>">
            <a class="sidebar-link" href="<?= ADMIN_LINK; ?>contact">
              <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">Contact</span>
            </a>
          </li>

          

          <?php
          $admin_id = $_SESSION['admin_id'];
          $account_sql = "select role from users_admin where id='$admin_id'";
          $account_stmt = fetch_data($connection, $account_sql);
          mysqli_stmt_bind_result($account_stmt, $role);
          mysqli_stmt_fetch($account_stmt);
          if ($role == "admin") {
          ?>

            <!-- <li class="sidebar-header">
              Course Management
            </li>

            <li class="sidebar-item <?php
                                    if (isset($header_active) && $header_active == "All Course") {
                                      echo 'myactive';
                                    } ?>">
              <a class="sidebar-link" href="<?= ADMIN_LINK; ?>all-course">
                <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">All Courses</span>
              </a>
            </li> -->

            
          <?php } ?>

        </ul>

      </div>
    </nav>

    <div class="main">
      <nav id="adminTopBar" class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="<?= ADMIN_LINK; ?>public/images/logo.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                <span class="text-dark">Neat and Healthy Cleaning Admin</span>
              </a>

              <div class="dropdown-menu dropdown-menu-end">
                <!-- <a class="dropdown-item" href="">
                  <i class="align-middle me-1" data-feather="user"></i>
                  Profile
                </a> -->

                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="<?= ADMIN_LINK; ?>/controllers/logoutController.php">
                  Log out
                </a>

              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content">