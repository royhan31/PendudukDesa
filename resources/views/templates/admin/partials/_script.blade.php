<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/admin/app-assets/vendors/js/material-vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('assets/admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>

<script src="{{ asset('assets/admin/app-assets/vendors/js/charts/chartist.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/buttons.flash.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/jszip.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/buttons.print.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets/admin/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/js/core/app.min.js')}}"></script>
<script src="{{ asset('assets/admin/app-assets/js/scripts/footer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('assets/admin/app-assets/js/scripts/pages/material-app.min.js')}}"></script>
@if(Request::is('/login'))
<script src="{{ asset('assets/admin/app-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
@endif
 <script src="{{ asset('assets/admin/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js')}}"></script>
<!-- END: Page JS-->

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))

		    return false;
		  return true;
		}
	</script>
