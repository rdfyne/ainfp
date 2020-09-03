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
							@if ($application->brand_document)
								<li class="nav-item">
									<a class="nav-link" href="{{ route('application.brand_document', $application) }}" target="_blank">
										Brand Document
									</a>
								</li>
							@endif
							<li class="nav-item">
							    <a href="{{ route('application.attachment', $application) }}" target="_blank" class="nav-link">
									Download in PDF
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
												Full Name
											</label>
											<input value="{{ $application->name }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Email Address
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
												Company Name
											</label>
											<input value="{{ $application->company }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Year of Establishment
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
												Physical Address and GPS Coordinates
											</label>
											<input value="{{ $application->physical_address }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Form of business registration (LLC, Coop, etc)
											</label>
											<input value="{{ $application->form_of_business }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Is this a subsidiary of another business? If yes, where is home office
											</label>
											<input value="{{ $application->home_office }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Installed/Operating Capacity (Mt/day or litres/day)
											</label>
											<input value="{{ $application->installed_capacity }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Number of Employees (full time/part time; male/female)
											</label>
											<input value="{{ $application->employee_number }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Annual Revenue ($/year)
											</label>
											<input value="{{ $application->annual_revenue }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Business Ownership: Male/Female proportion
											</label>
											<input value="{{ $application->ownership_proportion }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Number of Farmers Supported
											</label>
											<input value="{{ $application->farmers_number }}" type="text" class="form-control" readonly>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Primary/Main Product(s) produced (level/frequency) e.g 10MT/Day of fortified maize Flour. (If producing more than one product, ONLY provide information for the main one)
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
												Major markets/buyers
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->major_markets }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Are you currently targeting or have potential and interest in Bottom of Pyramid market?
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->potential_markets }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Are you in a commercial relationship with any of the PFS corporate partners (General Mills, Cargill, DSM, Buhler, The Hershey Company, Ardent Mills and The J.M. Smucker Company)? If yes which one(s)
											</label>
											<textarea class="form-control" rows="10" readonly>{{ $application->corporate_partners }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Any financing (loan/equity)? If yes, with whom, what amount, what for, interest rate and term of financing
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->financing }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Where do you expect your Annual Revenue to be in 3 years? Explain any other production goal in addition to Revenue
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->production_goal }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												What types of machinery and technology do you use
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->technology }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Outline any active partnerships you have with other donors or NGOs
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->ngo_partnerships }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												Any other information that is important for us to know
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->challenges }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												What is your primary interest in partnering with the Alliance for Inclusive and Nutritious Food Processing? * (Max 700 words)
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->interests }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												What are the gaps/ opportunities that you envision your business benefiting from as a result of this partnership? * (Max 700 words)
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->needs }}</textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>
												What would be the desired results/outcomes for your business as a result of engagement with this partnership? * (Max 700 words)
											</label>
											<textarea type="text" class="form-control" rows="10" readonly>{{ $application->success }}</textarea>
										</div>
									</div>
								</div>
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
