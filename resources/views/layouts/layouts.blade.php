<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>{{config('app.name')}} - @yield('title')</title>
    @vite(['resources/scss/styles.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/app.css?ver='). time()}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">{{config('app.name')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('data.display')}}">Display</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about.index')}}">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    {{--   @section('sidebar')
        This is the master sidebar.
    @show --}}

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
