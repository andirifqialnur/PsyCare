<!-- Page Content-->
<div class="position-relative overflow-hidden pt-5 mt-5 text-center">
        <div class="container px-5 my-5">
            <ol class="breadcrumb d-flex justify-content-lg-end">
                <li class="breadcrumb-item">
                  <a class="text-decoration-none" href="<?= base_url('Home/userhome')?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Articles
                </li>
            </ol>
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="px-5 my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-black mb-2">Article</h1>
                        <p class="lead fw-normal text-black-50 mb-4">Here is our update, unique, and hot news and articles</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img src="<?= base_url('assets/svg/undraw_my_personal_files_8krs.svg')?>" class="d-block w-100">
                </div>
        
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" 
                d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,80C960,64,1056,96,1152,
                96C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,
                320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

<section class="">
    <div class="container px-5">
        <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <div class="badge bg-gradient rounded-pill mb-2">News</div>
                            <div class="h2 fw-bolder">Article heading goes here</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique delectus ab doloremque, qui doloribus ea officiis...</p>
                            <a class="text stretched-link text-decoration-none" href="#!">
                                Read more >>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d')"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 mt-5 py-5 bg-light">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-xl-8">
                <h2 class="fw-bolder fs-5 mb-4">News</h2>
                <!-- News item-->
                <div class="mb-4">
                    <div class="small text-muted">May 12, 2021</div>
                    <a class="link-dark" href="#!"><h3>Start Bootstrap releases Bootstrap 5 updates for templates and themes</h3></a>
                </div>
                <!-- News item-->
                <div class="mb-5">
                    <div class="small text-muted">May 5, 2021</div>
                    <a class="link-dark" href="#!"><h3>Bootstrap 5 has officially landed</h3></a>
                </div>
                <!-- News item-->
                <div class="mb-5">
                    <div class="small text-muted">Apr 21, 2021</div>
                    <a class="link-dark" href="#!"><h3>This is another news article headline, but this one is a little bit longer</h3></a>
                </div>
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text text-decoration-none" href="#!">
                        More news >>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <div class="text-center">
                                <div class="h6 fw-bolder">Contact</div>
                                <p class="text-muted mb-4">
                                    For press inquiries, email us at
                                    <br />
                                    <a href="#!">press@domain.com</a>
                                </p>
                                <div class="h6 fw-bolder">Follow us</div>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5">
        <h2 class="fw-bolder fs-5 mb-4">Articles</h2>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d"/>
                    <div class="card-body p-4">
                        <div class="badge bg-gradient rounded-pill mb-2">New</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= base_url('Home/userarticledetail')?>"><div class="h5 fw-bold card-title mb-3">Blog post title</div></a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"/>
                                <div class="small">
                                    <div class="fw-bold">Kelly Rowan</div>
                                    <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-danger bg-gradient rounded-pill mb-2">Hot</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= base_url('Home/userarticledetail')?>"><div class="h5 fw-bold card-title mb-3">Another blog post title</div></a>
                        <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Josiah Barclay</div>
                                    <div class="text-muted">March 23, 2021 &middot; 4 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Coming Soon</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= base_url('Home/userarticledetail')?>"><div class="h5 fw-bold card-title mb-3">The last blog post</div></a>
                        <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Evelyn Martinez</div>
                                    <div class="text-muted">April 2, 2021 &middot; 10 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end mb-5 mb-xl-0">
            <a class="text text-decoration-none" href="#!">
                More articles >>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
</main>