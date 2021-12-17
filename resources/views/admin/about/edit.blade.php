@extends('admin.layouts.master_admin')

@section('admin_title')
   Edit About US | Admin
@endsection

@section('admin_content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit About Us
        </h4>
        </div>
        <div class="card-body">
            <form action="{{url('about-update/'.$aboutus->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="title" class="col-form-label">Title:</label>
                  <input type="text" name="title" value="{{$aboutus->title}}" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="subtitle" class="col-form-label">Sub-Title:</label>
                    <input type="text" name="subtitle" value="{{$aboutus->subtitle}}" class="form-control" id="subtitle">
                  </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Description:</label>
                    <textarea class="form-control" rows="5" cols="6" name="description"  id="description">{{$aboutus->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="description_para" class="col-form-label">Description paragraph:</label>
                    <textarea class="form-control" rows="5" cols="6" name="description_para"  id="description_para">{{$aboutus->description_para}}</textarea>
                </div>
                <div class="modal-footer">
                    <a href="{{url('about-us')}}" class="btn btn-secondary" data-dismiss="modal">BACK</a>
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
