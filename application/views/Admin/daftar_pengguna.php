<section class="content">
<div class="container-fluid">
            <div class="block-header">
                <h2>DAFTAR PENGGUNA</h2>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Pengguna
                            </h2>
                            <div class="pull-right">
                                <a href="<?php echo site_url('Admin/Home/tambah_pengguna'); ?>" class="btn btn-success">Add</a> 
                            </div>
                        </div>
                        <div class="body">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Email</th>
                                    <th>Handphone</th>
                                    <th>Profil Pic</th>
                                    <th>Id Leveling</th>
                                    <th>Actions</th>
                                </tr>
                                <?php foreach($user->result_array() as $p){ ?>
                                <tr>
                                    <td><?php echo $p['id']; ?></td>
                                    <td><?php echo $p['nama']; ?></td>
                                    <td><?php echo $p['nip']; ?></td>
                                    <td><?php echo $p['email']; ?></td>
                                    <td><?php echo $p['handphone']; ?></td>
                                    <td><?php echo $p['profil_pic']; ?></td>
                                    <td><?php echo $p['Level']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/Home/edit_pengguna/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
                                        <a href="<?php echo site_url('Admin/Home/hapus_pengguna/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>                          
<section>