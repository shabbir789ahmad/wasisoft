@extends('admin.layouts.master_admin')

@section('admin_title')
    Contact US | Admin
@endsection

@section('admin_content')

{{--modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Header Contact Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/contact-save" method="POST">
              {{ csrf_field() }}

            <div class="form-group">
              <label for="title" class="col-form-label">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="subtitle" class="col-form-label">Sub-Title:</label>
                <input type="text" class="form-control" name="subtitle">
              </div>

            <div class="modal-footer">
                <a href="{{url('/contact-us')}}" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
{{-- end modal --}}
<div class="row ">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Contact Us
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
              ADD
          </button>
        </h4>
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
                <th class="w-10p">
                  Id
                </th>
                <th class="w-10p">
                  Title
                </th>
                <th class="w-10p">
                  Sub-Title
                </th>

                <th class="w-10p">
                    EDIT
                </th>
                <th class="w-10p">
                    DELETE
                </th>
              </thead>
              <tbody>
                  @foreach ($contactus as $data)
                  <tr>
                    <td class="align-baseline">
                      {{$data->id}}
                    </td>
                    <td class="align-baseline">
                      {{$data->title}}
                    </td>
                    <td class="align-baseline">
                      {{$data->subtitle}}
                    </td>
                    <td class="align-baseline">
                        <a href="{{url('contact-edit/'.$data->id)}}" class="btn btn-success">EDIT</a>
                    </td>
                    <td class="align-baseline">
                        <form action="{{url('contact-delete/'.$data->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>

      {{-- UK Residential --}}
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> UK Residential Contact</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable2" class="table">
              <thead class=" text-primary">
                <th class="w-10p">
                  Id
                </th>
                <th class="w-10p">
                  Name
                </th>
                <th class="w-10p">
                  Email
                </th>
                <th class="w-10p">
                  Phone No.
                </th>
                <th class="w-10p">
                  Message
                </th>
              </thead>
              <tbody>
                  @foreach ($ukcontacts as $uk)
                  <tr>
                    <td class="align-baseline">
                      {{$uk->id}}
                    </td>
                    <td class="align-baseline">
                      {{$uk->name}}
                    </td>
                    <td class="align-baseline">
                      {{$uk->email}}
                    </td>
                    <td class="align-baseline">
                        {{$uk->phone}}
                    </td>
                    <td class="align-baseline">
                        {{$uk->message}}
                    </td>
                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{-- end UK Residential --}}

      {{-- Pk Residential --}}
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Pakistan Residential Contact</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable2" class="table">
              <thead class=" text-primary">
                <th class="w-10p">
                  Id
                </th>
                <th class="w-10p">
                  Name
                </th>
                <th class="w-10p">
                  Email
                </th>
                <th class="w-10p">
                  Phone No.
                </th>
                <th class="w-10p">
                  Message
                </th>
              </thead>
              <tbody>
                  @foreach ($pkcontacts as $pk)
                  <tr>
                    <td class="align-baseline">
                      {{$pk->id}}
                    </td>
                    <td class="align-baseline">
                      {{$pk->name}}
                    </td>
                    <td class="align-baseline">
                      {{$pk->email}}
                    </td>
                    <td class="align-baseline">
                        {{$pk->phone}}
                    </td>
                    <td class="align-baseline">
                        {{$pk->message}}
                    </td>
                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{-- end PK Residential --}}
    </div>
  </div>
@endsection

<script>
    $(document).ready( function () {
          $('#datatable2').DataTable();

        } );
</script>
@section('admin_script')

@endsection
