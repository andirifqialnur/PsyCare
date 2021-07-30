    <!-- Start Event Content-->
    <section class="pt-5 mt-lg-5">
        <div class="container px-5 my-5">
            <ol class="breadcrumb d-flex justify-content-lg-end">
                <li class="breadcrumb-item">
                  <a class="text-decoration-none" href="<?=base_url('Home/userhome')?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Event
                </li>
              </ol>
            <div class="mb-5">
                <h1 class="fw-bolder">Psychologic Event</h1>
                <p class="lead fw-normal text-muted mb-0">Refresh Your Mind and Soul</p>
            </div>
        </div>
    </section>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder mb-4" style="font-size: 40px;">Events</h2>
            <div class="row gx-5">

                <?php foreach ($event as $events) : ?>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="<?= base_url('assets/event/speakerProfile/' . $events['thumbnail'])?>" style="width: 376px; height: 350px;"/>
                        <div class="card-body p-4">
                            <div class="badge bg-gradient rounded-pill mb-2">Rp.<?= number_format($events['price'])?></div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3 fw-bold"><?= $events['topic']?></div></a>
                            <p class="card-text mb-0"><?= $events['descript']?></p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="<?= base_url('assets/event/speakerProfile/' . $events['speakerProfile'])?>" style="width: 40px; height: 40px;"/>
                                    <div class="small col-sm-9">
                                        <div class="fw-bold"><?= $events['speaker']?></div>
                                        <div class="text-muted"><?= $events['date']?> <?= $events['time']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <a href="<?= base_url()?>Home/eventregister/<?= $events['id'] ?>" type="button" class="btn mt-3"><i class="fas fw fa-plus pe-3"></i>Register</a>
                </div>
                <?php endforeach; ?>

            </div>
    </section>
    <!-- End Even Content -->