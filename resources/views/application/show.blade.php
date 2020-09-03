@extends('layouts.backoffice.master')

@section('title', "#$application->id | Applications")

@section('content')
	<div class="content-wrapper">

		<!-- Content Header (Page header) -->
	    <section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Application #{{ $application->id }}</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">
								<a href="">
									Home
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="{{ route('application.index') }}">
									Applications
								</a>
							</li>
							<li class="breadcrumb-item active">
								#{{ $application->id }}
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
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link active" href="#details" data-toggle="tab">
									Details
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#owners" data-toggle="tab">
									Owners
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#premises" data-toggle="tab">
									Premises
								</a>
							</li>
						</ul>
					</div><!-- /.card-header -->
					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="details">
								<div class="row">
									<div class="col-sm-6">
										<!-- text input -->
										<div class="form-group">
											<label>
												Name
											</label>
											<input value="{{ $application->name }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Email
											</label>
											<input value="{{ $application->email }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Country
											</label>
											<input value="{{ $application->country }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Phone Number
											</label>
											<input value="{{ $application->phone }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Company
											</label>
											<input value="{{ $application->company }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Year Established
											</label>
											<input value="{{ $application->year_established }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Company Phone
											</label>
											<input value="{{ $application->company_phone }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Company Email
											</label>
											<input value="{{ $application->company_email }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Physical Address
											</label>
											<input value="{{ $application->physical_address }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Form of Business
											</label>
											<input value="{{ $application->form_of_business }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Head Office
											</label>
											<input value="{{ $application->head_office }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Installed Capacity
											</label>
											<input value="{{ $application->installed_capacity }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Employee Number
											</label>
											<input value="{{ $application->employee_number }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Annual Revenue
											</label>
											<input value="{{ $application->annual_revenue }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Ownership Proportion
											</label>
											<input value="{{ $application->ownership_proportion }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Farmers Number
											</label>
											<input value="{{ $application->farmers_number }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Products Produced
											</label>
											<input value="{{ $application->products_produced }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Country
											</label>
											<input value="{{ $application->country }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Major Markets
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->major_markets }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Potential Markets
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->potential_markets }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Corporate Partners
											</label>
											<textarea class="form-control" rows="10" readonly>{{ $application->corporate_partners }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Financing
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->financing }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Production Goal
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->production_goal }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Technology
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->technology }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												NGO Partnerships
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->ngo_partnerships }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Challenges
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->challenges }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Interests
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->interests }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Needs
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->needs }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Success
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->success }}</textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<a href="{{ route('application.invoice', $application) }}" target="_blank" class="btn btn-block bg-gradient-primary btn-sm action">
											View Invoice
										</a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="owners">
								@if ( $application->owners )
									<img src="{{ Storage::url($application->owners) }}" width="200" height="200">
								@else
									No owners upload
								@endif
							</div>
							<div class="tab-pane" id="premises">
								@if ( $application->premises )
									<img src="{{ Storage::url($application->premises) }}" width="200" height="200">
								@else
									No premise upload
								@endif
							</div>
						</div>
						<!-- /.tab-content -->
					</div><!-- /.card-body -->
				</div><!-- /.nav-tabs-custom -->
			</div><!-- /.container-fluid -->
	    </section>
	    <!-- /.content -->
 	</div>
@endsection
