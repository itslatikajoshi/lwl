@extends('layouts.layouts')
@section('content')
    <h2 class="text-center">Display Data</h2><br>
    <!-- Display success message if it exists -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['email'] }}</td>
                    <td>{{ $row['created_at'] }}</td>
                    <td>{{ $row['updated_at'] }}</td>
                    <td> <a href="{{ route('data.edit', $row['id']) }}" class="btn btn-primary">Edit</a>
                        <!-- Edit link -->
                        {{-- <a href="{{ route('data.delete', $row['id']) }}" class="btn btn-primary">Edit</a> <!-- Delete link --></td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
