<title>Invoice Attachment</title>

<div class="clearfix">
	<img class="right" src="{{ public_path('front/img/ainfp-ftf.png') }}" height="70px">
</div>

<h1 class="text-center">APPLICATION</h1>

<div class="container">
	<table class="table-border" cellpadding="5">

		<tr>
			<th>Name</th>
			<td>{{ $application->name }}</td>
		</tr>

		<tr>
			<th>Email Address</th>
			<td>{{ $application->email }}</td>
		</tr>

		<tr>
			<th>Country</th>
			<td>{{ $application->country }}</td>
		</tr>

		<tr>
			<th>Phone Number</th>
			<td>{{ $application->phone }}</td>
		</tr>

		<tr>
			<th>Company</th>
			<td>{{ $application->company }}</td>
		</tr>

		<tr>
			<th>Year Established</th>
			<td>{{ $application->year_established }}</td>
		</tr>

		<tr>
			<th>Company Phone</th>
			<td>{{ $application->company_phone }}</td>
		</tr>

		<tr>
			<th>Company Email</th>
			<td>{{ $application->company_email }}</td>
		</tr>

		<tr>
			<th>Physical Address</th>
			<td>{{ $application->physical_address }}</td>
		</tr>

		<tr>
			<th>Form of Business</th>
			<td>{{ $application->form_of_business }}</td>
		</tr>

		<tr>
			<th>Home Office</th>
			<td>{{ $application->home_office }}</td>
		</tr>

		<tr>
			<th>Corporate Partners</th>
			<td>{{ $application->corporate_partners }}</td>
		</tr>

		<tr>
			<th>Employee Number</th>
			<td>{{ $application->employee_number }}</td>
		</tr>

		<tr>
			<th>Annual Revenue</th>
			<td>{{ $application->annual_revenue }}</td>
		</tr>

		<tr>
			<th>Ownership Proportion</th>
			<td>{{ $application->ownership_proportion }}</td>
		</tr>

		<tr>
			<th>Farmers Number</th>
			<td>{{ $application->farmers_number }}</td>
		</tr>

		<tr>
			<th>Products Produced</th>
			<td>{{ $application->products_produced }}</td>
		</tr>

		<tr>
			<th>Major Markets</th>
			<td>{{ $application->major_markets }}</td>
		</tr>

		<tr>
			<th>Potential Markets</th>
			<td>{{ $application->potential_markets }}</td>
		</tr>

		<tr>
			<th>Installed Capacity</th>
			<td>{{ $application->installed_capacity }}</td>
		</tr>

		<tr>
			<th>Financing</th>
			<td>{{ $application->financing }}</td>
		</tr>

		<tr>
			<th>Production Goal</th>
			<td>{{ $application->production_goal }}</td>
		</tr>

		<tr>
			<th>Technology</th>
			<td>{{ $application->technology }}</td>
		</tr>

		<tr>
			<th>NGO Partnerships</th>
			<td>{{ $application->ngo_partnerships }}</td>
		</tr>

		<tr>
			<th>Challenges</th>
			<td>{{ $application->challenges }}</td>
		</tr>

		<tr>
			<th>Interests</th>
			<td>{{ $application->interests }}</td>
		</tr>

		<tr>
			<th>Needs</th>
			<td>{{ $application->needs }}</td>
		</tr>

		<tr>
			<th>Success</th>
			<td>{{ $application->success }}</td>
		</tr>

		<tr>
			<th>Owners</th>
			<td>{{ $application->owners }}</td>
		</tr>

		<tr>
			<th>Premises</th>
			<td>{{ $application->premises }}</td>
		</tr>

	</table>
</div>

<div class="clearfix">
	<img class="right" src="{{ public_path('front/img/ainfp-ftf.png') }}" height="70px">
</div>

@if ($application->owners)
	<h1 class="text-center">BUSINESS OWNERS</h1>

	<div class="text-center">
		<img src="{{ public_path("storage/$application->owners") }}" width="400">
	</div>
@endif

@if ($application->premises)
	<h1 class="text-center">PREMISES</h1>

	<div class="text-center">
		<img src="{{ public_path("storage/$application->premises") }}" width="400">
	</div>
@endif

<style type="text/css">
	.clearfix::after {
		content: "";
		clear: both;
		display: table;
	}
	.right {
		float: right
	}
	.left {
		float: left
	}
	.text-left {
		text-align: left;
	}
	.text-right {
		text-align: right;
	}
	.text-center {
		text-align: center;
	}
	.container {
		margin-bottom: 40px;
	}
	table {
		width: 100%
	}
	th, td {
		font-size: 14px;
	}
	td {
		vertical-align: top;
	}
	th {
		width: 30%;
		text-align: left;
		background: #eee
	}
	.table-border, .table-border th, .table-border td {
		border: 2px solid #aaa;
		border-collapse: collapse;
	}
</style>
