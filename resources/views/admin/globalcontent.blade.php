@extends('admin.layouts.master_admin')

@section('admin_title')
    Global Content | Admin
@endsection

@section('admin_content')


{{-- Delete Modal --}}
  <!-- Modal -->
  <div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="delete_modal_form" method="post">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}
            <div class="modal-body">
                {{-- <input type="text" id="delete_aboutus_id"> --}}
                <h5>Are you sure ?, You want to delete this data ?</h5>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Yes. Delete it.</button>
            </div>
        </form>
      </div>
    </div>
  </div>
{{-- end delete modal --}}
{{-- Clients --}}
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif
      {{-- Clients --}}
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Our Clients
            <a href="/clients-add" class="btn btn-primary float-right">ADD</a>
        </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="datatable" class="table">
              <thead class=" text-primary">
                <th class="w-10p">
                  Id
                </th>
                <th class="w-10p">
                 Image
                </th>
                <th class="w-10p">
                    EDIT
                </th>
                <th class="w-10p">
                    DELETE
                </th>
              </thead>
              <tbody>
                @foreach ($clients as $data)
                <tr>
                  <td class="align-baseline">
                    {{$data->id}}
                  </td>
                  <td class="align-baseline">
                    <img width="100px" src="{{asset('uploads/clients/'.$data->image)}}" alt="Slider image">
                  </td>
                  <td class="align-baseline">
                      <a href="{{url('clients-edit/'.$data->id)}}" class="btn btn-success">EDIT</a>
                  </td>
                  <td class="align-baseline">
                      <a href="javascript:void(0)" class="btn btn-danger deletebtn" >DELETE</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
      {{-- end Clients --}}
    </div>
  </div>
@endsection

@section('admin_script')
  <script>
      $(document).ready( function () {
            $('.datatable').DataTable();

            // for delete confirmation

            $('.datatable').on('click','.deletebtn', function(){

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                // $('#delete_aboutus_id').val(data[0]);

                $('#delete_modal_form').attr('action','/clients-delete/'+data[0]);

                $('#deletemodalpop').modal('show');
            });
        } );
  </script>
@endsection
