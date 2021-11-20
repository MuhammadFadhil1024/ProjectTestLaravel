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
              </div>
            </div>
          </nav>
    </div>

    {{-- End of navbar --}}

    {{-- Detail article --}}

    <div class="container mt-5">
        <h1>Title</h1>
        <p>tanggal</p>
        <h3>Sub-title</h3>
        <img src="https://picsum.photos/200/300" width="500px" height="300px" class="rounded mx-auto d-block mt-5" alt="...">
        <br>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam porro officiis itaque atque repellendus necessitatibus at possimus, quos odit soluta deserunt veniam. Numquam nesciunt at dolores, odio laboriosam voluptatem non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea minima aliquam mollitia maxime eius odit molestias dicta est autem architecto sit ipsam, vitae velit, natus perspiciatis libero, aspernatur impedit reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse nobis, sed inventore itaque consectetur doloremque voluptatem blanditiis repudiandae dolore rem deleniti aliquid vitae! Rem similique incidunt omnis perferendis tenetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea non in sunt explicabo aut. Eaque cumque laudantium non accusamus ad repudiandae voluptatum consectetur. Sint similique consequuntur illum velit cupiditate? Molestias!</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3>Jumlah Komentar</h3>
        <h5>Name</h5>
        <div class="col-8">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora vel, eaque ullam reprehenderit minus quos sapiente voluptates, quasi harum eum facilis esse molestiae architecto dolor et maxime! Accusantium, illo voluptatibus.</p>
            <hr>
        </div>
        <div class="col-8 ps-4">
            <h5>Admin</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione delectus beatae vero corporis cupiditate obcaecati libero dolor non, sequi rerum culpa cum vitae veritatis ad molestias dolore cumque eaque enim!</p>
            <hr>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-8 bg-light p-3 rounded">
            <h5>Tinggalkan Balasan</h5>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
              </div>
            <button type="button" class="btn btn-secondary mt-3 px-4">Kirim</button>
        </div>
    </div>

    {{-- Detail articel --}}


 
    
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