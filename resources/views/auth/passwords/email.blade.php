@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="">
                {{ config('app.name') }}
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    You forgot your password? Here you can easily retrieve a new password.
                </p>

                @if ( session()->has('status') )
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">

                    @csrf

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autocomplete="name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    @include('partials.form.error', ['field' => 'email'])

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">
                        Back to login
                    </a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
