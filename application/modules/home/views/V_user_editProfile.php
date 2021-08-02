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
        <div class="col-lg-6">
        <?= form_open_multipart('Home/editProfile');?>
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Form Profile</h6>
                </div>
                <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                
                                <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/photo/' . $user['image']) ?>" style="width:300px; height:260px;">

                                <h5 class="fw-bolder"><?= $user['name'] ?></h5>

                                <div class="fst-italic text-muted pb-3"><?= $user['job'] ?></div>
                            </div>
                            <div class="form-group pt-4">
                                <label class="custom-control-label form-label w-100 fw-bolder">Select file</label>
                                <input type="file" class="custom-file-input" name="photo">
                            </div>

                        <hr class="sidebar-divider">

                        <div class="mt-5 mb-2"><h6>Email Address </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $user['email']; ?></div>

                        <div class="mb-2"><h6>Address </h6></div>
                        <div class="text-small fst-italic text-muted"><?= $user['address']; ?></div>
                    </div>
                </div>
            </div>

            <!-- Custom Font Size Utilities -->
            
        </div>

            <!-- Second Column -->
            <div class="col-lg-6">

                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Form Data
                        </h6>
                    </div>
                    <div class="card-body pt-3">

                        <div class="text-muted pt-3 pb-3 fw-bolder">
                            Data Exist
                        </div>

                        <div class="form-group mt-4">
                            <label for="name"><h6>Name</h6></label>
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Your Name" value="<?= $user['name'];?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                        </div>

                        <div class="form-group mt-4 mb-5">
                            <label for="email"><h6>Email Address</h6></label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Email Address" value="<?= $user['email'];?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        </div>

                        <hr class="sidebar-divider">

                        <div class="text-muted pt-3 pb-3 fw-bolder">
                            Additional Data
                        </div>

                            <div class="form-group mt-4">
                                <label for="phonenumber"><h6>Phone Number</h6></label>
                                <input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" placeholder="Your Phone Number" value="<?= $user['phonenumber'];?>">
                                <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group mt-4">
                                <label for="age"><h6>Age</h6></label>
                                <input type="text" class="form-control form-control-user" id="age" name="age" placeholder="Your Age" value="<?= $user['age'];?>">
                                <?= form_error('age', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group mt-4">
                                <label for="job"><h6>Job</h6></label>
                                <input type="text" class="form-control form-control-user" id="job" name="job" placeholder="Your Job" value="<?= $user['job'];?>">
                                <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-floating mt-4">
                                <h6>Address</h6>
                                <textarea class="form-control" placeholder="Leave a comment here" name="address" id="address" style="height: 100px" value="<?= $user['address'];?>"></textarea>
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>    
                            </div>

                            <button type="submit" class="btn mt-5"><i class="fas fa-edit pe-2"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


