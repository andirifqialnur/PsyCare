  <!-- Start PsyTest -->
    <section class="pt-5 mt-5">
        <div class="container px-5 my-5">
          <ol class="breadcrumb d-flex justify-content-lg-end">
            <li class="breadcrumb-item">  
              <a class="text-decoration-none" href="<?= base_url('Home/userhome')?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              PsyTest
            </li>
          </ol>
            <div class="mb-5">
                <h1 class="fw-bolder">Psychologic Test</h1>
                <p class="lead fw-normal text-muted mb-0">Check your Personality</p>
            </div>
            <div class="row gx-5">
              <?php foreach ($test as $tests) : ?>
                <div class="col-lg-4">
                    <div class="bg-white mb-5 d-flex align-items-center rounded-3 mb-3" style="background-image: url('<?= base_url('assets/test/' . $tests['thumbnail'])?>'); height: 400px;">
                        <a class="ps-5 h3 fw-bolder text-decoration-none" href=""><?= $tests['testname']?><br></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
  <!-- End PsyTest -->