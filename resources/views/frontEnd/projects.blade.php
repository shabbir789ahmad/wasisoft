@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Projects | WasiSoft Technology" }}
@endsection

@section('main-container')
<div style="margin-top: 72px">

    <!-- ======== Inner Page ======== -->
    <div class="title_about" id="title_about">
        <div class="container text-center pt-5 pb-5">
            <h1>Project</h1>
            <h2 data-aos="fade-up">“Before the official commencement and execution of a project contract, project quotations are submitted to your client for their approval.”</h2>
        </div>
    </div>
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

    <!-- ====== portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <div class="card-title" data-aos="fade-up">
            <h2 class="text-center service pb-5 pt-2">Running Projects</h2>
        </div>
        <div id="owl-software" class="owl-carousel owl-theme">

            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft4.png" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft5.jpg" alt=""></a>
            </div>
            <div class="item">
                <a href=""><img src="assets/pic/portfolio/soft6.png" alt=""></a>
            </div>
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
        </div>
    </section>

</div>
 @endsection
