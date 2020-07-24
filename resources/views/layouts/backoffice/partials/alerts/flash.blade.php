@if ( session()->has('success') )

    <div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h5>
			<i class="icon fas fa-check"></i> Success!
		</h5>
		{{ session()->get('success') }}.
	</div>

@elseif ( session()->has('error') )

	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h5>
			<i class="icon fas fa-check"></i> Failed!
		</h5>
		{{ session()->get('error') }}.
	</div>

@endif