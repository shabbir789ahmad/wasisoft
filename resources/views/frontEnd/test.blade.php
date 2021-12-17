@extends('frontEnd.layouts.main')

@section('main-container')
<div style="margin-top: 72px">

    <!-- === Coming soon === -->
    <div class="comingSoon" id="comingSoon">
        <div class="text-center">
            <h1>Coming Soon</h1>
            <h6>Our Website under construction, follow us for more updates!</h6>

            <div class="col-md-12 contianer">
                <form action="{{ route('CustomerResources.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" value="{{ old('name') }}"  class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                {{-- <a href="">Submit</a> --}}
                                <button class="btn btn-primary btn-lg border-0  ">Save</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!-- End Coming Soon -->
    <div class="row">
        <div class="col-sm-12">
        <h1>Customer List</h1>
        <table class="table table-hovered table-stripped">
                <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->mobile }}</td>
                        <td>

                        <a type="button" href="{{ route('CustomerResources.edit',$data) }}" class="btn btn-primary">Edit</a>
                        &nbsp;
                        <form method="post" action="{{ route('CustomerResources.destroy',$data) }}" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
