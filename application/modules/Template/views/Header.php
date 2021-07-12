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
          <a class="nav-link" aria-current="page" href="<?= base_url('Home')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Home/about')?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Home/article')?>">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Home/faq')?>">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Home/contact')?>">Contact</a>
        </li>
			</ul>
          <ul class="navbar-nav ms-auto me-5">
              <div class="topbar-divider d-none d-sm-block">
                  <a href="<?=base_url('Auth/Register')?>" class="btn me-5 ms-lg-5" role="button" style="color: #ffff">Register</a>
              </div>
          </ul>
		  </div>
		</div>
	  </nav>
	<!-- End Header -->