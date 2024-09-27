@extends('layouts.layouts')
@section('title', 'Sign Up')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Sign Up</h2>
                <!-- Form for sign up  -->
                {{-- user controller ka store function = user.store it is linking --}}
                <form action="{{ route('user.store') }}" class="lwl-signup">
                    @method('POST')
                    {{-- cross site request frogery: it will prevent unauthorized manipulations --}}
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" class="lwl-button">Submit</button>
                    <button type="reset" class="lwl-button">Cancel</button>

                </form>


            </div>
        </div>
    </div>
@endsection
