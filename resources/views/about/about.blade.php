@extends('layouts.layouts')
@section('title', $title)
@section('content')
    <div>
        <h2>{{ $title }}</h2>
        {{ $content }}
    </div>
@endsection
