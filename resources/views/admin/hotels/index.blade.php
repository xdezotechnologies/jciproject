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
                            <h4 class="card-title font-weight-bold">Hotels</h4>
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

                                  <a name="" id="" class="btn btn-primary btn-sm ml-1 mb-1" href="{{route('hotel.create')}}" role="button" style="margin-right:3px;">Add Hotel</a>
                                  <a name="" id="" class="btn btn-success btn-sm mb-1" href="#" role="button" data-toggle="modal"
                                  data-target="#default" style="margin-right: 3px;">Import Data</a>
                                  <form action="{{route('exporthotel')}}" method="get" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-info btn-sm mb-1">
                                        Export Data
                                    </button>
                                </form>
                              </div>
                              <table class="table table-striped table-bordered sourced-data zero-configuration">
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Website</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($hotels as $hotel)
                                  <tr>
                                    <td style="width:100px;">{{$loop->iteration}}</td>
                                    <td style="width:150px;">
                                        <div class="row">
                                            <a name="" id="" class="btn btn-info btn-sm  float-left" href="{{route('hotel.edit',$hotel->id)}}" role="button" style="margin-right:3px;">Edit</a>
                                            <form action="{{ route('hotel.destroy',$hotel) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button name="submit" class="btn btn-danger btn-sm float-left">
                                                Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{$hotel->name}}</td>
                                    <td>{{$hotel->website}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>S.N.</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Website</th>
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

  {{-- Import Modal --}}
  <div class="card-content collapse show">
    <div class="card-body">
      <div class="row my-2">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="form-group">
            <!-- Modal -->
            <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
            aria-hidden="true">
              <div class="modal-dialog" role="document">

                <form action="{{route('importhotel')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Import Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group">
                          <label for="">Upload File</label>
                          <input type="file" class="form-control-file" name="file" placeholder="Upload Excel File">
                        </div>
                        <p>Download Template:</p>
                        <a name="" id="" class="btn btn-info
                         btn-sm" href="{{asset('uploads/templates/hotels.xlsx')}}" role="button" download>Download Template</a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary" name="submit">Save</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--Import Modal --}}
        </div>
      </div>
    </div>
  </div>
@endsection
