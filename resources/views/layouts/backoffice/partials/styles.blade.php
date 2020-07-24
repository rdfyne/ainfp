<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('backoffice/plugins/fontawesome-free/css/all.min.css') }}">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('backoffice/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

<!-- Toastr Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backoffice/plugins/toastr/toastr.min.css') }}">

<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('backoffice/plugins/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('backoffice/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<!-- Summernote -->
<link rel="stylesheet" href="{{ asset('backoffice/plugins/summernote/summernote-bs4.css') }}">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('backoffice/dist/css/adminlte.min.css') }}">

<style type="text/css">
	a.btn.action {
	    display: inline;
	    margin-right: 10px;
	    color: #fff;
	}
	form label.error {
	    font-weight: 400 !important;
	    font-size: 14px;
	    color: red;
	}
	.swal2-content *:not(#swal2-content) {
	    text-align: left !important;
	}
	.select2-container {
	    z-index: 2099;
	}
</style>

@stack('styles')