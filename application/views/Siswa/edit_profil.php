 <!-- Advanced Form Example With Validation -->
 <section class="content">
 <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Biodata
                    <!--<small>Taken from <a href="https://github.com/rstaib/jquery-steps" target="_blank">github.com/rstaib/jquery-steps</a> & <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>-->
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>INFORMASI PRIBADI</h2>
                            <!--<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>User/Home/proses_update_profil" id="wizard_with_validation" method="POST">
                        
                                <h3>Informasi Personal</h3>
                                <fieldset>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="NIK">NIK KTP</label>
                                            <input type="text" class="form-control" name="NoKTP" placeholder="NIK" required>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="Nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" required>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="Tempat Lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="TempatLahir" id="password" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="tanggal">Tanggal Lahir</label>
                                            <input type="date" id="tanggal" class="form-control" name="TanggalLahir" required>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                         <label for="jeniskelamin">Jenis Kelamin</label>
                                        <div class="demo-radio-button">
                                            <input type="radio" id="laki" class="form-control" name="JenisKelamin" value="Laki-laki" required>
                                            <label for="laki">
                                                Laki - Laki
                                            </label>
                                            <input type="radio" id="perempuan" class="form-control" name="JenisKelamin" value="Perempuan">
                                            <label for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                         <label for="agama">Agama</label>
                                        <div class="demo-radio-button">
                                            <input type="radio" id="islam" class="form-control" name="Agama" value="Islam" required>
                                            <label for="islam">
                                                Islam
                                            </label>
                                            <input type="radio" id="kristen" class="form-control" name="Agama" value="Kristen">
                                            <label for="kristen">
                                                Kristen
                                            </label>
                                            <input type="radio" id="katolik" class="form-control" name="Agama" value="Katolik">
                                            <label for="katolik">
                                                Katolik
                                            </label>
                                            <input type="radio" id="budha" class="form-control" name="Agama" value="BUdha">
                                            <label for="budha">
                                                Budha
                                            </label>
                                            <input type="radio" id="hindu" class="form-control" name="Agama" value="Hindu">
                                            <label for="hindu">
                                                Hindu
                                            </label>
                                            <input type="radio" id="konghucu" class="form-control" name="Agama" value="Konghucu">
                                            <label for="konghucu">
                                                Konghucu
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                         <label for="StatusPerkawinan">Status Perkawinan</label>
                                        <div class="demo-radio-button">
                                            <input type="radio" id="single" class="form-control" name="StatusPerkawinan" value="Belum Menikah" required>
                                            <label for="single">
                                                Belum Menikah
                                            </label>
                                            <input type="radio" id="menikah" class="form-control" name="StatusPerkawinan" value="Menikah">
                                            <label for="menikah">
                                                Menikah
                                            </label>
                                            <input type="radio" id="janda" class="form-control" name="StatusPerkawinan" value="Janda">
                                            <label for="janda">
                                                Janda
                                            </label>
                                            <input type="radio" id="duda" class="form-control" name="StatusPerkawinan" value="Duda">
                                            <label for="duda">
                                                Duda
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                         <label for="GolonganDarah">Golongan Darah</label>
                                        <div class="demo-radio-button">
                                            <input type="radio" id="A" class="form-control" name="GolDarah" value="A" required>
                                            <label for="A">
                                                A
                                            </label>
                                            <input type="radio" id="B" class="form-control" name="GolDarah" value="B">
                                            <label for="B">
                                                B
                                            </label>
                                            <input type="radio" id="AB" class="form-control" name="GolDarah" value="AB">
                                            <label for="AB">
                                                AB
                                            </label>
                                            <input type="radio" id="O" class="form-control" name="GolDarah" value="O">
                                            <label for="O">
                                                O
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label for="Alamat">Alamat</label>
                                        <div class="form-line">
                                            <textarea name="Alamat" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="Hobi">Hobi</label>
                                            <input type="text" class="form-control" name="Hobi" placeholder="Hobi" required>   
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Pendidikan</h3>
                                <fieldset>
                                <div class="form-group">
                                        <div class="form-line">
                                            <label for="AsalSekolah">Mengajar DI</label>
                                            <input type="text" class="form-control" name="AsalSekolah" placeholder="Mengajar Di" required>   
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <label class="form-label">Pendidikan Terakhir</label>
                                            <div data-tap-disabled="true">
                                            <select id="Pendidikan" class="form-control" name="Pendidikan" autocomplete="off">
                                                <option value="SMA"> SMA</option>
                                                <option value="D3"> D3</option>
                                                <option value="D4"> D4</option>
                                                <option value="S1"> S1</option>
                                                <option value="S2"> S2</option>
                                                <option value="S3"> S3</option>
                                            </select> 
                                            </div>  
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <label for="NamaSekolah">Nama Sekolah/Universitas</label>
                                            <input type="text" class="form-control" name="NamaSekolah" placeholder="Nama Sekolah/Universitas" required>   
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <label for="Jurusan">Jurusan</label>
                                            <input type="text" class="form-control" name="Jurusan" placeholder="Jurusan" required>   
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="form-line">
                                            <label for="IPK">NEM / IPK </label>
                                            <input type="number" step="0.01" class="form-control" name="IPK" placeholder="IPK" required>   
                                        </div>
                                </div>
                                </fieldset>

                                <h3>Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">Saya Menyetujui Persyaratan dan Kondisi yang ada, Serta Menyatakan Dengan Benar Bahwa Data yang Saya inputkan Memang Benar</label>
                                </fieldset>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
    </div>
</section>