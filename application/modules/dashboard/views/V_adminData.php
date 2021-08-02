<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-body">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="UserData">User Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin Data</li>
            </ol>
        </nav>
    </div>
</div>

<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Admin's Data</h6>
                        </div>
                        
                        <div class="card-body">
                        <a href="<?= base_url('Dashboard/addData')?>" class="btn btn-success mb-5 "> <i class="fas fw fa-plus"></i> Add Admin</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date Time</th>
                                            <th>Activated Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($admin as $admins) : ?>

                                            <tr class="odd">

                                                <td><?= $no++; ?></td>
                                                <td><?= $admins['name'] ?></td>
                                                <td><?= $admins['email'] ?></td>
                                                <td><?= $admins['date_time'] ?></td>
                                                <td><?= $admins['is_active'] ?></td>

                                                <td>
                                                    <a href="" id="<?= $admins['id'] ?>" class="btn btn-info ba_detail">Detail</a>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">Delete</a>
                                                </td>
                                            </tr>
                                            
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<!-- Modal add event -->

<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Event/addEvent')?>" method="post" enctype="multipart/form-data">

                    <div class="form-group pb-4">
                        <label for="name" class="text-dark">Nama</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="name" name="name" placeholder="Your Name...">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="email" class="text-dark">Email</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="email" name="email" placeholder="Your Email..." >
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="phonenumber" class="text-dark">Phone Number</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="phonenumber" name="phonenumber" placeholder="Your Phone Number..." >
                        <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="job" class="text-dark">Job</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="job" name="job" placeholder="Your Job...">
                        <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="password" class="text-dark">Password</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password" name="password" placeholder="Your Password...">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="password2" class="text-dark">Re-type Password</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password2" name="password2" placeholder="Repeat Your Password...">
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="keyy" class="text-dark">Key</label>
                        <input type="text" class="mt-2 form-control form-control-user fst-italic" id="keyy" name="keyy" placeholder="Key permission">
                        <?= form_error('keyy', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group pb-4">
                        <label for="address" class="text-dark">Address</label>
                        <div class="mt-2 form-floating pb-4" >
                            <textarea class="form-control fst-italic" name="address" id="address" style="height: 200px" ></textarea>
                        </div>
                        <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
        </div>
    </div>
</div>
<!-- end Modal -->