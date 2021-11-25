@extends('backoffice/layouts.template')
@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
          <h1 class="mt-4">Backoffice</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Update Article</li>
          </ol>
          <form action={{url('/update',$detail->id)}} method="POST" enctype="multipart/form-data">

              {{ csrf_field() }}
              {{ method_field('PUT') }}

              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" value="{{$detail->title}}" class="form-control" >
                @if ($errors->has('title'))
                <span class="text-danger small">
                  <p>{{$errors->first('title')}}</p>
                </span>
                @endif
              </div>
              <div class="mb-3">
                <label for="sub_title" class="form-label">Sub Title</label>
                <input type="text" name="sub_title" value="{{$detail->sub_title}}" class="form-control" >
                @if ($errors->has('sub_title'))
                <span class="text-danger small">
                  <p>{{$errors->first('title')}}</p>
                </span>
                @endif
              </div>
              <div class="form-group">
                  <label for="">Image</label>
                  <img src="{{url('/storage/'.$detail->image)}}" height="200" width="150" class="rounded ms-auto d-block " alt="">
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
                  <textarea class="form-control" name="content" placeholder="Content" id="floatingTextarea2" style="height: 200px">{{$detail->content}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
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
           
