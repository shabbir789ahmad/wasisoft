@extends('admin.layouts.master_admin')

@section('admin_title')
   Edit Contact US | Admin
@endsection

@section('admin_content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Contact Us
        </h4>
        </div>
        <div class="card-body">
            <form action="{{url('contact-update/'.$contactus->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="title" class="col-form-label">Title:</label>
                  <input type="text" name="title" value="{{$contactus->title}}" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="subtitle" class="col-form-label">Sub-Title:</label>
                    <input type="text" name="subtitle" value="{{$contactus->subtitle}}" class="form-control" id="subtitle">
                  </div>

                <div class="modal-footer">
                    <a href="{{url('contact-us')}}" class="btn btn-secondary" data-dismiss="modal">BACK</a>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
              </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('admin_script')

@endsection
