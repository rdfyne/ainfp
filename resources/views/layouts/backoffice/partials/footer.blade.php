<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 1.0.1
	</div>
	<strong>
		Copyright &copy; {{ date('Y') }} 
		<a href="{{ config('app.url') }}">
			{{ request()->getHost() }}
		</a>.
	</strong>
	All rights reserved.
</footer>