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
              <a href="/komentar" class="text-black">kritik dan saran</a>
            </div>
          </div>
          </nav>
    </div>

    {{-- End of navbar --}}

    {{-- start carousel --}}
    
    <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach ($carousel as $item)
            <div class="carousel-item active">
              <img src="{{url('/carousel_image/'.$item->nama_gambar)}}" class="d-block w-100" height="500" alt="...">
            </div> 
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    {{-- End of  carousel --}}

    {{-- Introduction PT --}}

    <div class="container mt-5 mx-auto">
        <h1 class="">Title</h1>
        <img src="https://picsum.photos/200/300" width="500px" height="300px" class="rounded mx-auto d-block mt-5" alt="...">
        <br>
        <div class="row">
            <div class="col-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam porro officiis itaque atque repellendus necessitatibus at possimus, quos odit soluta deserunt veniam. Numquam nesciunt at dolores, odio laboriosam voluptatem non.</p>
            </div>
        </div>
    </div>

    {{-- end of Introduction PT --}}


    {{-- New Article --}}
    <div class="container mt-5">
        <h3>Berita</h3>
        <div class="card-group mt-4">
          @foreach ($article as $item)
            <div class="card">
                  
              <img src="{{url('/storage/'.$item->image)}}" class="card-img-top" width="200" height="300" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{Str::limit($item->content,200)}}</p>
                <p class="card-text"><small class="text-muted">di upload pada {{$item->date}}</small></p>
                <a href="/detail/{{$item->id}}">Baca selengkapnya</a>
              </div>
            </div>
          @endforeach

    </div>



    {{-- end of more article --}}
    
    <div class="container mt-5">
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
              <span class="text-muted">Place sticky footer content here.</span>
            </div>
        </footer>
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