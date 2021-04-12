@extends('admin.layouts.app')
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="row">
            <div class="col-md-12">
                <section id="html">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title font-weight-bold">Files</h4>
                          </div>
                          <div class="card-content collpase show">
                            <div class="card-body card-dashboard">
                                {{-- notification --}}
                                @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('message') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                {{-- notification --}}
                              <div class="row">

                                  <a name="" id="" class="btn btn-primary btn-sm ml-1 mb-1" href="{{route('file.create')}}" role="button" style="margin-right:3px;">Add file</a>
                              </div>
                              <table class="table table-striped table-bordered sourced-data zero-configuration">
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>File Name</th>
                                    <th>Copy File Link</th>
                                    <th>Extension</th>
                                    <th>Preview</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($files as $file)
                                  <tr>
                                    <td style="width:100px;">{{$loop->iteration}}</td>
                                    <td style="width:200px;">
                                        <div class="row">
                                            <form action="{{ route('file.destroy',$file) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button name="submit" class="btn btn-danger btn-sm float-left">
                                                Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{$file->name}}</td>
                                    <td>
                                        <input type="text" value="{{asset('uploads/files/'.$file->link)}}"">
                                    </td>
                                    <td>{{$file->ext}}</td>
                                    <td><img src="{{asset('uploads/files/'.$file->link)}}" alt="" width="70px;" height="70px;"></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>File Name</th>
                                    <th>Copy File Link</th>
                                    <th>Extension</th>
                                    <th>Preview</th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
