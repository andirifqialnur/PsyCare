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
                <div class="modal-body">Are you sure want to delete ?<br>
                    You can restore the data when you delete it</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url()?>Dashboard/Deleted/<?= $doctors['id'] ?>">Yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete toggle -->

    <!-- Detail toggle -->
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
                                    <p class="card-text"><small class="text-muted">Doctor Member Since <span id="date_time"></span></small></p>
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

        <!-- edit toggle -->
        <div id="editmodal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('Dashboard/Edited');?>">
                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Your Name" name="name" value="<?= $doctors['name']?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> Email </label>
                                        <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Your Email" name="email" value="<?= $doctors['email']?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="password"> New Password </label>
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Enter Your Password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="password2"> Re-type New Password </label>
                                            <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <label for="as"> User Role </label>
                                            <select name="as" id="as" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Patient</option>
                                                <option value="3">Doctor</option>
                                            </select>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-success btn-user btn-block">
                                        Submit
                                    </button> -->
                                    <a href="<?= base_url()?>Dashboard/formEdit/<?= $doctors['id'] ?>" type="submit" class="btn btn-success btn-user btn-block">Submit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end edit toggle -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"></script>

    <!-- Load data modal detail -->
    <script>
        $('.bdetail').click(function(){

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