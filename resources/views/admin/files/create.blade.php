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
                      <form action="@if(isset($file))
                                    {{route('file.update', $file->id) }}
                                    @else
                                    {{route('file.store')}}
                                    @endif" method="POST" enctype="multipart/form-data">
                                    @if(isset($file))
                                    @method('PUT')
                                    @endif
                        <div class="form-body">
                          <h4 class="form-section">@if(isset($file)) {{"Edit"}} @else {{"Add"}}@endif File</h4>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="projectinput1">File Name</label>
                                <input type="text" name="name" class="form-control" placeholder="" value="@if(isset($file)) {{$file->name}} @endif">
                                @error('name')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="projectinput1">Upload File</label>
                                  <input type="file" name="file_link" class="form-control" placeholder="">
                                  @error('file_link')
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
