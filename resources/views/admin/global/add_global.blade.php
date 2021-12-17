@extends('admin.layouts.master_admin')

@section('admin_title')
   Add Clients | Admin
@endsection

@section('admin_content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> ADD Clients
        </h4>
        </div>
        <div class="card-body">
            <form action="{{url('/clients-save')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="form-group">
                      <label for="slider_image" class="col-form-label">Upload Client Image:</label>
                      <input type="file"  name="image" class="form-control"  >
                  </div>
              <div class="modal-footer">
                  <a href="{{url('/global-content')}}" class="btn btn-secondary" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
      </div>
    </div>
  </div>
@endsection

@section('admin_script')

@endsection
