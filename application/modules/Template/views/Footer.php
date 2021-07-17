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
            items:3,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
    </script>

  </body>
</html>