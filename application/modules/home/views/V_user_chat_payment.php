 
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
                <li class="breadcrumb-item active" aria-current="page">
                    Payment
                </li>
              </ol>
            <div class="mb-5">
                <h1 class="fw-bolder">Chat Payment</h1>
                <p class="lead fw-normal text-muted mb-0">Payment here</p>
            </div>
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
                        <div class="text-small mb-4 fst-italic text-muted">Tahun <?= $doctor['experience']?></div>

                        <div class="mb-2"><h6>Quotes</h6></div>
                        <div class="text-small fst-italic text-muted"><?= $doctor['quotes']?></div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

            <div class="col-lg-7">
                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Payment
                        </h6>
                    </div>

                    <div class="card-body pt-3">
                        <form action="<?= base_url('Home/userchatpayment/')?>" method="post">
                            <input type="hidden" name="id">
                            <div class="form-group pb-4">
                                <label for="name"> Name </label>
                                <input type="text" class="mt-3 form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email"> Email </label>
                                <input type="text" class="mt-3 form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email"> Price </label>
                                <div class="color-b pt-3"><h5>Rp.<?= number_format($doctor['price'])?></h5></div>
                            </div>
                            <button type="submit" class="mt-3 rounded-3 btn mb-3">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Even Content -->