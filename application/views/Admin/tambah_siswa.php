<div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sistem Pengambil Keputusan</h1>
          </div><!-- /.col -->
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h2 class="card-title">
                                Tambah Pengguna
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_pengguna" method="post">
                                <div class="form-group">
                                  <div class="col-sm-6">
                                  <label>NAMA</label>
                                  <input type="text" id="nama" name="nama" class="form-control" required>       
                                </div>
                                </div>
                                <div class="form-group ">
                                  <div class="col-sm-6">
                                    <label class="form-label">NIP</label>

                                        <input type="text" id="nip" name="nip" class="form-control" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" required>
                                        <label class="form-label">EMAIL</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="form-line">
                                        <input type="text" id="handphone" name="handphone" class="form-control" required>
                                        <label class="form-label">Nomor Handphone</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="form-line">
                                    <label class="form-label">Hak Akses</label>
                                        <select class="form-control show-tick" name="id_leveling">
                                            <option value="">-- PILIH HAK AKSES --</option>
                                        </select>
                                        
                                    </div>
                                </div>                            
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">TAMBAH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>