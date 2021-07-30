
<div class="container-fluid pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <!-- First Column -->
        <div class="col-lg-4">
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Form Presenter Profile</h6>
                </div>
                <div class="card-body">
                <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/event/speakerProfile/' . $event['speakerProfile']) ?>" style="height : 200px; width : 250px;"/>
                            
                            <div class="mt-2 mb-3 text-success"><h6>Speaker Name</h6></div>
                            <p class=" text-dark"><?= $event['speaker']?></p>

                        </div>
                        <hr class="sidebar-divider">

                        <div class="mt-5 mb-3 text-success"><h6>Description</h6></div>
                        <p class=" text-dark"><?= $event['descript']?></p>

                    </div>
                </div>
            </div>
            <!-- Custom Font Size Utilities -->
            
        </div>

            <!-- Second Column -->
            <div class="col-lg-8">

                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Form Data
                        </h6>
                    </div>
                    <div class="card-body pt-3">
                    <form action="<?= base_url();?>Event/editedEvent" method="post">
                        <input type="hidden" name="id" value="<?= $event['id']?>">
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Topic</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="topic" name="topic"  value="<?= $event['topic']?>">
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Speaker</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="speaker" name="speaker"  value="<?= $event['speaker']?>">
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Due Date</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="date" name="date"  value="<?= $event['date']?>">
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Via</h6></div>
                                <select name="via" id="via" class="form-control" value="<?= $event['via']?>">
                                    <option value="1">Online</option>
                                    <option value="0">Offline</option>
                                </select>
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Price</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="price" name="price"  value="<?= $event['price']?>">
                            </div>
                            <div class="form-group">
                                <div class="mt-4 mb-3 text-success"><h6>Description</h6></div>
                                <textarea class="form-control" name="descript" id="descript" style="height: 200px" value="<?= $event['descript']?>"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="mt-4 mb-3 text-success"><h6>Change Speaker Profile</h6></div>
                                <input type="file" name="speakpro" id="speakpro"><br>
                            </div>
                            <div class="form-group">
                                <div class="mt-4 mb-3 text-success"><h6>Add Thumbnail</h6></div>
                                <input type="file" name="thumb" id="thumb"><br>
                            </div> 

                        <button type="submit" class="mt-5 rounded-3 btn btn-success mb-3">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="speakerProfileModal" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change Your Profile Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Event/speakerProfile/' . $event['id'])?>" method="post" enctype="multipart/form-data">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/event/speakerProfile' . $event['speakerProfile'])?>" style="width:300px; height:260px;"/>
                    <h5 class="fw-bolder"><?= $event['speaker'] ?></h5>
                    <div class="fst-italic text-muted pt-2">
                        <p class="text-danger">Only can upload photo below 10MB</p>
                    </div>
                    <div class="form-group pt-4">
                        <label class="custom-control-label form-label w-100 fw-bolder">Select file</label>
                        <input type="file" class="custom-file-input" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- End Modal -->

            