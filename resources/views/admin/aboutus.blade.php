@extends('admin.layouts.master_admin')

@section('admin_title')
    About US | Admin
@endsection

@section('admin_content')

{{--Add modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/about-save" method="POST">
              {{ csrf_field() }}

            <div class="form-group">
              <label for="title" class="col-form-label">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="subtitle" class="col-form-label">Sub-Title:</label>
                <input type="text" class="form-control" name="subtitle">
              </div>
            <div class="form-group">
                <label for="description" class="col-form-label">Description:</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="description_para" class="col-form-label">Description paragraph:</label>
                <textarea class="form-control" name="description_para"></textarea>
            </div>
            <div class="modal-footer">
                <a href="{{url('/about-us')}}" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
{{-- end modal --}}

{{-- Delete Modal --}}
  <!-- Modal -->
  <div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> About Us
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                ADD
            </button>
        </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table datatable">
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
                 Description
                </th>
                <th class="w-10p">
                 Description para
                </th>
                <th class="w-10p">
                    EDIT
                </th>
                <th class="w-10p">
                    DELETE
                </th>
              </thead>
              <tbody>
                  @foreach ($aboutus as $data)
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
                        <div style="height:80px; overflow:hidden;">
                        {{$data->description}}
                        </div>
                    </td>
                    <td class="align-baseline">
                        <div style="height:80px; overflow:hidden;">
                        {{$data->description_para}}
                        </div>
                    </td>
                    <td class="align-baseline">
                        <a href="{{url('about-edit/'.$data->id)}}" class="btn btn-success">EDIT</a>
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
      {{-- focus part --}}

      {{-- focus card --}}
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Focus Card - About US
            <a href="/about-add_focus" class="btn btn-primary float-right">ADD</a>

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
                  Heading
                </th>
                <th class="w-10p">
                  Description
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
                @foreach ($focus as $data)
                <tr>
                  <td class="align-baseline">
                    {{$data->id}}
                  </td>
                  <td class="align-baseline">
                    {{$data->heading}}
                  </td>
                  <td class="align-baseline">
                      <div style="height:80px; overflow:hidden;">
                      {{$data->description}}
                      </div>
                  </td>
                  <td class="align-baseline">
                    <img width="100px" src="{{asset('uploads/focus/'.$data->image)}}" alt="Slider image">
                  </td>
                  <td class="align-baseline">
                      <a href="{{url('about-edit_focus/'.$data->id)}}" class="btn btn-success">EDIT</a>
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
      {{-- end Focus card --}}
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

                $('#delete_modal_form').attr('action','/about-delete/'+data[0]);

                $('#deletemodalpop').modal('show');
            });
        } );
  </script>
@endsection
