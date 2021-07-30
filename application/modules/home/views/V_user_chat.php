<!-- Header-->
<header class="bg py-5 pt-lg-5 mt-5">
    <div class="container px-4 px-lg-5 my-5">
        <ol class="breadcrumb d-flex justify-content-lg-end">
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="<?=base_url('Home/userhome')?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Chat with doctor
            </li>
        </ol>
        <div class="text-center text-black">
            <h1 class="display-4 fw-bolder">Doctor List</h1>
            <p class="lead fw-normal text-dark-50 mb-0">With this shop homepage template</p>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php foreach($doctor as $doctors) : ?>
                <div class="col mb-5">
                    <div class="card h-100 shadow border-0">
                        <!-- <div class="badge text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Discount</div> -->
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/doctor/' . $doctors['image'])?>"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <a class="text text-decoration-none"><h5 class="fw-bolder"><?= $doctors['name']?></h5></a><br>
                                <!-- Product price-->
                                <a class="text text-decoration-none">"<?= $doctors['quotes']?>"</a>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                            <a class="btn mt-auto " href="<?= base_url()?>Home/userchatpayment/<?= $doctors['id'] ?>" style="color: #ffff;">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="chatmodal" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirm Your Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group text-center">
                    <p class="fw-bolder display-6">Aoran Galeal</p>
                    <p>Price : <span style="color: rgb(41, 194, 122);">$40.00</span></p>
                </div>
                <div class="form-group pb-4">
                    <label for="name"> Username </label>
                    <input type="text" class="mt-3 form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                </div>
                <div class="form-group pb-5">
                    <label for="email"> Password </label>
                    <input type="text" class="mt-3 form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                </div>
            </div>
        <div class="modal-footer">
        <button type="button" class="btn">Pay</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->