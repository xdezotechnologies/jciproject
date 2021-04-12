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
                      <form action="@if(isset($page))
                                    {{route('page.update', $page->id) }}
                                    @else
                                    {{route('page.store')}}
                                    @endif" method="POST" enctype="multipart/form-data">
                                    @if(isset($page))
                                    @method('PUT')
                                    @endif
                        <div class="form-body">
                          <h4 class="form-section">@if(isset($page)) {{"Edit"}} @else {{"Add"}}@endif Page</h4>
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="projectinput1">Page Title</label>
                                <input type="text" name="title" class="form-control" placeholder="" value="@if(isset($page)) {{$page->title}} @endif">
                                @error('title')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="projectinput1">Page Slug</label>
                                  <input type="text" name="slug" class="form-control" placeholder="" value="@if(isset($page)) {{$page->slug}} @endif">
                                  @error('slug')
                                  <p class="form-text text-warning">
                                      {{$message}}
                                  </p>
                                  @enderror
                                </div>
                              </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="projectinput1">Key</label>
                                  <input type="text" name="key" class="form-control" placeholder="" value="@if(isset($page)) {{$page->key}} @endif">
                                  @error('key')
                                  <p class="form-text text-warning">
                                      {{$message}}
                                  </p>
                                  @enderror
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="projectinput1">Content</label>
                                    <textarea class="form-control tinymce" name="content" id="editor" rows="10">@if(isset($page)) {{$page->content}} @endif</textarea>
                                  @error('content')
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
                          <button type="submit" class="btn btn-primary" name="submit">Save
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
