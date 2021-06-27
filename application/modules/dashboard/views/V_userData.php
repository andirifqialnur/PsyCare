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
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                            <label>Show 
                                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 239.083px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 359.083px;" aria-label="Position: activate to sort column ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 175.083px;" aria-label="Office: activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 86.0833px;" aria-label="Age: activate to sort column ascending">Password</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 166.083px;" aria-label="Start date: activate to sort column ascending">Date Time</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.083px;" aria-label="Salary: activate to sort column ascending">Role_id</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.083px;" aria-label="Salary: activate to sort column ascending">Activation</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150.083px;" aria-label="Salary: activate to sort column ascending">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($user as $users) : ?>

                                    <tr class="odd">

                                        <td><?= $no++; ?></td>
                                        <td class="sorting_1"><?= $users['name'] ?></td>
                                        <td><?= $users['email'] ?></td>
                                        <td><?= $users['password'] ?></td>
                                        <td><?= $users['date_time'] ?></td>
                                        <td><?= $users['role_id'] ?></td>
                                        <td><?= $users['is_active'] ?></td>

                                        <td>
                                            <a href="" class="btn btn-info">Detail</a>
                                            <a href="<?= base_url()?>Dashboard/formEdit<?= $users['id'] ?>" class="btn btn-primary">Edit</a>
                                            <a href="<?= base_url()?>Dashboard/Deleted<?= $users['id'] ?>" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 51 to 57 of 57 entries</div>
                    </div>
                    
                    <div class="col-sm-12 col-md-12">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous" id="dataTable_previous">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                </li>
                                <li class="paginate_button page-item next disabled" id="dataTable_next">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    


                