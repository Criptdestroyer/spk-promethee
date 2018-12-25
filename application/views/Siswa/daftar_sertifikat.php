<?php
  foreach($siswa->result_array() as $key)
  foreach ($nilaiun->result_array() as $nilai)
?>
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
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h2 class="card-title">
                                Daftar Sertifikat
                            </h2>
                          </div>
                        <div class="card-body  box-profile">
                               <ul class="products-list product-list-in-card">
                                <?php foreach($sertifikat->result_array() as $sert) {
                                ?>
                                  <li class="item">
                                    <div class="product-img">
                                      <img src="<?php echo base_url();?>file/dokumen/<?php echo $sert['FileSertifikat'];?>" alt="Product Image" width="100px">
                                    </div>
                                    <div class="product-info">
                                      <a target="blank" href="<?php echo base_url();?>file/dokumen/<?php echo $sert['FileSertifikat'];?>" class="product-title"><?php echo $sert['NamaSertifikat'];?></a>
                                      
                                    </div>
                                  </li>
                                 <?php } ?>
                                </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>