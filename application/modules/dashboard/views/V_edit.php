<!-- Outer Row --> 


        
<!-- <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profil</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">
                        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                                    <img src="https://toppng.com/uploads/preview/instagram-default-profile-picture-11562973083brycehrmyv.png" alt="pas-foto" class="avatar-photo" style="object-fit: cover; height: 150px; width: 150px;">
                                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body pd-5">
                                        <div class="img-container">
                                            <img id="image" src="https://toppng.com/uploads/preview/instagram-default-profile-picture-11562973083brycehrmyv.png" alt="Picture">
                                        </div>
                                        <input type="file" class="form-control" name="foto_profil" id="foto-profil">
                                        </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-upload">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center h5 mb-0">Andi Rifqial Nur</h5>
                    <div class="profile-info">
                        <ul>
                            <li>
                                <span>Email Address :</span>
                                lcorn9404@gmail.com
                            </li>
                            <li>
                                <span>No HP :</span>
                                085263563381
                            </li>
                            <li>
                                <span>Alamat :</span>
                                Pintu 0 UNHAS Tamalanrea Makassar
                            </li>
                        </ul>
                    </div>
                    <div class="profile-skills">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Info Lainnya</a>
                                </li>
                            </ul>
                            <div class="tab-content"> -->
                                <!-- Setting Tab start -->
                                <!-- <div class="tab-pane fade show active height-100-p" id="setting" role="tabpanel">
                                    <div class="profile-setting">
                                        <div class="col-md-12" style="margin-top:20px;">
                                                                                        <div id="canvas-pesan"></div>
                                                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Berhasil! Berhasil memperbarui profil !</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                                                                    </div>
                                        <form method="POST" action="https://gemastik.kemdikbud.go.id/backsite/profil" enctype="multipart/form-data">
                                            <input type="hidden" name="_method" value="PUT">                                            <input type="hidden" name="_token" value="bdU0hmpnjVHliSk078riZveS3dt4Qua829un53CZ">                                            <ul class="profile-edit-list row pt-0">
                                                <li class="weight-500 col-md-12 pt-0">
                                                    
                                                                                                                                                                <div class="form-group">
                                                            <label>NIM</label>
                                                            <input class="form-control form-control-lg" type="text" value="42519030" disabled="">
                                                        </div>
                                                                                                        <div class="form-group">
                                                        <label>NIK</label>
                                                        <input class="form-control form-control-lg" type="text" onkeypress="validateNumeric(event)" name="nik" value="7373052708000002" maxlength="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input class="form-control form-control-lg" type="text" name="nama" value="Andi Rifqial Nur" maxlength="255">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Agama</label>
                                                        <input class="form-control form-control-lg" type="text" name="agama" value="Islam" maxlength="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control form-control-lg" type="email" name="email" value="lcorn9404@gmail.com" maxlength="255">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="form-control form-control-lg username" type="text" name="username" value="jellice" maxlength="30">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password" maxlength="255">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal lahir</label>
                                                        <input class="form-control form-control-lg date-picker hasDatepicker" type="text" name="tanggal_lahir" value="2000-08-27" onkeypress="return false;" autocomplete="off" id="dp1625403695854">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <div class="d-flex">
                                                        <div class="custom-control custom-radio mb-5 mr-20">
                                                            <input type="radio" id="customRadio4" name="jk" class="custom-control-input" checked="" value="1">
                                                            <label class="custom-control-label weight-400" for="customRadio4">Laki - Laki</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-5">
                                                            <input type="radio" id="customRadio5" name="jk" class="custom-control-input" value="0">
                                                            <label class="custom-control-label weight-400" for="customRadio5">Perempuan</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kode Pos</label>
                                                        <input class="form-control form-control-lg" type="text" name="kodepos" onkeypress="validateNumeric(event)" value="92671" maxlength="10">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No HP</label>
                                                        <input class="form-control form-control-lg" type="text" name="no_hp" onkeypress="validateNumeric(event)" value="085263563381" maxlength="15">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="alamat" maxlength="500">Pintu 0 UNHAS Tamalanrea Makassar</textarea>
                                                    </div>
                                                    
                                                    <div class="form-group mb-0">
                                                        <input type="submit" class="btn btn-primary" value="SIMPAN">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- Setting Tab End -->
                            <!-- </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <div class="footer-wrap pd-10 mb-10 card-box">
    <small>
        Hak Cipta © 2021
        <a href="https://pusatprestasinasional.kemdikbud.go.id/" target="_blank">Puspresnas</a> |
        Hotline IT
        <a href="https://api.whatsapp.com/send?phone=6285715909068" target="_blank" style="color: green"><b>Klik <i class="fa fa-whatsapp"></i></b></a>
        atau
        <a href="https://t.me/itpuspresnas2021" target="_blank" style="color: blue"><b>Klik <i class="fa fa-telegram"></i></b></a>
        
    </small>
</div>
     -->
<div class="row justify-content-center">

    <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data</h1>
                            </div>
                            
                            <form action="<?= base_url('Dashboard/Edited');?>" method="post">
                                <input type="hidden" name="id" value="<?= $user['id']; ?>">

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter Nama..."  value="<?= $user['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email..." value="<?= $user['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Enter Password..." >
                                </div>
                                <div class="form-group">
                                    <label for="password2">New Password</label>
                                    <input type="text" class="form-control form-control-user" id="password2" name="password2" placeholder="Enter Repeat Password...">
                                </div>

                                <div class="form-group">
                                    <label for="as">User Role : </label>
                                    <select name="as" id="as" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Patient</option>
                                        <option value="3">Doctor</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
