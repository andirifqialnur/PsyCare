 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('Auth');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete toggle -->
    <div id="deletemodal" class="modal fade" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">Are you sure want to delete <h5 id="name"></h5>?<br>
                    You can restore the data when you delete it</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url()?>Dashboard/Deleted/<?= $users['id'] ?>">Yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete toggle -->

<!-- Detail toggle patient -->
    <div id="detailmodal" class="modal fade" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Detail</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 id="name" class="card-title"></h5>
                                    <p id="email" class="card-text"></p>
                                    <p class="card-text"><small class="text-muted">Member Since <span id="date_time"></span></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
<!-- End Detail toggle -->
    
    

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js');?>"></script>

    <script>
        CKEDITOR.replace( 'fill' );
    </script>
    
    <script>
        $( '.custom-file-input' ).on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next( '.custom-file-label' ).addClass("selected").html(filename);
        });
    </script>

    <!-- Load data modal detail for admin -->

    <script>
        // admin
        $('.ba_detail').click(function(){

                id = $(this).attr('id');
                
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
    </script>

    <!-- Load data modal detail for patient-->
    <script>
        // patient
        $('.bdetail').click(function(){

            id = $(this).attr('id');

            $.post("<?= base_url().'Dashboard/patientDataById/' ?>" + id, {}, function(output){
                //output harus json
                output = JSON.parse(output);

                $("#name").text(output.name);
                $("#email").text(output.email);
                $("#date_time").text(output.date_time);

                $("#detailmodal").modal("show");
            });
            return false;
        });
    </script>

    <!-- Load data modal detail for doctor -->
    <script>
        $('.bd_detail').click(function(){

            id = $(this).attr('id');
                // alert(id);

            $.post("<?= base_url().'Dashboard/doctorDataById/' ?>" + id, {}, function(output){
                //output harus json
                output = JSON.parse(output);

                $("#name").text(output.name);
                $("#email").text(output.email);
                $("#date_time").text(output.date_time);

                $("#detailmodal").modal("show");
            });
            return false;
        });
    </script>
    <!-- End -->
    
    <script src="<?= base_url('assets/vendor/jquery/jquery_dash.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    
    <script src="<?= base_url('assets/js/dash_login2.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/chart-area-demo.js');?>"></script>
    <script src="<?= base_url('assets/js/demo/chart-pie-demo.js');?>"></script>

</body>

</html>