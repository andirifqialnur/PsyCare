<div class="container-fluid pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <!-- First Column -->
        <div class="col-lg-4">
        <?= form_open_multipart('Dashboard/profile');?>
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Form Profile</h6>
                </div>
                <!-- <?= $this->session->flashdata('message');?> -->
                <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                            <div class="text-center pb-5">
                                
                                <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/admin/' . $admin['image']) ?>" style="width:256px; height:200px;">

                                <h5 class="fw-bolder"><?= $admin['name'] ?></h5>
                            </div>

                            <label for="photo">Edit Profile Photo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photo" name="photo">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                        <hr class="sidebar-divider">

                        <div class="mt-5 mb-2"><h6 class="text-success">Email Address </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $admin['email']; ?></div>

                        <div class="mb-2"><h6 class="text-success">Address </h6></div>
                        <div class="text-small fst-italic text-muted"><?= $admin['address']; ?></div>
                    </div>
                </div>
            </div>

            <!-- Custom Font Size Utilities -->
            
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

                        <div class="text-muted pt-3 pb-3">
                            Data Exist
                        </div>

                        <div class="form-group mt-4">
                            <label for="name"><h6 class="text-success">Name</h6></label>
                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Your Name" value="<?= $admin['name'];?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                        </div>

                        <div class="form-group mt-4">
                            <label for="email"><h6 class="text-success">Email Address</h6></label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Email Address" value="<?= $admin['email'];?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                        </div>

                        <hr class="sidebar-divider">

                        <div class="text-muted pt-3 pb-3 fw-bolder">
                            Additional Data 
                        </div>
                            <div class="form-group mt-4">
                                <label for="phonenumber"><h6 class="text-success">Phone Number</h6></label>
                                <input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" placeholder="Your Phone Number" value="<?= $admin['phonenumber'];?>">
                                <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                            </div>

                            <div class="form-group mt-4">
                                <label for="age"><h6 class="text-success">Age</h6></label>
                                <input type="text" class="form-control form-control-user" id="age" name="age" placeholder="Your Age" value="<?= $admin['age'];?>">
                                <?= form_error('age', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group mt-4">
                                <label for="job"><h6 class="text-success">Job</h6></label>
                                <input type="text" class="form-control form-control-user" id="job" name="job" placeholder="Your job" value="<?= $admin['job'];?>">
                                <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-floating mt-4">
                                <h6 class="text-success">Address</h6>
                                <textarea class="form-control" placeholder="Leave a comment here" name="address" id="address" style="height: 100px" value="<?= $admin['address'];?>"></textarea>
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>    
                            </div>

                            <button type="submit" class=" rouded-circle btn btn-success mt-5"><i class="fas fa-edit pe-2"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


