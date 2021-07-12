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
                    <h6 class="m-0 font-weight-bold">Custom Text Color Utilities</h6>
                </div>
                <div class="card-body">
                <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                        <h5 class="fw-bolder">Andi Rifqial Nur</h5>
                        <div class="fst-italic text-muted pb-3">Founder &amp; CEO</div>
                        <div class="fw-bolder text-muted pb-4">------------------------------------------------------------</div>
                    </div>
                    <div class="mb-2"><h6>Email Address :</h6></div>
                    <div class="text-small mb-4">andirifqialnur276@gmail.com</div>

                    <div class="mb-2"><h6>Phone Number :</h6></div>
                    <div class="text-small mb-4">085263563381</div>

                    <div class="mb-2"><h6>Address :</h6></div>
                    <div class="text-small">Sinjai</div>
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
                        <h6 class="m-0 font-weight-bold ">Form Profile
                        </h6>
                    </div>
                    <div class="card-body pt-3">
                    <!-- <form action="<?= base_url('Dashboard/formEdit/')?><?= $user['id'] ?>" method="post"> -->
                        <!-- <input type="hidden" name="id" value="<?= $user['id']; ?>"> -->
                            <div class="form-group pb-4">
                                <label for="name">Nama</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="name" name="name" placeholder="Your Name...">
                                <!-- value="<?= $user['name'] ?>" -->
                            </div>
                            <div class="form-group pb-4">
                                <label for="email">Email</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="email" name="email" placeholder="Your Email..." >
                                <!-- value="<?= $user['email'] ?>" -->
                            </div>
                            <div class="form-group pb-4">
                                <label for="email">Username</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="email" name="email" placeholder="Your Username..." >
                            </div>
                            <div class="form-group pb-4">
                                <label for="email">Phone Number</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="email" name="email" placeholder="Your Phone Number..." >
                            </div>
                            <div class="form-group pb-4">
                                <label for="email">Job</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="email" name="email" placeholder="Your Job..." >
                            </div>
                            <div class="form-group pb-4">
                                <label for="password">Password</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="password" name="password" placeholder="Your Password..." >
                            </div>
                            <div class="form-group pb-4">
                                <label for="password2">New Password</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="password2" name="password2" placeholder="Repeat Your Password...">
                            </div>

                            <div class="form-group pb-4">
                                <label for="password2">Age</label>
                                <input type="text" class="mt-2 form-control form-control-user" id="password2" name="password2" placeholder="Your Age...">
                            </div>

                            <div class="form-group pb-4">
                                <label for="gender">Gender</label>
                                <div class="mt-2 d-flex">
                                    <div class="me-3 custom-control custom-radio ">
                                        <input type="radio" id="customRadio4" name="jk" class="custom-control-input" checked="" value="1">
                                        <label class="custom-control-label weight-400" for="customRadio4">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="jk" class="custom-control-input ms-auto" value="0">
                                        <label class="custom-control-label weight-400" for="customRadio5">Female</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pb-4">
                            <label for="floatingTextarea2">Address</label>
                                <div class="mt-2 form-floating pb-4">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                </div>
                            </div>

                        <button type="submit" class="btn mb-3">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>