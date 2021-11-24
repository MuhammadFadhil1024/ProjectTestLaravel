<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PT. Kelapasawit</title>
  </head>


  <body>

    {{-- start navbar --}}

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" href="#">Home</a>
                @if (Route::has('login'))
                @auth
                    <a class="nav-link active" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}" >Register</a>
                    @endif
                @endauth
                @endif
              </div>
              <a href="/kritik" class="text-black">kritik dan saran</a>
              <a href="{{ route('logout') }}">Logout</a>
            </div>
          </div>
          </nav>
    </div>

    {{-- End of navbar --}}
    <div class="container mt-5">
      @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
          @php
              Session::forget('success');
          @endphp
      </div>
      @endif
    <div class="container mt-5">
      <div class="card" style="width: 80%;">
        <div class="card-body">
          <h5 class="card-title">Kritik dan Saran</h5>
            <form action="/komentar/store" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              @if ($errors->has('email'))
              <span class="text-danger small">
                <p>{{$errors->first('email')}}</p>
              </span>
              @endif
              <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="nama">
              </div>
              @if ($errors->has('nama'))
              <span class="text-danger small">
                <p>{{$errors->first('nama')}}</p>
              </span>
              @endif
              <label class="form-label">komentar</label>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="komentar" placeholder="komentar" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              @if ($errors->has('komentar'))
              <span class="text-danger small">
                <p>{{$errors->first('komentar')}}</p>
              </span>
              @endif
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
      

      <h3 class="mt-5">Komentar</h3>
      @foreach ($daftar_komentar as $item)
        <div class="col-8">
          <h5>{{$item->nama}}</h5>
          <h6>{{$item->email}}<h6>
            <p>{{$item->komentar}}</p>
            <hr>
        </div>
      @endforeach
    </div>

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>