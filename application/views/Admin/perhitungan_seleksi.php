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
                                Perhitungan Seleksi
                            </h2>
                        </div>
                        <form action="<?php echo base_url();?>Admin/Home/proses_seleksi" method="post">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Jenis</th>
                                    <th>Tipe</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                    $c = 1;
                                 foreach($kriteria->result_array() as $p){ ?>
                                    
                                <tr>
                                    <td><?php echo $c; ?></td>
                                    <td><?php echo $p['nama']; ?></td>
                                    <td><?php echo $p['bobot']; ?></td>
                                    <td><?php echo $p['jenis']; ?></td>
                                    <td>
                                        <select class=" form-control" name="tipe[<?php echo $p['id_kriteria'] ?>]">
                                          <option value="">Tipe</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                        </select>
                                    </td>
                                </tr>
                                <?php $c++; } ?>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary m-t-15 waves-effect">Proses Seleksi</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </div>                          
<section>
</div>
