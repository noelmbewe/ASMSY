 <!-- jquery-->
    <script src="{{ asset('asmsy_assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('asmsy_assets/js/plugins.js ') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('asmsy_assets/js/popper.min.js ') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('asmsy_assets/js/bootstrap.min.js ') }}"></script>
    <!-- Counterup Js -->
    <script src="{{ asset('asmsy_assets/js/jquery.counterup.min.js ') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('asmsy_assets/js/jquery.waypoints.min.js ') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('asmsy_assets/js/jquery.scrollUp.min.js ') }}"></script>
    <!-- Data Table Js -->
    <script src="{{ asset('asmsy_assets/js/jquery.dataTables.min.js ') }}"></script>
     <!-- Select 2 Js -->
    <script src="{{ asset('asmsy_assets/js/select2.min.js ') }}"></script>
    <!-- Chart Js -->
    <script src="{{ asset('asmsy_assets/js/Chart.min.js ') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('asmsy_assets/js/main.js ') }}"></script>

    
    <!-- Date Picker Js -->
    <script src="{{ asset('asmsy_assets/js/datepicker.min.js ') }}"></script>





  <!-- Page Specific JS File -->
  <script src="{{ asset('asmsy_assets/bundles/datatables/datatables.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/dataTables.buttons.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/buttons.flash.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/jszip.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/pdfmake.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/vfs_fonts.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/bundles/datatables/export-tables/buttons.print.min.js ') }}"></script>
  <script src="{{ asset('asmsy_assets/js/datatables.js ') }}"></script>
  <!-- Template JS File -->
 




<script src="{{ asset('asmsy_assets/plugins/datatables/jquery.dataTables.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/jszip/jszip.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/pdfmake/pdfmake.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/pdfmake/vfs_fonts.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-buttons/js/buttons.html5.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-buttons/js/buttons.print.min.js ') }}"></script>
<script src="{{ asset('asmsy_assets/plugins/datatables-buttons/js/buttons.colVis.min.js ') }}"></script>

 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
