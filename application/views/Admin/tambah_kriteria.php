<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TAMBAH KRITERIA</h2>
            </div>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Kriteria
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url();?>Admin/Home/proses_tambah_kriteria" method="post">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" name="NamaKriteria" class="form-control" required>
                                        <label class="form-label">NAMA KRITERIA</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" step="0.01" id="nip" name="Bobot" class="form-control" required>
                                        <label class="form-label">Bobot</label>
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