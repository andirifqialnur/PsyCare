<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Patient's Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date Time</th>
                                            <th>Role_id</th>
                                            <th>Is_active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($user as $users) : ?>

                                            <tr class="odd">

                                                <td><?= $no++; ?></td>
                                                <td><?= $users['name'] ?></td>
                                                <td><?= $users['email'] ?></td>
                                                <td><?= $users['date_time'] ?></td>
                                                <td><?= $users['role_id'] ?></td>
                                                <td><?= $users['is_active'] ?></td>

                                                <td>
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#detailmodal">Detail</a>
                                                    <a href="<?= base_url()?>Dashboard/formEdit/<?= $users['id'] ?>" class="btn btn-primary">Edit</a>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">Delete</a>

                                                    <!-- Delete toggle -->
                                                    <div id="deletemodal" class="modal fade" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                </div>
                                                                <div class="modal-body">Are you sure want to delete this user?<br>
                                                                You can restore the data when you delete it</div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <a class="btn btn-danger" href="<?= base_url()?>Dashboard/Deleted/<?= $users['id'] ?>">Yes</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Delete toggle -->

                                                    <!-- Detail toggle -->
                                                    <div id="detailmodal" class="modal fade" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">User Detail</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="card mb-3" style="max-width: 540px;">
                                                                        <div class="row g-0">
                                                                            <div class="col-md-4">
                                                                                <img src="" class="img-fluid rounded-start">
                                                                            </div>
                                                                        <div class="col-md-8">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title"><?= $users['name'];?></h5>
                                                                                <p class="card-text"><?= $users['email'];?></p>
                                                                                <p class="card-text"><small class="text-muted">Member Since<?= date('d F Y', $users['date_time']);?></small></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-success" type="button" data-dismiss="modal">Ok</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Detail toggle -->

                                                    <!-- edit toggle -->
                                                    <div id="editmodal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content">
                                                                <div class="row">
                                                                    <div class="col-lg">
                                                                        <div class="p-5">
                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                            <div class="text-center">
                                                                                <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
                                                                            </div>
                                                                            <form class="user" method="post" action="<?= base_url('Dashboard/Edited');?>">

                                                                                <div class="form-group">
                                                                                    <label for="name"> Name </label>
                                                                                    <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="<?= $users['name']?>">
                                                                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="email"> Email </label>
                                                                                    <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="<?= $users['email']?>">
                                                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                        <label for="password"> New Password </label>
                                                                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Your Password" name="password">
                                                                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <label for="password2"> Re-type New Password </label>
                                                                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                                                                    </div>  
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="as"> User Role </label>
                                                                                    <select name="as" id="as" class="form-control">
                                                                                        <option value="1">Admin</option>
                                                                                        <option value="2">Patient</option>
                                                                                        <option value="3">Doctor</option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- <button type="submit" class="btn btn-success btn-user btn-block">
                                                                                    Submit
                                                                                </button> -->

                                                                                <a href="<?= base_url()?>Dashboard/formEdit/<?= $users['id'] ?>" type="submit" class="btn btn-success btn-user btn-block">Submit</a>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end edit toggle -->
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                

                

                    


                