                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h1 class="h3 mb-2 text-gray-800">Update Test</h1>
                            <p class="mb-4">Bootstrap's default utility classes can be found on the official <a target="_blank"
                                href="https://getbootstrap.com/docs">page. The custom utilities
                                below were created to extend this theme past the default utility classes built into Bootstrap's
                                framework</a>.</p>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Test</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-4">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Custom Text Color Utilities</h6>
                                </div>
                                <div class="card-body">
                                <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                                    <div class="text-center">
                                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                                        <h5 class="fw-bolder">Andi Rifqial Nur</h5>
                                        <div class="fst-italic text-muted pb-3">Founder &amp; CEO</div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Custom Font Size Utilities</h6>
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
                                    <h6 class="m-0 font-weight-bold text-success">Form Profile
                                    </h6>
                                </div>
                                <div class="card-body">
                                <form action="<?= base_url('Dashboard/formEdit/')?><?= $user['id'] ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                        <div class="form-group">
                                            <label for="name">Test Name</label>
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter Event Name...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Category</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter the title...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Total Number</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Username..." >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Description</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Phone Number..." >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Add Picture</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Job..." >
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Add Picture</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Job..." >
                                        </div>

                                    <button type="submit" class="btn btn-success mt-5">Upload</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
