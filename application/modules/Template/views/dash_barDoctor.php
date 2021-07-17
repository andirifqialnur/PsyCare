    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar bg-gradient-success sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-shapes"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PsyCare</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Activity
            </div>
            
            <!-- Nav Item - Schedule Info -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard/schedule');?>">
                    <i class="fas fa-fw fa-calendar-day"></i>
                    <span>Schedule</span>
                </a>
            </li>

            <!-- Nav Item - Update Info -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard/articleDoctor');?>">
                    <i class="fas fa-fw fa-info"></i>
                    <span>Add Article</span>
                </a>
            </li>
            
            <!-- Nav Item - Update Info -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard/updatedTest');?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Add Test</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Authentication
            </div>

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Dashboard/profile');?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Edit Profile</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item pb-3">
                <a class="nav-link" href="<?= base_url('Home')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?= base_url('assets/img/undraw_rocket.svg'); ?>" alt="...">
                <p class="text-center mb-2"><strong>PsyCare</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="top-app-bar navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('Dashboard');?>" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $doctor['name'];?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/lollipop.jpg');?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('Home/userhome');?>">
                                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Home
                                </a>
                                <a class="dropdown-item" href="<?= base_url('Dashboard');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- logoutModal toggle -->
                <div id="logoutModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-success" href="<?= base_url ('Auth/doctor');?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End logoutModal toggle -->

                