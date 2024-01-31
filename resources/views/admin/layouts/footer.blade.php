  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
      </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('addmin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('addmin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('addmin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('addmin/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ 'addmin/plugins/sparklines/sparkline.js' }}"></script>
  <!-- JQVMap -->
  <script src="{{ 'addmin/plugins/jqvmap/jquery.vmap.min.js' }}"></script>
  <script src="{{ 'addmin/plugins/jqvmap/maps/jquery.vmap.usa.js' }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ 'addmin/plugins/jquery-knob/jquery.knob.min.js' }}"></script>
  <!-- daterangepicker -->
  <script src="{{ 'addmin/plugins/moment/moment.min.js' }}"></script>
  <script src="{{ 'addmin/plugins/daterangepicker/daterangepicker.js' }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ 'addmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' }}"></script>
  <!-- Summernote -->
  <script src="{{ 'addmin/plugins/summernote/summernote-bs4.min.js' }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ 'addmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ 'addmin/dist/js/adminlte.js' }}"></script>
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="{{ 'addmin/dist/js/demo.js' }}"></script> --}}
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ 'addmin/dist/js/pages/dashboard.js' }}"></script>

  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
      $(document).ready(function() {
          let table = new DataTable('#myTable', {
              // Code below useless
              order: [
                  [1, 'asc']
              ] // 1 is the column index, 'asc' is for ascending order
          });
      });
  </script>

  <script>
      confirmDelete = function(button) {
          var url = $(button).data('url');
          swal({
              'title': 'Konfirmasi Hapus',
              'text': 'Apakah Kamu Ingin Menghapus Data Ini ?',
              'dangerMode': true,
              'buttons': true
          }).then(function(value) {
              if (value) {
                  window.location = url;
              }
          });
      }
  </script>

  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script>
      confirmDelete = function(button) {
          var url = $(button).data('url');
          swal({
              'title': 'Konfirmasi Hapus',
              'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
              'dangermode': true,
              'buttons': true
          }).then(function(value) {
              if (value) {
                  window.location = url;
              }
          })
      }
  </script>
  </body>

  </html>
