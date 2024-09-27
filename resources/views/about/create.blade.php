@extends('layouts.layouts')
@section('content')
<form action="{{route('about.store')}}">
    @method('POST')
    <div class="mb-3">
        <label for="create-content" class="form-label">Content</label>
        <textarea name="content" id="create-content" class="form-control" rows="10" placeholder="Enter your content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
