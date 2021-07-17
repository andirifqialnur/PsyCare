<header class="bg py-5 pt-lg-5 mt-5">
    <div class="container px-4 px-lg-5 my-5">
        <ol class="breadcrumb d-flex justify-content-lg-end">
            <li class="breadcrumb-item">
              <a class="text-decoration-none" href="<?=base_url('Home/userhome')?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Profile
            </li>
        </ol>
        <div class="text-center">
            <h1 class="display-4 text-dark fw-bolder">Edit Profile</h1>
            <p class="lead fw-normal text-muted mb-0">You can change your profile here</p>
        </div>
    </div>
</header>

<div class="container-fluid pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <!-- First Column -->
        <div class="col-lg-4">
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Form Profile</h6>
                </div>
                <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                            <h5 class="fw-bolder"><?= $user['name'] ?></h5>
                            <div class="fst-italic text-muted pb-3"><?= $user['job'] ?></div>
                        </div>
                        <div class="text-end me-3 rounded-circle"><a class="btn mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#profilemodal" style="color: #ffff;"><i class="fas fa-edit "></i></a></div>
                        <hr class="sidebar-divider">
                        <div class="mt-5 mb-2"><h6>Email Address </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $user['email'] ?></div>

                        <div class="mb-2"><h6>Phone Number </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $user['phonenumber'] ?></div>

                        <div class="mb-2"><h6>Address </h6></div>
                        <div class="text-small fst-italic text-muted"><?= $user['address'] ?></div>
                    </div>
                    
                </div>
            </div>

            <!-- Custom Font Size Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Custom Font Size Utilities</h6>
                </div>
                <div class="card-body">
                    <p class="text-xs">.text-xs</p>
                    <p class="text-lg mb-0">.text-lg</p>
                </div>
            </div>
        </div>

            <!-- Second Column -->
            <div class="col-lg-8">

                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Form Data
                        </h6>
                    </div>
                    <div class="card-body pt-3">
                    <form action="<?= base_url('Home/userEdited/')?><?= $user['id'] ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                            <div class="form-group pb-4">
                                <label for="name">Nama</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="name" name="name" placeholder="Your Name..." value="<?= $user['name'] ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email">Email</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="email" name="email" placeholder="Your Email..." value="<?= $user['email'] ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="phonenumber" name="phonenumber" placeholder="Your Phone Number..." value="<?= $user['phonenumber'] ?>">
                                <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="job">Job</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="job" name="job" placeholder="Your Job..." value="<?= $user['job'] ?>">
                                <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="password">Password</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password" name="password" placeholder="Your Password..." ">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="password2">New Password</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password2" name="password2" placeholder="Repeat Your Password...">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="age">Age</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="age" name="age" placeholder="Your Age..." value="<?= $user['age'] ?>">
                                <?= form_error('age', '<small class="text-danger pl-3">', '</small>');?>
                            </div>

                            <div class="form-group pb-4">
                                <label for="gender">Gender</label>
                                <div class="mt-2 d-flex" value="<?= $user['gender'] ?>">
                                    <div class="me-3 custom-control custom-radio ">
                                        <input type="radio" id="gender" name="gender" class="custom-control-input" checked="" value="1">
                                        <label class="custom-control-label weight-400" for="gender">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="gender" name="gender" class="custom-control-input ms-auto" value="0">
                                        <label class="custom-control-label weight-400" for="gender">Female</label>
                                    </div>
                                </div>
                                <?= form_error('gender', '<small class="text-danger pl-3">', '</small>');?>
                            </div>

                            <div class="form-group pb-4">
                                <label for="address">Address</label>
                                <div class="mt-2 form-floating pb-4" >
                                    <textarea class="form-control fst-italic" name="address" id="address" style="height: 200px" value="<?= $user['address'] ?>"></textarea>
                                </div>
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>
                            </div>

                        <a type="submit" class="btn mb-3">Save</a>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit profile Modal-->
<!-- Modal -->
<div class="modal fade" id="profilemodal" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change Your Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                    <h5 class="fw-bolder"><?= $user['name'] ?></h5>
                    <div class="fst-italic text-muted pt-2"><?= $user['email'] ?></div>
                    <div class="fst-italic text-muted pt-2">
                        <p class="text-danger">Only can upload photo below 10MB</p>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
        <button type="submit" class="btn">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
