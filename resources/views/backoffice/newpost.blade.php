@extends('backoffice/layouts.template')
@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
          <h1 class="mt-4">Backoffice</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">New Post</li>
          </ol>
          @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
          <form action='newpost/store' method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" >
              @if ($errors->has('title'))
              <span class="text-danger small">
                <p>{{$errors->first('title')}}</p>
              </span>
              @endif
            </div>
            <div class="mb-3">
              <label for="sub_title" class="form-label">Sub Title</label>
              <input type="text" name="sub_title" class="form-control" >
              @if ($errors->has('sub_title'))
              <span class="text-danger small">
                <p>{{$errors->first('title')}}</p>
              </span>
              @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" >
                @if ($errors->has('image'))
                  <span class="text-danger small">
                    <p>{{$errors->first('image')}}</p>
                  </span>
                @endif
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="content" placeholder="Content" id="floatingTextarea2" style="height: 200px"></textarea>
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
           
