@extends('admin.layouts.master_admin')

@section('admin_title')
    Registered Roles
@endsection

@section('admin_content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Registered Roles</h4>
            @if (session('status'))
                 <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                 </div>
            @endif

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                    Id
                </th>
                <th>
                  Name
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Email
                </th>
                <th>
                   User Type
                </th>
                <th>
                 Edit
                </th>
                <th>
                 Delete
                </th>

              </thead>
              <tbody>
                  @foreach ($users as $row)
                  <tr>
                    <td>
                        {{$row->id}}
                    </td>
                    <td>
                      {{$row->name}}
                    </td>
                    <td>
                      {{$row->phone}}
                    </td>
                    <td>
                      {{$row->email}}
                    </td>
                    <td class="">
                     -- {{$row->usertype}} --
                    </td>
                    <td class="">
                      <a href="/role-edit/{{$row->id}}" class="btn  btn-success">EDIT</a>
                    </td>
                    <td class="">
                      <a href="/role-delete/{{$row->id}}" class="btn  btn-danger">DELETE</a>
                    </td>
                  </tr>
                  @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('admin_script')

@endsection
