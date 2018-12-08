<!--  <script type="text/javascript">
        function add_chatinline(){
          var hccid=90375079;
          var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;
          var ct=document.getElementsByTagName("script")[0];

          ct.parentNode.insertBefore(nt,ct);
        }
        add_chatinline();
  </script>
-->
  <!-- Jquery Core Js -->
  <script src="<?php echo base_url();?>/asset/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo base_url();?>/asset/plugins/bootstrap/js/bootstrap.js"></script>

  <!-- Select Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/node-waves/waves.js"></script>

  <!-- Jquery CountTo Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/jquery-countto/jquery.countTo.js"></script>

  <!-- Morris Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url();?>/asset/plugins/morrisjs/morris.js"></script>

  <!-- ChartJs -->
  <script src="<?php echo base_url();?>/asset/plugins/chartjs/Chart.bundle.js"></script>

  <script src="<?php echo base_url();?>/asset/vendors/switchery/dist/switchery.min.js"></script>

  <!-- Flot Charts Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/flot-charts/jquery.flot.js"></script>
  <script src="<?php echo base_url();?>/asset/plugins/flot-charts/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url();?>/asset/plugins/flot-charts/jquery.flot.pie.js"></script>
  <script src="<?php echo base_url();?>/asset/plugins/flot-charts/jquery.flot.categories.js"></script>
  <script src="<?php echo base_url();?>/asset/plugins/flot-charts/jquery.flot.time.js"></script>

  <!-- Sparkline Chart Plugin Js -->
  <script src="<?php echo base_url();?>/asset/plugins/jquery-sparkline/jquery.sparkline.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo base_url();?>/asset/js/admin.js"></script>
  <script src="<?php echo base_url();?>/asset/js/pages/index.js"></script>

  <!-- Demo Js -->
  <script src="<?php echo base_url();?>asset/js/demo.js"></script>

  <!-- Parsley-->
  <script src="<?php echo base_url();?>asset/vendors/parsleyjs/dist/parsley.min.js"></script>



  <script type="text/javascript">
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
          $('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form2').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": false
        });
    $('#example2 thead').detach();
    $('#example3').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": false
        });
    $('#example3 thead').detach();
    $('#example4').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": false,
          "autoWidth": false,
      "pageLength": 20
        });
    $('#example4 thead').detach();
    $('#example7').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": false,
          "autoWidth": false,
      "pageLength": 20
        });
    $('#example7 thead').detach();
      });
    </script>
</body>

</html>
