<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>Daftar Kriteria</h1>
        </div>
        <div class="row clearfix">
        
        <div class="card">
                        <div class="header">
                            <h2>Tabel Kriteria</h2>
                            <div class="pull-right">
            <a href="<?php echo site_url('Admin/Home/tambah_kriteria'); ?>" class="btn btn-success">Add</a> 
        </div>
                        </div>
                        <div class="body">
        <table class="table table-striped table-bordered">
           <tr>
               <th>NamaKriteria</th>
               <th>Bobot</th>
               <th>Sub Kriteria</th>
               <th>Actions</th>
           </tr>
           <?php 
                
                foreach($kriteria->result_array() AS $k){ ?>
           <tr>
                <td><?php echo $k['NamaKriteria']; ?></td>
                <td><?php echo $k['Bobot']; ?></td>
                <td><?php 
                        foreach ($subkriteria->result_array() as $key) {
                            if($key['id_kriteria']==$k['id_kriteria']){
                                echo $key['subkriteria'];?><br><?php
                            }
                        }
                       ?>
                </td>
                <td>
                    <a href="<?php echo site_url('Admin/Home/edit_kriteria/'.$k['id_kriteria']); ?>" class="btn btn-info btn-xs">Edit</a> 
                    <a href="<?php echo site_url('Admin/Home/hapus_kriteria/'.$k['id_kriteria']); ?>" class="btn btn-danger btn-xs">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
            </div>
            </div>
    </div>
</section>
        