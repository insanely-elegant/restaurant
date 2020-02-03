 <div class="footer">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                 Copyright © 2020 - Duane and Toni DeSalvo. All rights reserved. Built by <a href="https://www.insanelyelegant.com/">InsanelyElegant.com</a>.
             </div>

         </div>
     </div>
 </div>

 <!-- jquery 3.3.1 -->
 <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
 <!-- bootstap bundle js -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
 <!-- slimscroll js -->
 <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
 <!-- main js -->
 <script src="assets/libs/js/main-js.js"></script>
 <!-- chart chartist js -->
 <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
 <!-- sparkline js -->
 <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
 <!-- morris js -->
 <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
 <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
 <!-- chart c3 js -->
 <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
 <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
 <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
 <script src="assets/libs/js/dashboard-ecommerce.js"></script>

 <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
 <script src="assets/vendor/local/jquery.dataTables.min.js"></script>
 <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
 <script src="assets/vendor/local/dataTables.buttons.min.js"></script>
 <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
 <script src="assets/vendor/datatables/js/data-table.js"></script>
 <script src="assets/vendor/local/jszip.min.js"></script>
 <script src="assets/vendor/local/pdfmake.min.js"></script>
 <script src="assets/vendor/local/vfs_fonts.js"></script>
 <script src="assets/vendor/local/buttons.html5.min.js"></script>
 <script src="assets/vendor/local/buttons.print.min.js"></script>
 <script src="assets/vendor/local/buttons.colVis.min.js"></script>
 <script src="assets/vendor/local/dataTables.rowGroup.min.js"></script>
 <script src="assets/vendor/local/dataTables.select.min.js"></script>
 <script src="assets/vendor/local/dataTables.fixedHeader.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

 <script type="text/javascript">
     $(document).ready(function() {

         // Multi Select Dropdown with Checkboxes
         $('.multipleSelectTable').multiselect({ // For Table Selection
             buttonWidth: '160px',
             enableFiltering: true,
             nonSelectedText: 'Select an Option',
             includeSelectAllOption: true,
             selectAllJustVisible: false
         });

         $('.multipleSelectDianingDate').multiselect({ // For Dianing Date Selection
             buttonWidth: '160px',
             enableFiltering: true,
             nonSelectedText: 'Select a Date',
             includeSelectAllOption: true,
             selectAllJustVisible: false
         });

         $('.input-group-btn > button.multiselect-clear-filter').find('i').addClass('fa fa-times-circle');
     });
 </script>