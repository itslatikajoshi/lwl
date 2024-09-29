@extends('layouts.layouts')
@section('title', 'Sign Up')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Sign Up</h2>
                <!-- Form for sign up  -->
                {{-- user controller ka store function = user.store it is linking --}}
                <form action="{{ route('user.store') }}" class="lwl-signup" method="POST">
                    @method('POST')
                    {{-- cross site request frogery: it will prevent unauthorized manipulations --}}
                    @csrf
                    <div class="row">
                        <div class="col-sm-6"> <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6"><label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mx-2">Submit</button>
                        <button type="reset" class="btn btn-danger mx-2">Cancel</button>
                    </div>


                </form>


            </div>
        </div>
    </div>
@endsection
