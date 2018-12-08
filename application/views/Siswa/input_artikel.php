<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Upload Artikel</h2>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Upload Artikel
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>User/Home/proses_input_artikel" method="post" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" name="judulartikel" class="form-control" required>
                                        <label class="form-label">Judul Artikel</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <div class="custom-file">
                                        <label class="form-label">Artikel</label>
                                        <input type="file" name="namafile" id="file">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="Keterangan" name="keterangan" class="form-control" required>
                                        <label class="form-label">Keterangan</label>
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