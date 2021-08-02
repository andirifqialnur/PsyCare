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