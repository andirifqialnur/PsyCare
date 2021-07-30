 <!-- Footer -->
 <footer class="py-4 mt-auto border-top">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto"><div class="small m-0 text-black">Copyright &copy; Your Website 2021</div></div>
        <div class="col-auto">
          <a class="link-dark small" href="#!">Privacy</a>
          <span class="text-black mx-1">&middot;</span>
          <a class="link-dark small" href="#!">Terms</a>
          <span class="text-black mx-1">&middot;</span>
          <a class="link-dark small" href="<?= base_url('Home/V_contact')?>">Contact</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Button trigger modal -->


<!-- Button trigger modal -->

<!-- Modal register -->
<!-- <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <div class="text-center">
          <h1 class="h4 text-gray-900">Create an Account!</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="user" method="post" action="<?= base_url('Auth/register');?>" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group mt-3">
            <label for="name"> Name </label>
            <input type="text" class="form-control form-control-user mt-2" id="name" placeholder="Enter Your Name" name="name">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="form-group mt-4">
            <label for="email"> Email </label>
            <input type="email" class="form-control form-control-user mt-2" id="email" placeholder="Enter Your Email" name="email">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="form-group row mt-4"> -->
            <!-- first pass -->
            <!-- <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="password" class="mb-2"> Password </label>
              <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Your Password" name="password">
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
            </div> -->
            <!-- second pass -->
            <!-- <div class="col-sm-6">
              <label for="password2" class="mb-2"> Re-Enter Password </label>
              <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
            </div>  
          </div>
          <div class="form-group mt-4 mb-3">    
            <label for="photo" class="mb-2"> Input Image Profile</label>
            <input type="file" class="form-control" id="photo" placeholder="Insert Your Image Profile" name="photo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-user btn-block">Register</button>
        </div>
      </form>
    </div>
  </div>
</div> -->
<!-- end modal register -->

<!-- modal login -->

<!-- end modal login -->


    <!-- Owl Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Owl Carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        var owl = $('.owl-carousel');

        owl.owlCarousel({
            items:4,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
    </script>

  </body>
</html>