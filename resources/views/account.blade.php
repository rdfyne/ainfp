@extends('layouts.backoffice.master')

@section('title', 'Account')

@section('content')
	<div class="content-wrapper">

		<!-- Content Header (Page header) -->
	    <section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Account</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">
								<a href="">
									Home
								</a>
							</li>
							<li class="breadcrumb-item active">
								Account
							</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
			<div class="container-fluid">
				@include('layouts.backoffice.partials.alerts.flash')
				<div class="card">
					<div class="card-body">
						<form action="{{ route('account.update') }}" method="POST">

							@csrf
							@method('PUT')

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>
											Email
										</label>
										<input value="{{ old('email', Auth::user()->email) }}" type="text" name="email" class="form-control">
										
										@include('partials.form.error', ['field' => 'email'])
									</div>
								</div>

								<div class="col-sm-6">
									<!-- text input -->
									<div class="form-group">
										<label>
											Password
										</label>
										<input type="password" name="password" class="form-control">
										
										@include('partials.form.error', ['field' => 'password'])
									</div>
								</div>

								<div class="col-sm-6">
									<!-- text input -->
									<div class="form-group">
										<label>
											Confirm Password
										</label>
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>

								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary btn-block">
										Save
									</button>
								</div>
							</div>
						</form>
					</div><!-- /.card-body -->
				</div>
			</div><!-- /.container-fluid -->
	    </section>
	    <!-- /.content -->
 	</div>
@endsection
