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
                <li class="breadcrumb-item"><a href="UserData">Event Data</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
</div>

<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Event</h6>
                        </div>
                        
                        <div class="card-body">
                        <a href="" data-toggle="modal" data-target="#addEvent" class="btn btn-success mb-5 "> <i class="fas fw fa-plus"></i> Add event</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Topic</th>
                                            <th>Speaker</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Via</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($event as $events) : ?>

                                            <tr class="odd">

                                                <td><?= $no++; ?></td>
                                                <td><?= $events['topic'] ?></td>
                                                <td><?= $events['speaker'] ?></td>
                                                <td><?= $events['date'] ?></td>
                                                <td><?= $events['time'] ?></td>
                                                <td><?= $events['via'] ?></td>
                                                <td><?= $events['price'] ?></td>

                                                <td>    
                                                    <a href="<?= base_url()?>Event/editEvent/<?= $events['id'] ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?= base_url()?>Event/deletedEvent/<?= $events['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!-- Modal add event -->

<div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <div class="form-group">
            <label for="topic">Topic</label>
            <input type="text" name="topic" class="form-control">
        </div>

        <div class="form-group">
            <label for="speaker">Speaker</label>
            <input type="text" name="speaker" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" min="<?= date('Y-m-d')?>" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Time</label>
            <input type="time" min="07:00" max="21:00" name="time" class="form-control" required>
            <small>Event hours are 7am to 9pm</small>
        </div>

        <div class="form-group">
            <label for="via">Via</label>
            <select name="via" id="via" class="form-control">
              <option value="1">Online</option>
              <option value="0">Offline</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="speakpro">Speaker Profile</label>
            <input type="file" name="speakpro" class="form-control">
        </div>

        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="file" name="thumb" class="form-control">
        </div>

        <div class="form-group">
            <label for="descript">Description</label>
            <textarea class="form-control" name="descript" id="descript" style="height: 200px"></textarea>
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