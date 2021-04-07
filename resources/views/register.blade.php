@extends('layouts.default')

@section('content')
    <div class="card m-auto mt-2" style="max-width: 420px;">
        <h5 class="card-header">Register</h5>
        <div class="card-body bg-light">
            <form method="POST" action="{{ route('auth.register') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="name-input">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name-input" placeholder="Name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email-input">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email-input" placeholder="Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email-input">Password</label>
                    <input type="password" name="password" class="form-control @error('name') is-invalid @enderror" id="password-input" placeholder="Password">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary" value="Register">
            </form>
        </div>
    </div>
@endsection