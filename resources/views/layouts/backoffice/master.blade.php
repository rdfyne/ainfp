<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title') - Dashboard - {{ config('app.name') }}
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('layouts.backoffice.partials.styles')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

          @include('layouts.backoffice.partials.navbar')

          @include('layouts.backoffice.partials.sidebar')

          @yield('content')
          
          @include('layouts.backoffice.partials.footer')

        </div>
        <!-- ./wrapper -->

        @include('layouts.backoffice.partials.scripts')
    </body>
</html>
