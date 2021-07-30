 
<!-- Start Event Content-->
<section class="pt-5 mt-lg-5">
        <div class="container px-5 my-5">
            <ol class="breadcrumb d-flex justify-content-lg-end">
                <li class="breadcrumb-item">
                  <a class="text-decoration-none" href="<?= base_url('Home/userhome')?>">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-decoration-none" href="<?= base_url('Home/userevent')?>">Event</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Register
                </li>
              </ol>
            <div class="mb-5">
                <h1 class="fw-bolder">Register Event</h1>
                <p class="lead fw-normal text-muted mb-0">Register Event Here</p>
            </div>
        </div>
    </section>
    <!-- Blog preview section-->
    <div class="container pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-5">
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Event Details</h6>
                </div>
                <div class="card-body">
                    <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            
                            <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url('assets/event/speakerProfile/' . $event['speakerProfile']) ?>" style="width:300px; height:260px;">
                            <div class="mt-3 mb-2"><h5><?= $event['speaker']?></h5></div>

                        </div>
                        
                        <hr class="sidebar-divider">

                        <div class="mt-5 mb-2"><h6>Topic </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $event['topic'] ?></div>

                        <div class="mb-2"><h6>Speaker </h6></div>
                        <div class="text-small mb-4 fst-italic text-muted"><?= $event['speaker']?></div>

                        <div class="mb-2"><h6>Due Date</h6></div>
                        <div class="text-small fst-italic text-muted"><?= $event['date']?></div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

            <div class="col-lg-7">
                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Register
                        </h6>
                    </div>

                    <div class="card-body pt-3">
                        <form action="<?= base_url('Event/register/')?>" method="post">
                            <input type="hidden" name="id">
                            <div class="form-group pb-4">
                                <label for="name"> Name </label>
                                <input type="text" class="mt-3 form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email"> Email </label>
                                <input type="text" class="mt-3 form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="quantity"> Quantity </label>
                                <select name="quantity" id="quantity" class="form-control">
                                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?> ticket</option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email"> Price </label>
                                <div class="color-b pt-3"><h5>Rp.<?= number_format($event['price'])?></h5></div>
                            </div>
                            <a href="<?= base_url('Home/eventregistered/' . $event['id'])?>" type="submit" class="mt-3 rounded-3 btn mb-3">Pay</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Even Content -->