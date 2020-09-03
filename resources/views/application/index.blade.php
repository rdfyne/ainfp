@extends('layouts.backoffice.master')

@section('title', 'Applications')

@section('content')
	<div class="content-wrapper">

		<!-- Content Header (Page header) -->
	    <section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Applications</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">
								<a href="">
									Home
								</a>
							</li>
							<li class="breadcrumb-item active">
								Applications
							</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-striped" id="group-table">
							<thead>                  
								<tr>
								  <th>No.</th>
								  <th>Name</th>
								  <th>Email</th>
								  <th>Country</th>
								  <th>Phone Number</th>
								  <th>Company</th>
								  <th>Actions</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
	    </section>
	    <!-- /.content -->
 	</div>
@endsection

@push('scripts')
	<script type="text/javascript">

		$(document).ready( function () {

			let table = $('#group-table').DataTable({

				dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-8'p>>",
				scrollX: true,
				order: [],
				columnDefs: [{
                    searchable: false,
                    orderable: false,
                    targets: 0
                }],
		        info: false,
			    serverSide: true,
			    processing: true,
			    ajax: @json( route('application.index.api') ),
			    columns: [

			    	{
			    	    data: "no",
			    	    render: () => ''
			    	},
		            {data: "name"},
		            {data: "email"},
		            {data: "country"},
		            {data: "phone"},
		            {data: "company"},
		            {
		            	data: "action",
		            	orderable: false,
		            	width: "450px",
		            	render(data, type, row) {

					        return `
					        	<a href="${row.hateoas.show}" class="btn btn-block bg-gradient-primary btn-sm action">
									<i class="fa fa-eye"></i>
									&nbsp; View
								</a>
								
								<a href="${row.hateoas.attachment}" target="_blank" class="btn btn-block bg-gradient-secondary btn-sm action">
									Download in PDF
								</a>

								<a onclick='deleteApplication(${JSON.stringify(row)})' class="btn btn-block bg-gradient-danger btn-sm action">
									<i class="fa fa-times-circle"></i>
									&nbsp; Delete
								</a>
					        `;
					    }
		            },
		        ],
		        buttons: {

			        buttons: [
			            {
			                text: 'Export to Excel',
			                action: () => window.open(

			                	@json( route('application.export') ), 
			                	'_blank'
		                	)
			            }
			        ]
			    }
			})
			
			table.on( 'draw.dt', function () {

		    	var PageInfo = $('#group-table').DataTable().page.info()

		        table.column(0, {

		        	page: 'current'
		        })
		        .nodes()
		        .each( function (cell, i) {
		        	
		            cell.innerHTML = i + 1 + PageInfo.start;
		        })
		    })
		})

		function deleteApplication(application) {

			Swal.fire({

				title: 'Are you sure to delete application?',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete!',
				allowOutsideClick: false,
				showLoaderOnConfirm: true,
				preConfirm: () => {

					return $.ajax({

						url: application.hateoas.delete,
						type: 'DELETE'
					})
					.done(() => {

						$.fn.dataTable.tables({

							visible: true,
							api: true
						})
						.row(

							(index, data, node) => data.id == application.id
						)
						.remove()
						.draw()

						toastr.success('Application has been deleted.')
					})
					.catch(error => {

						console.error(error)

						toastr.error(`Request failed: ${error.responseJSON.message}`)
					})
				}
			})
		}

	</script>
@endpush
