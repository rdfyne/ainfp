<!-- jQuery -->
<script src="{{ asset('backoffice/plugins/jquery/jquery.min.js') }}"></script>

<!-- jquery-validation -->
<script src="{{ asset('backoffice/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<script src="{{ asset('backoffice/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('backoffice/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- SweetAlert2 -->
<script src="{{ asset('backoffice/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('backoffice/plugins/toastr/toastr.min.js') }}"></script>

<!-- bs-custom-file-input -->
<script src="{{ asset('backoffice/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Select2 -->
<script src="{{ asset('backoffice/plugins/select2/js/select2.full.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('backoffice/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('backoffice/dist/js/adminlte.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backoffice/dist/js/demo.js') }}"></script>

<script type="text/javascript">

	bsCustomFileInput.init()

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	})

</script>

@stack('scripts')
