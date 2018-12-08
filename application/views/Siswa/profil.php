<?php foreach ($profil->result_Array() as $key)?>
<section class="content">
      <div class="container-fluid">
        <div class="block-header">
            <h3>Profil</h3>
        </div>
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          	<div class="card">
          		<div class="header bg-cyan">
          			<h2 align="center"><?php echo $key['NamaLengkap'];?></h2>
          		</div>
          		<div class="body table-responsive">
                    <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td><?php echo $key['NamaLengkap'];?></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><?php echo $key['NoKTP'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td><?php echo $key['TempatLahir'];?> , <?php echo $key['TanggalLahir'];?></td>
                                    </tr> 
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?php echo $key['JenisKelamin'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td><?php echo $key['Agama'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><?php echo $key['StatusPerkawinan'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <td><?php echo $key['GolDarah'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Hobi</td>
                                        <td><?php echo $key['Hobi'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?php echo $key['Alamat'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
          	</div>
          	<div class="card">
          		<div class="header bg-indigo">
          			<h2>Pendidikan</h2>
          		</div>
          		<div class="body table-responsive">
                    <table class="table table-hover">
                      
                        <tbody>
                        	<tr>
                                <td>Pendidikan Terakhir</td>
                                <td><?php echo $key['Pendidikan'];?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><?php echo $key['Jurusan'];?> / <?php echo $key['NamaSekolah'];?></td>
                            </tr>
                            <tr>
                                <td>IPK</td>
                                <td><?php echo $key['IPK'];?></td>
                            </tr>
                            <tr>
                                <td>Mengajar Di</td>
                                <td><?php echo $key['AsalSekolah'];?></td>
                            </tr>
                        </tbody>
                    </table>
          		</div>
          </div>
          <a href="<?php echo base_url();?>User/Home/edit_profil"><button type="button" class="btn btn-success waves-effect" >Update</button></a>
        </div>
      </div>
</section>