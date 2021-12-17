@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Portfolio | WasiSoft Technology" }}
@endsection

@section('main-container')

    <!-- ==== Slider  ==== -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active port_slider1">
                <div class="col-12">
                    <div class="row pt-5 pb-5">
                        <div class="col-6 port_slider" data-aos="fade-right">
                            <img class="d-block w-100" src="assets/pic/portfolio/lappi2-removebg-preview.png" class="img-fluid" alt="First slide">
                        </div>
                        <div class="col-6 port_slider" data-aos="fade-left">
                            <h1>Design <br>for all <br>Devices</h1>
                            <p class="port_p">WasiSoft have must unique idea for you bussiness. <br> A responsive design of your prospective.</p>
                            <a href="" class="get_started"> Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item port_slider1">
                <div class="col-12">
                    <div class="container">
                        <div class="row pt-5 pb-5">
                            <div class="col-6 port_slider">
                                <h1>Create <br>Beautiful <br>Websites</h1>
                                <p class="port_p">Our 200+ templates are a great starting point for your professional website.</p>
                                <a href="" class="get_started"> Get Started</a>
                            </div>
                            <div class="col-6 port_slider">
                                <img class="d-block w-100" src="assets/pic/portfolio/lappi-removebg-preview.png" class="img-fluid" alt="First slide">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item port_slider1">
                <div class="col-12">
                    <div class="row pt-5 pb-5">
                        <div class="col-6 port_slider" data-aos="fade-right">
                            <img class="d-block w-50" src="assets/pic/portfolio/Daco_5877488-removebg-preview.png" class="img-fluid" alt="First slide">
                        </div>
                        <div class="col-6 port_slider" data-aos="fade-left">
                            <h1>Make <br>a bold <br>Statement</h1>
                            <p class="port_p">Our Key is to make our client happy.<br> Striking presentations that expand the preception of your viewers.</p>
                            <a href="" class="get_started"> Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End slider -->
    <!-- ====== product portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <h1 class="text-center ">Website Portfolio</h1>
        <div id="owl-web" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/services/Mighty.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/services/mighty2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/services/mighty3.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/services/mighty4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/services/mighty5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/services/mighty6.jpg" alt=""></a>
            </div>
        </div>

        <h1 class="text-center p-5">Mobile App Portfolio</h1>
        <div id="owl-app" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob2.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob4.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/mob5.png" alt=""></a>
            </div>
        </div>

        <h1 class="text-center p-5">Digital Marketing Portfolio</h1>
        <div id="owl-digi" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi5.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/digi6.jpg" alt=""></a>
            </div>
        </div>

        <h1 class="text-center p-5">Graphic Designing Portfolio</h1>
        <div id="owl-graphic" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap2.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap3.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap4.webp" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/grap6.jpg.crdownload" alt=""></a>
            </div>
        </div>

        <h1 class="text-center p-5">System Administration Portfolio</h1>
        <div id="owl-administration" class="owl-carousel owl-theme">
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
                <a href=""><img src="assets/pic/portfolio/sys4.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/sys5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/sys6.jpg" alt=""></a>
            </div>
        </div>

        <h1 class="text-center p-5">Software development Portfolio</h1>
        <div id="owl-software" class="owl-carousel owl-theme">
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft1.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft2.jpg" alt=""></a>
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

@endsection
