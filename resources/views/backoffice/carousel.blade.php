@extends('backoffice/layouts.template')
@section('content')
<div id="layoutSidenav_content">
  <main>
      <div class="container-fluid">
          <h1 class="mt-4">Backoffice</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Tambah gambar corousel</li>
          </ol>
          <form action='carousel/store' method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="nama_gambar" class="form-control" >
                    @if ($errors->has('image'))
                    <span class="text-danger small">
                        <p>{{$errors->first('image')}}</p>
                    </span>
                    @endif
                    <button type="submit" class="btn btn-primary ps-4 mt-2">Simpan</button>
                </div>
            </form>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Carousel
                </div>
               
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>nama gambar</th>
                                    <th>Review gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                  <tr>
                                      <td>{{$item->nama_gambar}}</td>
                                      <td>
                                        <img src="{{url('/carousel_image/'.$item->nama_gambar)}}" height="150" width="300" class="rounded ms-auto d-block " alt="">
                                      </td>
                                      <td>
                                        <a type="button" href="/destroy/{{$item->id}}" onclick="return confirm('yakin?');"  class="btn btn-danger PS-2">Delete</a>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
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
           
