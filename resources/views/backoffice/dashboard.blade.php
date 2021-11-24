@extends('backoffice/layouts.template')
@section('content')
<div id="layoutSidenav_content">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
    </div>
    @endif
  <main>
      <div class="container-fluid">
          <h1 class="mt-4">Backoffice</h1>
          <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="row">
              <div class="col-xl-3 col-md-6">
                  <div class="card bg-primary text-white mb-4">
                      <div class="card-body">Total Semua artikel <p>{{$article}}</p></div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card bg-warning text-white mb-4">
                      <div class="card-body">Total semua komentar <p>{{$komentar}}</p></div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                          <a class="small text-white stretched-link" href="#">View Details</a>
                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card bg-success text-white mb-4">
                      <div class="card-body">Success Card</div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                          <a class="small text-white stretched-link" href="#">View Details</a>
                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card bg-danger text-white mb-4">
                      <div class="card-body">Danger Card</div>
                      <div class="card-footer d-flex align-items-center justify-content-between">
                          <a class="small text-white stretched-link" href="#">View Details</a>
                          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>
                  List Of Article
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>Title</th>
                                  <th>Sub_Title</th>
                                  <th>Article Publication Date</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($list as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->sub_title}}</td>
                                    <td>{{$item->date}}</td>
                                    <td>
                                        <a type="button" href="/destroy/{{$item->id}}" onclick="return confirm('yakin?');"  class="btn btn-danger PS-2">Delete</a>
                                        <a type="button" href="/update/{{$item->id}}" class="btn btn-success ps-2">Update</a>
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
           
