<section>
  <?php foreach($pengguna->result_array() as $user)?>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('file/foto/').$user['profil_pic']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user['nama'];?></div>
                    <div class="email"><?php echo $user['Level']; ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>Data Peserta</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                              <a href="<?php echo base_url('Admin/Home/daftar_pengguna');?>"><i class="fa fa-gear"></i>Daftar Pengguna</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('Admin/Home/tambah_pengguna');?>"><i class="fa fa-file"></i>Tambah Pengguna</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>Data Kriteria</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                              <a href="<?php echo base_url('Admin/Home/daftar_kriteria');?>"><i class="fa fa-gear"></i>Daftar Kriteria</a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('Admin/Home/tambah_kriteria');?>"><i class="fa fa-file"></i> Tambah Kriteria</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url('Admin/Home/pemilihan_wp');?>">
                            <i class="material-icons">poll</i>
                            <span>Perhitungan Guru Berprestasi</span>
                        </a>
                    </li>
                   <li class="header"></li>
                     <li>
                        <a href="<?php echo base_url('Admin/Home/logout'); ?>">
                            <i class="material-icons">exit_to_app</i>
                            <span>Log out</span>
                        </a>
                    </li>
                    <li class="header"></li>
                  </ul>
            </div>
            <!-- #Menu -->

            <script src="<?php echo base_url();?>asset/jquery.min.js" type="text/javascript"></script>
    <script>
      function cek(){
        $.ajax({
          url:  "<?php echo base_url('myHome/cek_notif'); ?>",
          chace:false,
          success: function(msg){
            $('#notifikasi').html(msg);
          }
        });
        var waktu = setTimeout("cek()",2000);
      }

        $(document).ready(function(){
          cek();
          $('#notif').click(function(){
            $.ajax({
              url:  "<?php echo base_url('myHome/update_notif'); ?>",
            });
          });
        });
    </script>
    <script>
      function validasi(){
        $.ajax({
          url: "<?php echo base_url('myHome/cek_validasi'); ?>",
          cache: false,
          success: function(msg){
            $("#validasi").html(msg);
          }
        });
        var waktu = setTimeout("validasi()",2000);
      }

        $(document).ready(function(){
          validasi();
        });
    </script>
    <script>
      function validasi_t(){
        $.ajax({
          url: "<?php echo base_url('myHome/cek_validasi_t'); ?>",
          cache: false,
          success: function(msg){
            $("#validasi_t").html(msg);
            }
        });
        var waktu = setTimeout("validasi_t()",2000);
      }

        $(document).ready(function(){
          validasi_t();
        });
    </script>
    <script>
      function validasi_e(){
        $.ajax({
          url: "<?php echo base_url('myHome/cek_validasi_e'); ?>",
          cache: false,
          success: function(msg){
            $("#validasi_e").html(msg);
          }
        });
        var waktu = setTimeout("validasi_e()",2000);
      }

        $(document).ready(function(){
          validasi_e();
        });
    </script>
    <script>
      function revisi(){
        $.ajax({
          url: "<?php echo base_url('myHome/cek_revisi'); ?>",
          cache: false,
          success: function(msg){
            $("#revisi").html(msg);
            $("#revisi1").html(msg);
          }
        });
        var waktu = setTimeout("revisi()",2000);
      }

      $(document).ready(function(){
        revisi();
      });
    </script>



            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);"</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.2
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>
