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
                <li class="breadcrumb-item active" aria-current="page">Doctor Data</li>
            </ol>
        </nav>
    </div>
</div>

<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Doctor's Data</h6>
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
                                            <th>Activated Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($doctor as $doctors) : ?>

                                            <tr class="odd">

                                                <td><?= $no++; ?></td>
                                                <td><?= $doctors['name'] ?></td>
                                                <td><?= $doctors['email'] ?></td>
                                                <td><?= $doctors['date_time'] ?></td>
                                                <td><?= $doctors['is_active'] ?></td>

                                                <td>
                                                    <a href="" id="<?= $doctors['id'] ?>" class="btn btn-info bd_detail" >Detail</a>
                                                    <a href="<?= base_url()?>Dashboard/formEdit/<?= $doctors['id'] ?>" class="btn btn-primary">Edit</a>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">Delete</a>
                                                </td>
                                            </tr>
                                            
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                

                

                

                    


                