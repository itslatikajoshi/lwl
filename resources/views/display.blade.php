<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="lwl-text-center">Display Data</h2><br>
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
    </div>
</body>

</html>
