@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Coming Soon | WasiSoft Technology" }}
@endsection

@section('main-container')

    <div style="margin-top: 72px">

    <!-- ======== Inner Page ======== -->
    <div class="title_about" id="title_about">
        <div class="container text-center pt-5 pb-5">
            <h1>
                Welcome to WASISOFT TECHNOLOGY
            </h1>
            <h2 data-aos="fade-up">
                “Our website is under construction. follow us for more updates!”
            </h2>
        </div>
    </div>

     <!-- === Coming soon === -->
     <div class="col-12 mt-5 mb-5">
         <div class="m-2">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            @endif
         </div>
        <div class="text-center">

                    <div class="row d-flex justify-content-center align-items-center rows">
                        <div class="col-md-12">
                            <div class="card border-0">
                                <div class="text-center justify-c">
                                    <img src="{{asset('assets/img/newsletter.png')}}" width="200">
                                     <span class="d-block mt-3">
                                    Subscribe to our newsletter in order not to miss new arrivals <br> promotions and discounts of our products
                                </span>
                                <div class="row d-flex justify-content-center align-items-center rows">
                                    <div class="mx-5 col-md-6">
                                        <form action="{{url('/newsletter-sending')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('POST')}}
                                            <div class="input-group mb-3 mt-4  ">

                                                <input type="email" name="email" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                {{-- <a href="" type="submit" class="btn btn-success">Subscribe</a> --}}
                                                <input type="submit" value="Subscribe" class="btn btn-success">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <!-- End Coming Soon -->
@endsection
