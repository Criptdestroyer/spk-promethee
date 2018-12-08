<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TAMBAH PENGGUNA</h2>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Pengguna
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_pengguna" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" name="nama" class="form-control" required>
                                        <label class="form-label">NAMA</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nip" name="nip" class="form-control" required>
                                        <label class="form-label">NIP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" required>
                                        <label class="form-label">EMAIL</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="handphone" name="handphone" class="form-control" required>
                                        <label class="form-label">Nomor Handphone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="password" name="password" class="form-control" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Hak Akses</label>
                                        <select class="form-control show-tick" name="id_leveling">
                                            <option value="">-- PILIH HAK AKSES --</option>
                                            <?php foreach ($level->result_array() as $bk) {?>
                                                <option value="<?php echo $bk['id_leveling'];?>"><?php echo $bk['Level'];?></option>
                                            <?php } ?>
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