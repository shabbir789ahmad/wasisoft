@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Home | WasiSoft Technology" }}
@endsection

@section('main-container')

    <!-- ======== Slider start ============ -->
    <div class="hero-slider" id="home" style=" margin-top: 52px;" data-aos="fade-up">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active slider-color">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-7">
                            <h2>Welcome To
                                <br><span>Wasi Soft Technology</span>
                            </h2>
                            <p>WasiSoft Technology has been providing technology solutions to <br>solve specific business problems.</p>
                        </div>
                        <div class="col-md-5 col-sm-5 col-5">
                            <div class="w3-container  w3-animate-zoom ">
                                <img src="assets/pic/Web-Development.png" class="float-left" alt="Car" style="width:100%; ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slider-color2">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-7">
                            <h2>Mobile App Development
                            </h2>
                            <p>Mobile App Development for particular business requirements to<br> enhance functionality, efficiency and value addition.
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-5 col-5">
                            <div class="w3-container  w3-animate-zoom">
                                <img src="assets/pic/App-Development.png" alt="Car" style="width:67%">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item slider-color3">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-7">
                            <h2 class="text-warning">Digital Marketing
                            </h2>
                            <p class="text-light">Planning persistent digital marketing activities</p>
                            <p>We plan persistent digital marketing activities through which consumers can access to available information of any business websites from any place in any time.
                            </p>
                        </div>
                        <div class="col-md-5 col-sm-5 col-5">
                            <div class="w3-container  w3-animate-zoom">
                                <img src="assets/pic/Digital-Media.png" alt="Car" style="width:70%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev ml-5 prev " href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next  next mr-5" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- end SLider -->
    {{-- Slider --}}
    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @php
                $i = 1;
            @endphp
            @foreach ($slider as $slideritem)
            <div class="carousel-item {{ $i== '1' ? 'active':'' }}">
                @php
                    $i++;
                @endphp
                <img width="100%" class="img-fluid" src="{{asset('assets/pic/sliderback.jpg')}}" alt="Sldier image">
                <div class="carousel-caption  d-md-block">
                    <div class="row">
                        <div class="col-6" style="vertical-align: middle; text-align: center;">
                            <h5 style="vertical-align: middle; text-align: center;">{{$slideritem->heading}}</h5>
                            <p style="vertical-align: middle; text-align: center;">{{$slideritem->description}}</p>
                        </div>
                        <div class="col-6">
                            <img src="{{asset('uploads/slider/'.$slideritem->image)}}" class="img-fluid" alt="Slider image">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div> --}}
    {{-- End Slider --}}
    <!-- ======== Our Services ========= -->
    <div class="py-5" id="ourServies" style="overflow: hidden;">
        <div class="container-fluid">
            <div class="card-title" data-aos="fade-up">
                <h2 class="text-center service pb-5 pt-2">Our Services</h2>
            </div>
            <div class="row hidden-md-up">
                <a href="WebDepServices">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/Web-Developement.png" class="img-fluid">
                                <h4 class="card-title">Web Development</h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">To improve your digital strategy and benefit from all the advantages of the Web digital age, the Web application allows you to open new distribution channels for your business.</p>
                                <a href="WebDepServices" class="text-center">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="MobAppServices">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/Mobile-App-removebg-preview.png" class="img-fluid">
                                <h4 class="card-title">Mobile App Development</h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">To improve your digital strategy and benefit from all the advantages of the mobile digital age, the mobile application allows you to open new distribution channels for your business.</p>
                                <a href="MobAppServices">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="digiMartServices">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/Digital-Marketing-removebg-preview.png" class="img-fluid">
                                <h4 class="card-title">Digital Marketing</h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">We will do digital marketing for your brand, your company, your products / services. The world is currently online, as are brands, companies, products and services in order to reach and interact with as many customers as
                                    possible.
                                </p>
                                <a href="digiMartServices">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </div>
                </a>

            </div><br>
            <div class="row">
                <a href="SysAdmServices">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/SEO-removebg-preview.png" class="img-fluid">
                                <h4 class="card-title">System Administration </h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">A system administrator, or sysadmin, is a person who is responsible for the upkeep, configuration, and reliable operation of computer systems; especially multi-user computers, such as servers.</p>
                                <a href="SysAdmServices">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="SoftDepServices">
                    <div class="col-md-4">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/E-Commerec-Web-removebg-preview.png" class="img-fluid">
                                <h4 class="card-title">Software Development</h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">Software development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components.</p>
                                <a href="SoftDepServices">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="col-md-4">
                    <a href="GrapDesignServices">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-block text-center p-4">
                                <img src="assets/pic/Graphics-Designer-removebg-preview.png" class="img-fluid">
                                <h4 class="card-title">Graphic Designing</h4>
                                <p class="card-text p-y-1 pt-3 text1" style="font-style: italic;">A visual identity that will allow you to stand out, attract attention and shine in your own way in an already very popular market.</p>
                                <a href="GrapDesignServices">
                                    <img src="assets/pic/blue-arrow-icon-on-transparent-background-flat-vector-27180293-removebg-preview.png" width="15%" class="ic"></a>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- ======== Products Cards ======= -->
    <section class="pro_cards col-12" style="overflow: hidden;" id="pro_cards">
        <div class="container-fluid">
            <h2 class="text-center service text-light pt-5" data-aos="fade-up">Our Products</h2>
            <div class="sub_cards ">
                <div class="row">

                    <div class="card  mb-3" data-aos="fade-left" data-aos-delay="100">
                        <div class="box boxbg">
                            <div class="content">
                                <h2>01</h2>
                                <h3>School Management System</h3>
                                <img src="assets/pic/SMS-removebg-preview.png" width="200px" class="img-fluid" alt="">
                                <p>School administrative problems could be hard to tackle, especially when you are doing manually. To resolve issues and save time Edusuite comes up with the feature-rich school software in Pakistan online that provides accuracy
                                    and perfectly manages all the administrative data for you. With Edusuite school management software, you can get connected with all the departments of your school and it becomes easy to exchange and share information.
                                    From teachers to students and even parents, our software provides optimal solutions to all the problems.</p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="box boxbg2">
                            <div class="content">
                                <h2>02</h2>
                                <h3>Hospital Management System</h3>
                                <img src="assets/pic/HMS-removebg-preview.png" width="200px" class="img-fluid" alt="">
                                <p>HMS was introduced to solve the complications coming from managing all the paper works of every patient associated with the various departments of hospitalization with confidentiality. HMS provides the ability to manage
                                    all the paperwork in one place, reducing the work of staff in arranging and analyzing the paperwork of the patients.</p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="box boxbg3">
                            <div class="content">
                                <h2>03</h2>
                                <h3>FYP Supervision</h3>
                                <img src="assets/pic/fyp-removebg-preview.png" width="180px" class="img-fluid" alt="">
                                <p>The FYP Management System consists of the following modules: Cohort, Supervisor and Student Maintenance, Project Management and Registration, Auto-assignment of Supervisors to Students, Supervisor Workload Tracking, Student
                                    Assessments, Forms and Template Management, as well as Security.</p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" data-aos="fade-left" data-aos-delay="100">
                        <div class="box boxbg4" id="boxbg4">
                            <div class="content">
                                <h2>04</h2>
                                <h3>Inventory System</h3>
                                <img src="assets/pic/IS-removebg-preview.png" width="200px" class="img-fluid" alt="">
                                <p>
                                    An inventory system is a technology solution used to integrate all information regarding stock levels and stock movement for an organization. Types of Inventory Systems While there are several different kinds of inventory systems available, they can be
                                    categorized into two main types: perpetual inventory systems and periodic inventory systems. </p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="box boxbg5" id="boxbg5">
                            <div class="content">
                                <h2>05</h2>
                                <h3>Point Of Sale</h3>
                                <img src="assets/pic/pos-removebg-preview.png" width="200px" class="img-fluid" alt="">
                                <p>A POS system allows your business to accept payments from customers and keep track of sales. It sounds simple enough, but the setup can work in different ways, depending on whether you sell online, have a physical storefront,
                                    or both. A point-of-sale system used to refer to the cash register at a store.</p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="box boxbg6" id="boxbg6">
                            <div class="content">
                                <h2>06</h2>
                                <h3>ERP System</h3>
                                <img src="assets/pic/ERP-removebg-preview.png" width="220px" class="img-fluid" alt="">
                                <p>Enterprise resource planning (ERP) refers to a type of software that organizations use to manage day-to-day business activities such as accounting, procurement, project management, risk management and compliance, and supply
                                    chain operations. A complete ERP suite also includes enterprise performance management, software that helps plan, budget, predict, and report on an organization’s financial results.</p>
                                <a href="/demo">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--  End products cards -->
    <!-- ======== Our Projects ========= -->
    <div class="py-5" id="projects" style="overflow: hidden;">
        <div class="container-fluid">
            <div class="card-title" data-aos="fade-up">
                <h2 class="text-center service pb-5 pt-2">Our Projects</h2>
            </div>
            <div class="row hidden-md-up">
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">

                        <div class="box box-down">
                            <a href="/demo">
                                <h2>IT Drill</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>Let's Grow</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo2.png" alt=""></a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="box box-down">
                            <a href="http://sahafi.tv/">
                                <h2>Sahafi TV</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="http://sahafi.tv/" class="text-center">
                                    <img src="assets/pic/projects/sahafi.jpg" class="img-fluid " alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4" data-aos="fade-left" data-aos-delay="200">

                    <div class="card">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI TECH</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">

                                <a href="/demo"><img src="assets/pic/projects/logo4.jpg" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" data-aos="fade-left" data-aos-delay="200">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI CORE</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">

                                <a href="/demo"><img src="assets/pic/projects/logo5.jpg" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-left" data-aos-delay="200">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI LAGI</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo6.jpg" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-delay="300">

                    <div class="card">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI QLEARN</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo7.png" alt=""></a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-right" data-aos-delay="300">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI MART</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo8.jpg" alt=""></a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="fade-right" data-aos-delay="300">
                        <div class="box box-down">
                            <a href="/demo">
                                <h2>WASI OUTFIT</h2>
                            </a>

                            <p>Uses data from past projects to provide better delivery estimates</p>
                            <div class="float-right">
                                <a href="/demo"><img src="assets/pic/projects/logo9.png" alt=""></a>
                            </div>


                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    <!-- End Projects -->
    <!-- ======= Who we are ========== -->
    <div class="pt-5 pb-5 who-section" style="overflow:hidden;">
        <div class="row  ">
            <div class="col-md-6 col-sm-12 col-12 ">
                <div class="pl-4 pl-5">
                    <h2 class="who_h" id="who_h" data-aos="fade-up">Who We Are & What We Do?</h2>
                    <p class="who_p" id="who_p" data-aos="fade-up" data-aos-delay="100">WasiSoft has built a solid reputation in the security industry as an innovator of security and event management technologies.. They are designed to be a part of your business infrastructure and have been engineered to grow as your
                        business grows. There’s no other security solution on the market that gives you the extraordinary level of control that WasiSoft solutions provide.</p>
                    <button id="get-start" data-aos="fade-up" data-aos-delay="200" class="btn get-start btn-lg  mt-md-5 mt-sm-0 ">Get Started Now</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 mt-sm-0 mt-3" data-aos="fade-up">
                <video class="video-fluid z-depth-1 border border-light" autoplay loop controls muted>
                    <source src="assets/pic/Y2Mate.is - WasiSoft Technology.mp4" type="video/mp4" />
                  </video>

            </div>
        </div>
    </div>
    <!-- End Who -->
    <!-- =========== Quality Product ============ -->
    <div class="mb-5 mt-5 container-fluid" id="blocks" style="overflow:hidden">
        <div class="row">
            <div class="col-md-4 order-2 order-lg-1">

                <div class="card card-bg1" data-aos="fade-right" data-aos-delay="100">
                    <div class="row">
                        <i class="bx bx-clipboard"></i>
                        <h4>Quality Products</h4>
                    </div>
                    <p>We believe in Software Quality that is essential to deliver the product on time and on the required quality.
                    </p>
                </div>
                <div class="card card-bg" data-aos="fade-right" data-aos-delay="200">
                    <div class="row">
                        <i class="bx bx-conversation"></i>
                        <h4 class="">Reliability</h4>
                    </div>
                    <p class=" ">Failure Free Products are our main target. We always develop the most reliable Products without any failure issue on future.</p>
                </div>
                <div class="card card-bg3 " data-aos="fade-right" data-aos-delay="300">
                    <div class="row">
                        <i class="bx bx-accessibility"></i>
                        <h4>Adaptability</h4>
                    </div>
                    <p>The needs of clients are constantly changing, so you need a system that is adaptable to meet future needs.
                    </p>
                </div>
            </div>
            <div class="col-md-4 order-1  order-lg-2 text-center">
                <img src="assets/pic/image-358x710-1.png" class="img-fluid ">
            </div>
            <div class="col-md-4 order-3 order-lg-3">
                <div class="card card-bg5" data-aos="fade-left" data-aos-delay="100">
                    <div class="row">
                        <i class="bx bx-diamond"></i>
                        <h4 class="">Maintainable</h4>
                    </div>
                    <p class=" ">
                        Our Products are fully maintainable for the injection of any new Functionality or Requirement.
                    </p>
                </div>
                <div class="card card-bg4 " data-aos="fade-left" data-aos-delay="200">
                    <div class="row">
                        <i class="bx bx-tachometer"></i>
                        <h4>Scalability</h4>
                    </div>
                    <p>
                        Scalability is highly important for any system. We are capable of growing with institute, both in term of slow managed growth and sudden change.
                    </p>
                </div>

                <div class="card card-bg6" data-aos="fade-left" data-aos-delay="300">
                    <div class="row">
                        <i class="bx bx-time-five"></i>
                        <h4>Timely Work</h4>
                    </div>
                    <p>
                        We always plan the Project Development schedule for deploying the Project on time with all completed requirements.
                    </p>
                </div>
            </div>

        </div>

    </div>
    <div class="text-center">

        <button id="btn-learn" class="btn btn-learn mb-5 " data-aos="fade-up">Learn More</button>
    </div>
    </div>
    <!-- end Quality product -->


@endsection
