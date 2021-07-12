<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome-free-5/css/all.min.css')?>">

<title>PsyCare</title>
  </head>
  <body>
    <nav class="navbar navbar-default pb-4 navbar-trans navbar-expand-lg navbar-light fixed-top shadow-sm">
		<div class="container-fluid">
		<a class="ps-5 navbar-brand text-brand" href="#">Psy<span class="color-b">Care</span></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ps-5 navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?= base_url('Home/userhome')?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Home/userabout')?>">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Home/userarticle')?>">Article</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Home/userfaq')?>">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Home/usercontact')?>">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto me-5">
                <div class="topbar-divider d-none d-sm-block">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="me-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'];?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/40x40 user.jpg')?>">
                        </a>
                        <ul class="dropdown-menu px-3 py-3 mx-3 my-3">
                            <li><a class="dropdown-item" href="<?= base_url('Home/editprofile')?>"><i class="text-muted fas fw fa-user pe-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Home/userchat')?>"><i class="text-muted fas fw fa-user-md pe-2"></i>Chat Doctor</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Home/userevent')?>"><i class="text-muted fas fw fa-calendar-week pe-2"></i>Event Registered</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= base_url('Home')?>"><i class="text-muted fas fw fa-sign-out-alt pe-2"></i>Log Out</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
		  </div>
		</div>
	  </nav>
	<!-- End Header -->