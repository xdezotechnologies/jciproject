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
                            <h4 class="card-title">Individual Registration</h4>
                            <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-content collpase show">
                            <div class="card-body card-dashboard">
                                <form action="">
                                    <div class="form-group">
                                      <input type="text"
                                        class="form-control" name="search" id="" aria-describedby="helpId" placeholder="Search ...">
                                    </div>
                                </form>
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter By
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Junior Jaycess</a>
                                    <a class="dropdown-item" href="#">Senior Jaycess</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                                @foreach ($individualreg as $individual)
                                <table class="table table-striped table-bordered sourced-data">
                                    <thead>
                                      <tr>
                                        <th>Action</th>
                                        <th>d_cat</th>
                                        <th>reg_type</th>
                                        <th>f_name</th>
                                        <th>depositedamount</th>
                                        <th>voucher</th>
                                        <th>photo</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                            <a name="" id="" class="btn btn-info btn-sm" href="#" role="button">View</a>
                                            <a name="" id="" class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                                        </td>
                                        <td>{{$individual->d_cat}}</td>
                                        <td>{{$individual->r_type}}</td>
                                        <td>{{$individual->f_name}}</td>
                                        <td>{{$individual->d_deposit}}</td>
                                        <td><img src="{{asset('uploads/files/'.$individual->u_vou)}}">  </td>
                                        <td>{{$individual->u_pho}}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                @endforeach

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>

  {{-- Server side processing --}}
        </div>
      </div>
    </div>
  </div>
@endsection
