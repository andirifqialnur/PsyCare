<!-- Start Event Content-->
<section class="pt-5 mt-lg-5">
        <div class="container px-5 my-5">
            <ol class="breadcrumb d-flex justify-content-lg-end">
                <li class="breadcrumb-item">
                  <a class="text-decoration-none" href="<?= base_url('Home/userhome')?>">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-decoration-none" href="<?= base_url('Home/userchat')?>">Chat with doctor</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-decoration-none" href="<?= base_url('Home/userchat/userchatpayment')?>">Payment</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Payment
                </li>
              </ol>
        </div>
    </section>
    <!-- Blog preview section-->
    <div class="container pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-5">
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Doctor detail</h6>
                </div>
                <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/doctor/' . $doctor['image']) ?>" style="width:300px; height:260px;">
                            <div class="mt-3 mb-2"><h5><?= $doctor['name']?></h5></div>

                        </div>
                        
                        <hr class="sidebar-divider">

                        <div class="mt-5 mb-2"><h6>Age </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $doctor['age'] ?></div>

                        <div class="mb-2"><h6>Experience </h6></div>
                        <div class="text-small fst-italic text-muted">Tahun <?= $doctor['experience']?></div>

                        <div class="mt-4 mb-2"><h6>Quotes</h6></div>
                        <div class="text-small fst-italic text-muted"><?= $doctor['quotes']?></div>
                        
                        <div class="mt-4 mb-2"><h6>Contact</h6></div>
                        <div class="text-small fst-italic text-muted"><?= $doctor['phonenumber']?></div>

                    </div>
                    
                </div>
            </div>
        </div>