@extends('admin.layouts.master_admin')

@section('admin_title')
    Newsletter | Admin
@endsection

@section('admin_content')


{{-- newsletter --}}
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Our Newsletter Subscriber
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
                 Subscribers
                </th>
              </thead>
              <tbody>
                @foreach ($newsletter as $data)
                <tr>
                  <td class="align-baseline">
                    {{$data->id}}
                  </td>
                  <td class="align-baseline">
                      {{$data->email}}
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
