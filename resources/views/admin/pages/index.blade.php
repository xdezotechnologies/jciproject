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
                            <h4 class="card-title font-weight-bold">Page Name</h4>
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

                                  <a name="" id="" class="btn btn-primary btn-sm ml-1 mb-1" href="{{route('page.create')}}" role="button" style="margin-right:3px;">Add page</a>
                              </div>
                              <table class="table table-striped table-bordered sourced-data zero-configuration">
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Key</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($pages as $page)
                                  <tr>
                                    <td style="width:100px;">{{$loop->iteration}}</td>
                                    <td style="width:200px;">
                                        <div class="row">
                                            <a name="" id="" class="btn btn-info btn-sm  float-left" href="{{route('page.edit',$page->id)}}" role="button" style="margin-right:3px;">Edit</a>
                                            <a name="" id="" class="btn btn-success btn-sm  float-left" href="{{route('page.show',$page->id)}}" role="button" style="margin-right:3px;">Show</a>
                                            <form action="{{ route('page.destroy',$page) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button name="submit" class="btn btn-danger btn-sm float-left">
                                                Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->slug}}</td>
                                    <td>{{$page->key}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Key</th>
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
