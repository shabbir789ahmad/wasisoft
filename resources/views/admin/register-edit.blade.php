@extends('admin.layouts.master_admin')

@section('admin_title')
   Edit Registered Roles
@endsection

@section('admin_content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Registered Roles</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="/role-register-update/{{$users->id}}" method="POST">
                        {{-- csrf is token for protection --}}
                        {{ csrf_field() }}
                        {{-- for update --}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" value="{{$users->name}}" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" value="{{$users->phone}}" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Give Role</label>
                            <select name="usertype" class="form-control" id="">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                                <option value="">None</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>

                        <a href="/role-register" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@section('admin_script')

@endsection
