<!-- <div class="container"> -->
<div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                </div>

                                <form class="user" method="post" action="<?= base_url('Auth/regisDoctor');?>" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="<?= set_value('name');?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"> Email </label>
                                        <input type="text" class="form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="<?= set_value('email');?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <!-- first pass -->
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="password" > Password </label>
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Your Password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <!-- second pass -->
                                        <div class="col-sm-6">
                                            <label for="password2" > Re-Enter Password </label>
                                            <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                        </div>  
                                    </div>

                                    <div class="form-group">
                                        <label for="phonenumber"> Phone Number </label>
                                        <input type="text" class="form-control form-control-user" id="phonenumber" placeholder="Enter Your Phone Number" name="phonenumber" value="">
                                        <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>

                                    <div class="form-group">
                                        <label for="experience"> Experience </label>
                                        <input type="text" class="form-control form-control-user" id="experience" placeholder="Enter Your Experience" name="experience" value="">
                                        <?= form_error('experience', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="photo"> Input Image Profile </label>
                                        <input type="file" class="form-control form-control-user pb-5" id="photo" placeholder="Insert Your Image Profile" name="photo">
                                        <?= form_error('photo', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Register
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth/doctor');?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->