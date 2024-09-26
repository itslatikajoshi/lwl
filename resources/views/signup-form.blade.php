@extends('layouts.layouts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="lwl-text-center">Sign Up</h2>
                <!-- Form for sign up  -->
                {{-- user controller ka store function = user.store it is linking --}}
                <form action="{{ route('user.store') }}" class="lwl-signup p-4 border rounded bg-light"
                    style="max-width: 600px; margin: auto;" method="POST">
                    @method('POST')
                    {{-- Cross-site request forgery: It will prevent unauthorized manipulations --}}
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter your name">
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter your email">
                    </div>

                    <!-- Username Input -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Enter a username">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your password">
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
