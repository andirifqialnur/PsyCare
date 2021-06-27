<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PsyCare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png');?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
  <!-- =======================================================
  * Template Name: EstateAgency - v4.3.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="home">Psy<span class="color-b">Care</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Home'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Home/about'); ?>" data-bs-toggle="tab">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Home/test'); ?>" data-bs-toggle="tab">PsyTest</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Home/event'); ?>" data-bs-toggle="tab">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Home/discussForm'); ?>" data-bs-toggle="tab">Discuss Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= base_url('Home/contact'); ?>" data-bs-toggle="tab">Contact</a>
          </li>

        </ul> 
    </div>
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="<?= base_url('Dashboard');?>" id="userDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
          aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url('Dashboard');?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
          </a>
          <a class="dropdown-item" href="<?= base_url('Dashboard');?>">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
          </a>
          <a class="dropdown-item" href="<?= base_url('Dashboard');?>">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url ('Auth');?>" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
          </a>
        </div>
      </li> 
  </div>
</nav>