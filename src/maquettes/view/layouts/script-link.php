   <!-- scripts -->
   <!-- jQuery -->
   <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
       $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- ChartJS -->
   <script src="../../node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
   <!-- Sparkline -->
   <script src="../../node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
   <!-- JQVMap -->
   <script src="../../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
   <script src="../../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
   <!-- jQuery Knob Chart -->
   <script src="../../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
   <!-- daterangepicker -->
   <script src="../../node_modules/admin-lte/plugins/moment/moment.min.js"></script>
   <script src="plugins/daterangepicker/daterangepicker.js"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote -->
   <script src="../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="../../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../node_modules/admin-lte/dist/js/adminlte.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="../../node_modules/admin-lte/dist/js/demo.js"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="../../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>
   <script src="../../node_modules/admin-lte/dist/js/validationForm.js"></script>
   <!-- scripts -->
   
   <script>
       tinymce.init({
           selector: '#inputDescription',
           height: 300, // Set the height of the editor
           menubar: false, // Hide the menu bar
           plugins: [
               'advlist autolink lists link image charmap print preview anchor',
               'searchreplace visualblocks code fullscreen',
               'insertdatetime media table paste code help wordcount'
           ],
           toolbar: 'undo redo | formatselect | bold italic backcolor | \
                   alignleft aligncenter alignright alignjustify | \
                   bullist numlist outdent indent | removeformat | help'
       });
   </script>