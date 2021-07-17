    <!-- <div class="container"> -->
    <div class="row justify-content-center">
    <div class="col-lg-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <?= $this->session->flashdata('message');?>

                                    <form class="user" method="post" action="<?= base_url('Auth')?>">

                                        <div class="form-group">
                                            <label for="email"> Email </label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Your Email" name="email">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>

                                        <div class="form-group">
                                            <label for="password"> Password </label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Your Password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>

                                        <div class="form-group">
                                            <label for="key"> Admin Veryfication </label>
                                            <input type="key" class="form-control form-control-user"
                                                id="key" placeholder="Enter the admin key" name="key">
                                            <?= form_error('key', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>

                                        <hr>
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('Auth/forgotAdmin'); ?>">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>