@extends('layouts.default')

@section('content')
    <div class="card m-auto mt-2" style="max-width: 420px;">
        <h5 class="card-header">Login</h5>
        <div class="card-body bg-light">
            <form method="POST" action="{{ route('auth.login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="email-input">Email</label>
                    <input type="email" name="email" class="form-control" id="email-input" placeholder="Email">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email-input">Password</label>
                    <input type="password" name="password" class="form-control" id="password-input" placeholder="Password">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" class="form-check-input" value="1" id="remember-checkbox">
                    <label class="form-check-label" for="remember-checkbox">
                        Remember
                    </label>
                </div>

                <input type="submit" class="btn btn-primary" value="Login">
                or <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
            </form>
        </div>
    </div>
@endsection