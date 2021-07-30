<!-- Footer -->
  <footer class="py-4 mt-auto border-top">
      <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
          <div class="col-auto"><div class="small m-0 text-black">Copyright &copy; Your Website 2021</div></div>
          <div class="col-auto">
            <a class="link-dark small" href="#!">Privacy</a>
            <span class="text-black mx-1">&middot;</span>
            <a class="link-dark small" href="#!">Terms</a>
            <span class="text-black mx-1">&middot;</span>
            <a class="link-dark small" href="#!">Contact</a>
          </div>
        </div>
      </div>
  </footer>

  <!-- Edit photo profile Modal-->
<!-- Modal -->
<!-- <div class="modal fade" id="profilemodal" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change Your Profile Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url()?>Home/userProfilePhoto" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id'];?>">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/photo/' . $user['image'])?>" style="width:300px; height:260px;"/>
                    <h5 class="fw-bolder"><?= $user['name'] ?></h5>
                    <div class="fst-italic text-muted pt-2"><?= $user['email'] ?></div>
                    <div class="fst-italic text-muted pt-2">
                        <p class="text-danger">Only can upload photo below 10MB</p>
                    </div>
                    <div class="form-group pt-4">
                        <label class="custom-control-label form-label w-100 fw-bolder">Select file</label>
                        <input type="file" class="custom-file-input" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</div>
</div> -->
<!-- End Modal -->


<!-- Edit data modal -->
<!-- Modal -->
<div class="modal fade" id="dataExist" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change Your Profile Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Home/updateUserData/' . $user['id'])?>" method="post" enctype="multipart/form-data">
                    <!-- Heading -->
                    
                    <div class="form-group pb-4">
                        <label for="name">Name</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="name" name="name" placeholder="Your Name..." value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="email">Email</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="email" name="email" placeholder="Your Email..." value="<?= $user['email']; ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="password">Password</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password" name="password" placeholder="Your Password...">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="password2">Re-type Password</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password2" name="password2" placeholder="Repeat Your Password...">
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="age">Age</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="age" name="age" placeholder="Your Age..." value="<?= $user['age']; ?>">
                        <?= form_error('age', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="gender">Gender</label>
                        <div class="mt-2 d-flex">
                            <div class="me-3 custom-control custom-radio ">
                                <label class="custom-control-label weight-400" for="gender">Male</label>
                                <input type="radio" id="gender" name="gender" class="custom-control-input" value="Male">
                            </div>
                            <div class="custom-control custom-radio">
                                <label class="custom-control-label weight-400" for="gender">Female</label>
                                <input type="radio" id="gender" name="gender" class="custom-control-input ms-auto" value="Female">
                            </div>
                        </div>
                        <?= form_error('gender', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="phonenumber" name="phonenumber" placeholder="Your Phone Number..." value="<?= $user['phonenumber']; ?>">
                        <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="job">Job</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="job" name="job" placeholder="Your Job..." value="<?= $user['job']; ?>">
                        <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="address">Address</label>
                        <div class="mt-2 form-floating pb-4" >
                            <textarea class="form-control fst-italic" name="address" id="address" style="height: 200px" value="<?= $user['address']; ?>"></textarea>
                        </div>
                        <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="text-end mb-3 me-4">
                        <button type="submit" class="btn ">Save</button>
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- End Modal -->

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fw fa-angle-up"></i>
  </a>
    <!-- End Footer -->

    <!-- Owl Carousel -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"></script>

    <!-- Load data modal detail -->
    <!-- <script>
        $('.bdetail').click(function(){

            id = $(this).attr('id');
                // alert(id);

            $.post("<?= base_url().'Dashboard/adminDataById/' ?>" + id, {}, function(output){
                //output harus json
                output = JSON.parse(output);

                $("#name").text(output.name);
                $("#email").text(output.email);
                $("#date_time").text(output.date_time);

                $("#detailmodal").modal("show");
            });
            return false;
        });
    </script> -->
    <!-- End -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
  </html>