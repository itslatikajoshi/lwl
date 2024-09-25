<form action="{{ route('data.update', $row->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Use PUT for updating -->

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $row->name }}">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $row->email }}">
    </div>

    <button type="submit">Update</button>
</form>
