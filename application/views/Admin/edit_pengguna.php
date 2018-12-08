<?php foreach($user->result_array() AS $k)?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>UPDATE PENGGUNA</h2>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Pengguna
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_update_pengguna/<?php echo $k['id'];?>" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $k['nama']; ?>" required>
                                        <label class="form-label">NAMA</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nip" name="nip" class="form-control" value="<?php echo $k['nip']; ?>" required>
                                        <label class="form-label">NIP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $k['email']; ?>" required>
                                        <label class="form-label">EMAIL</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="handphone" name="handphone" class="form-control" value="<?php echo $k['handphone']; ?>" required>
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
                                        <select class="form-control show-tick" name="id_leveling" value="<?php echo $k['id_leveling']; ?>">
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