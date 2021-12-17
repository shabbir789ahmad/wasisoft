
  @extends('frontEnd.layouts.main')

  @section('page_title')
  {{ "Contact | WasiSoft Technology" }}
@endsection

  @section('main-container')

  <div style="margin-top: 72px">
     <!-- ====title ===== -->
    @foreach ($contactus as $data)
    <div class="title_contact" id="title_contact">
        <div class="container text-center pt-5 pb-5">
            <h1 data-aos="fade-up">{{$data->title}}</h1>
            <h2 data-aos="fade-up" data-aos-delay="100">{{$data->subtitle}}</h2>
        </div>
    </div>
    @endforeach

    <!-- end title -->
    <!-- ====== uk Contact Us ======-->
    <main id="contactHome" class="contactHome" style="overflow: hidden;">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters" id="cont_back1">
                            <div class="col-md-5 order-2 order-md-1 pl-4 pr-4 pt-4 d-flex align-items-stretch">
                                <div id="map">
                                    <p class="pt-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.629218645456!2d74.29533901514895!3d31.451873081392232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190100c742f3cd%3A0x8e5a0ca606fd8be1!2sWasiSoft%20Technology!5e0!3m2!1sen!2s!4v1632465325394!5m2!1sen!2s"
                                            width="100%" height="453px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 contact-left order-1 order-md-2">
                                <div class="contact-wrap p-5 w-100">
                                    <h3 class="mb-4 text-center  bg-warning">UK Residential</h3>
                                    <hr>
                                    <form method="POST" action="/contact-uk">
                                        {{ csrf_field() }}
                                        {{ method_field('POST')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Phone No.</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{-- <input type="submit" value="Send Message" class="btn-contact"> --}}
                                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Contact Us -->
    <!-- ======pk Contact Us ======-->
    <main id="contactHome" class="contactHome" style="overflow: hidden;">
        <div class="">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 text-center mt-5 mb-5">
                    <h2 class="">Contact Us</h2>
                </div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters" id="cont_back">
                            <div class="col-md-7 contact-left">
                                <div class="contact-wrap p-5 w-100">
                                    <h3 class="mb-4 text-center bg-info">Pakistan Residential</h3>
                                    <hr>
                                    <form method="POST" action="/contact-pk">
                                        {{ csrf_field() }}
                                        {{ method_field('POST')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Phone No.</label>
                                                    <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn-contact">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 pl-4 pr-4 pt-4 d-flex align-items-stretch">
                                <div id="map">
                                    <p class="pt-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.629218645456!2d74.29533901514895!3d31.451873081392232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190100c742f3cd%3A0x8e5a0ca606fd8be1!2sWasiSoft%20Technology!5e0!3m2!1sen!2s!4v1632465325394!5m2!1sen!2s"
                                            width="100%" height="453px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Contact Us -->


  </div>

@endsection
