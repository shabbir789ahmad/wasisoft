@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "About | WasiSoft Technology" }}
@endsection

@section('main-container')

<main style="margin-top:72px">

    <!-- ======== Inner Page ======== -->
    @foreach ($aboutus as $data)
    <div class="title_about" id="title_about">
        <div class="container text-center pt-5 pb-5">
            <h1 data-aos="fade-up">{{$data->title}}</h1>
            <h2 data-aos="fade-up" data-aos-delay="100">{{$data->subtitle}}</h2>
        </div>
    </div>

    <!-- === hero About === -->
    <div class="hero_about" id="hero_about">
        <div class="container  pt-5 pb-5">
            <h2 class=" heading-title text-center pt-5" data-aos="fade-up">Welcome to <span class="">WasiSoft Technology!</span><br> {{$data->description}}</h2>
            <p class="heading-text text-center pb-5" data-aos="fade-up" data-aos-delay="100"> {{$data->description_para}}</p>
        </div>
    </div>
    @endforeach
    <!-- ==== vision_etc_cards ===== -->
    <div class="vision_about" id="vision_about">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 class="text-center pt-5" data-aos="fade-up">
                    Our Focus
                </h2>
                <div class="row">
                    @foreach ($focus as $item)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card text-center p-3 pt-2 mb-3">
                            <div class="text-center pt-2 pb-2">
                                <img src="{{asset('uploads/focus/'.$item->image)}}" alt="Slider image">
                            </div>
                            <h3>
                                {{$item->heading}}
                            </h3>
                            <p class="text">
                                {{$item->description}}
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- === years records ==== -->
    <main class="records " id="records">
        <div class="col-md-12">
            <div class="text-center pt-5 pb-4">
                <h2 data-aos="fade-up">History Record</h2>
            </div>
            <div class="row">
                <div id="owl-records" class="owl-carousel owl-theme">

                    <div class="item" data-aos="fade-up" data-aos-delay="100">
                        <div class="card team_card text-center">
                            <i class="fab fa-gitlab"></i>
                            <p class="  font-weight-bold ">2015</p>
                            <p class="">In 2015 we present our own software house and name it as WasiSoft Technology</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="200">
                        <div class="card team_card text-center">
                            <i class="fab fa-earlybirds"></i>
                            <p class="font-weight-bold ">2016</p>
                            <p class="">After that we develop our website and worked on it and from that we start gaining clients</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="300">
                        <div class="card team_card text-center">
                            <i class="fas fa-spider"></i>
                            <p class="font-weight-bold ">2017</p>
                            <p class="hi">In 2017 the clients we have from our website were start getting more clients and they were satisfied as well</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="400">
                        <div class="card team_card text-center">
                            <i class="fas fa-dragon"></i>
                            <p class=" font-weight-bold ">2018</p>
                            <p class="">In 2018 we hair some developer and start working on Upwork and start getting clients from there as well</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="500">
                        <div class="card team_card text-center">
                            <i class="fas fa-dove"></i>
                            <p class="  font-weight-bold ">2019</p>
                            <p class="">In 2019 we were working hard and we have around 3000 clients</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up">
                        <div class="card team_card text-center">
                            <i class="fas fa-kiwi-bird"></i>
                            <p class="font-weight-bold ">2020</p>
                            <p class="">In 2020 due to COVID-19 we were working from our houses and we did alot of online projects</p>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up">
                        <div class="card team_card text-center">
                            <i class="fas fa-horse-head"></i>
                            <p class=" font-weight-bold ">2021</p>
                            <p class=" ">In 2021 we build a huge environment of clients with great effective development team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ======= Who we are ========== -->
    <div class="pt-5 pb-5 who-section" style="overflow:hidden;">
        <div class="row  ">
            <div class="col-md-6 col-sm-12 col-12 mt-sm-0 mt-3" data-aos="fade-up">
                <video class="video-fluid z-depth-1 border border-light" autoplay loop controls muted>
                    <source src="assets/pic/Y2Mate.is - WasiSoft Technology.mp4" type="video/mp4" />
                  </video>
            </div>
            <div class="col-md-6 col-sm-12 col-12 ">
                <div class="pl-4 pl-5 pt-3">
                    <h2 class="who_h" id="who_h" data-aos="fade-up">Who We Are & What We Do?</h2>
                    <p class="who_p" id="who_p" data-aos="fade-up" data-aos-delay="100">WasiSoft has built a solid reputation in the security industry as an innovator of security and event management technologies.. They are designed to be a part of your business infrastructure and have been engineered to grow as your
                        business grows. There’s no other security solution on the market that gives you the extraordinary level of control that WasiSoft solutions provide.</p>
                    <button id="get-start" data-aos="fade-up" data-aos-delay="200" class="btn get-start btn-lg  mt-md-5 mt-sm-0 ">Get Started Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Who -->

</main>
   @endsection
