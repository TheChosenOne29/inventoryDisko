<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{--  --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="https://diskominfotik.lampungprov.go.id/uploads//photos/1/logo.png" width="150" height="40" alt="">
      </a>
    </nav>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/barang">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/barang/add">Add</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              @if (auth()->user())
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            @else
              <a href="/login" class="btn btn-primary">Login</a>
            @endif
            </ul>
          </div>
        </div>
      </nav>
  </head>

  <body>
    <div class="container mt-4">
        @yield('content')
    </div>
  </body>
</html>