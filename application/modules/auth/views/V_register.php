<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" method="post" action="<?= base_url('Auth/register');?>">

                                <div class="form-group">
                                <label for="password2"> Name </label>
                                    <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="<?= set_value('name')?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                                </div>

                                <div class="form-group">
                                    <label for="password2"> Email </label>
                                    <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="<?= set_value('email')?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                                </div>

                                <div class="form-group row">
                                    <!-- first pass -->
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password"> Password </label>
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Your Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    <!-- second pass -->
                                    <div class="col-sm-6">
                                        <label for="password2"> Re-Enter Password </label>
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                    </div>  
                                </div>

                                <div class="form-group">
                                    <label for="as"> Login As </label>
                                    <select name="as" id="as" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Patient</option>
                                        <option value="3">Doctor</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>

                                <hr>
                                <a href="<?= base_url('Auth'); ?>" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="<?= base_url('Auth'); ?>" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>