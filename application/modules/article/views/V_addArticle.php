
<div class="container-fluid pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <form action="<?= base_url();?>Article/addArticle" method="post">
        <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
                <!-- Custom Text Color Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold">Form Creator Profile</h6>
                    </div>
                    <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">

                                <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/images/default.jpg')?>" style="width:300px; height:260px;"/>

                                <div class="form-group pb-3">
                                    <div class="mt-4 mb-3 text-success"><h6>Creator</h6></div>
                                    <input type="text" class="mt-2 form-control form-control-user fst-italic" id="creator" name="creator" >
                                    <?= form_error('creator', '<small class="text-danger pl-3">', '</small>');?>
                                </div>
                                <div class="form-group pb-3">
                                    <div class="mt-4 mb-3 text-success"><h6>Creator Profile</h6></div>
                                    <input type="file" id="createpro" name="createpro">
                                    
                                </div>
                            </div>
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
                            <h6 class="m-0 font-weight-bold ">Form Article Fill
                            </h6>
                        </div>
                        <div class="card-body pt-3">

                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Title</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="title" name="title">
                                <?= form_error('title', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Slug</h6></div>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="slug" name="slug">
                                <?= form_error('slug', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Description</h6></div>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" style="height: 100px"></textarea>
                                <?= form_error('description', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-3">
                                <div class="mt-4 mb-3 text-success"><h6>Fill</h6></div>
                                <textarea name="fill" id="fill" rows="10" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="mt-4 text-success"><h6>Add Thumbnail</h6></div>
                                <input type="file" name="thumb" id="thumb">
                            </div>

                            <button type="submit" class="mt-5 rounded-3 btn btn-success mb-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    

<!-- Modal -->
<!-- <div class="modal fade" id="speakerProfileModal" data-bs-backdrop="static" tabindex="-1"  aria-hidden="true">
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
</div> -->
<!-- End Modal -->

            