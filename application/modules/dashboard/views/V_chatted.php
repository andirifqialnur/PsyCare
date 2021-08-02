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
                <li class="breadcrumb-item"><a href="UserData">Chatted Data</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
</div>

<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Chatted</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Patient</th>
                                            <th>Email</th>
                                            <th>Date Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($chatted as $chattedd) : ?>

                                            <tr class="odd">

                                                <td><?= $no++; ?></td>
                                                <td><?= $chattedd['name'] ?></td>
                                                <td><?= $chattedd['email'] ?></td>
                                                <td><?= $chattedd['date_time'] ?></td>

                                                <td>    
                                                    <a href="<?= base_url()?>Article/detailArticle/<?= $chattedd['id'] ?>" class="btn btn-primary">Detail</a>
                                                    <a href="<?= base_url()?>Article/deletedArticle/<?= $chattedd['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>