@extends('admin.layouts.app')
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <form>
            <h1> <strong>Add LOM</strong> </h1>
            <div class="form-group mt-2">
              <label for="lomname">LOM Name</label>
              <input type="name" class="form-control" id="lomname" placeholder="Enter LOM Name">
            </div>
            <div class="form-group">
                <label for="statusselect">Status</label>
                <select class="form-control" id="statusselect">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>
@endsection
