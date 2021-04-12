@extends('admin.layouts.app')
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section id="basic-form-layouts">
            <div class="row match-height">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-content collapse show">
                    <div class="card-body">
                      <form action="@if(isset($hotel))
                                    {{route('hotel.update', $hotel->id) }}
                                    @else
                                    {{route('hotel.store')}}
                                    @endif" method="POST" enctype="multipart/form-data">
                                    @if(isset($hotel))
                                    @method('PUT')
                                    @endif
                        <div class="form-body">
                          <h4 class="form-section">@if(isset($hotel)) {{"Edit"}} @else {{"Add"}}@endif Hotel</h4>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="projectinput1">Hotel Name</label>
                                <input type="text" name="name" class="form-control" placeholder="" value="@if(isset($hotel)) {{$hotel->name}} @endif">
                                @error('name')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="projectinput1">Website</label>
                                  <input type="text" name="website" class="form-control" placeholder="" value="@if(isset($hotel)) {{$hotel->website}} @endif">
                                  @error('website')
                                  <p class="form-text text-warning">
                                      {{$message}}
                                  </p>
                                  @enderror
                                </div>
                              </div>
                          </div>
                        </div>
                        @csrf
                        <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Save
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </div>
@endsection
