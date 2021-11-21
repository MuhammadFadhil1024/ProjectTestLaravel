@extends('backoffice/layouts.template')
@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
          <h1 class="mt-4">Backoffice</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">New Post</li>
          </ol>
          <form>
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" >
            </div>
            <div class="mb-3">
              <label for="sub_title" class="form-label">Sub Title</label>
              <input type="text" class="form-control" >
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="Content" id="floatingTextarea2" style="height: 200px"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </main>
  <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Your Website 2020</div>
              <div>
                  <a href="#">Privacy Policy</a>
                  &middot;
                  <a href="#">Terms &amp; Conditions</a>
              </div>
          </div>
      </div>
  </footer>
@endsection
           
