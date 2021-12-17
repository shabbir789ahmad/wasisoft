@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Services | WasiSoft Technology" }}
@endsection

@section('main-container')

<div style="margin-top: 72px">
     <!-- ======== Inner Page ======== -->
     <div class="title_about" id="title_about">
        <div class="container text-center pt-5 pb-5">
            <h1>Services</h1>
            <h2 data-aos="fade-up">“Your own Self-Realization is the greatest service you can render the world.”</h2>
        </div>
    </div>
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
    <!-- ====== portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <div class="card-title" data-aos="fade-up">
            <h2 class="text-center service pb-5 pt-2">Our Work</h2>
        </div>
        <div id="owl-software" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/sys1.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/sys2.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/sys3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft4.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft6.png" alt=""></a>
            </div>
        </div>
    </section>

</div>

@endsection
