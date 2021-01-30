<!-- Footer -->
<footer class="footer">
               <p class="font-weight-bold ml-1" target="_blank" align="center">&copy; 2019 Sistem Informasi 5A</p>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('asset/vendor/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Optional JS -->
  <script src="<?= base_url('asset/vendor/chart.js/dist/Chart.min.js') ?>"></script>
  <script src="<?= base_url('asset/vendor/chart.js/dist/Chart.extension.js') ?>"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.20/pagination/simple_numbers_no_ellipses.js"></script>
<script type="text/javascript">

$(document).ready( function () {
    $('#myTable').DataTable({"pagingType": "numbers"});
} );
</script>

<script type="text/javascript">
$(document).ready( function () {
    $('#myTable1').DataTable({"pagingType": "numbers"});
} );
</script>
  
  <!-- Argon JS -->
  <script src="<?= base_url('asset/js/argon.js?v=1.0.0') ?>"></script>
  <!-- Datepicker -->
  <script src="<?= base_url('asset/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
  <!-- SWEETALERT -->
  <script src="<?= base_url('asset/vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>
  <!-- Custom JS -->
  <script src="<?= base_url('asset/js/script.js') ?>"></script>



  <?php
    $pesan = $this->session->flashdata('berhasil');
    if(!empty($pesan)):
  ?>
    <!-- SCRIPT SWEETALERT INLINE -->
    <script>
      $(window).on('load',function(){
        let pesan = "<?= $pesan ?>";
        swal('Berhasil!',pesan,'success');
      });
    </script>
  <?php endif; ?>

  <?php
    $pesan = $this->session->flashdata('berhasilHapus');
    if(!empty($pesan)):
  ?>
    <script>
      $(window).on('load',function(){
        let pesan = "<?= $pesan ?>";
        swal('Berhasil!',pesan,'success');
      });
    </script>
  <?php endif; ?>  

  <?php
    $pesan = $this->session->flashdata('dataNull');
    if(!empty($pesan)):
  ?>
    <script>
      $(window).on('load',function(){
        let pesan = "<?= $pesan ?>";
        swal('Oops!',pesan,'error');
      });
    </script>
  <?php endif; ?>  
</body>

</html>