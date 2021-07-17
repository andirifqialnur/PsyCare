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
            <a class="link-dark small" href="#!">Contact</a>
          </div>
        </div>
      </div>
  </footer>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fw fa-angle-up"></i>
  </a>
    <!-- End Footer -->

    <!-- Owl Carousel -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"></script>

    <!-- Load data modal detail -->
    <!-- <script>
        $('.bdetail').click(function(){

            id = $(this).attr('id');
                // alert(id);

            $.post("<?= base_url().'Dashboard/adminDataById/' ?>" + id, {}, function(output){
                //output harus json
                output = JSON.parse(output);

                $("#name").text(output.name);
                $("#email").text(output.email);
                $("#date_time").text(output.date_time);

                $("#detailmodal").modal("show");
            });
            return false;
        });
    </script> -->
    <!-- End -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
  </html>