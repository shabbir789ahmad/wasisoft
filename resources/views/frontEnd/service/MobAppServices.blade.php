@extends('frontEnd.layouts.main')
@section('page_title')
    {{ "Mobile App | WasiSoft Technology" }}
@endsection

@section('main-container')
<main style="margin-top: 72px;">
     <!-- ==== Hero section ==== -->
     <section class="web_hero app_hero">
        <div class="container">
            <div class="col-lg-12">
                <div class="row p-2 ">
                    <div class="col-lg-6 text-center order-2 order-lg-1">
                        <h1>Mobile App Development</h1>
                        <h3>"Let us take you into a deeper experience,<br> make a moment a lasting conveyable memory. <br> <span>Let us help build your tribe.</span> "</h3>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="text-center">
                            <img src="assets/pic/App-Development.png" height="" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End hero -->
    <!-- ==== responsive cards ==== -->
    <section class="responsiveCards" id="responsiveCards">
        <div class="col-md-12">
            <div class="row">
                <div class="card col-md-4">
                    <div class="text-center ">
                        <img src="assets/pic/services/responsive-site.gif" class="img-fluid w-50" alt="">

                        <h2>Native Application</h2>
                        <p>A native application is a mobile application that is developed directly for an operating system (Android, iOS, etc). This application is generally built in the language specific to the system.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/mobileweb.gif" class="img-fluid w-50" alt="">
                        <h2>Mobile App Application</h2>
                        <p>The mobile web application is a thin client. Long neglected in favor of the native application, it is back in force with the development of HTML5 and CSS3 standards which will improve the user experience and offer more richness
                            and functionality on mobile.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/hybrid.gif" class="img-fluid w-50" alt="">

                        <h2>Hybird Application</h2>
                        <p>A hybrid application combines the use of HTML5, JavaScript and CSS web technologies which are directly encapsulated in a native application. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ==== Next Level ==== -->
    <section class="nextLevel container-fluid" id="nextLevel">
        <div class="col-md-12">
            <div class="row pb-3">

                <div class="col-md-12">
                    <h1 class="first_h h1" id="first_h">
                        Best Mobile App Strategy
                    </h1>
                    <hr>
                    <p>&emsp; &emsp; When it comes to mobile applications and mobile development services, we are leading this world in Pakistan. Whether it is android version or ios version, we are adept and deft and our designers are making fascinating
                        and incredible innovations in mobile industry. Our android developers are making application keeping in minds the pros and cons. We know what is user friendly applications are and we are merging them at a platform where mobile
                        companies can execute their versatility to produce contemporary versions of android app services in Pakistan and ipad Apps.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-9">
                    <h1>
                        iPhone Apps
                    </h1>
                    <p>
                        &emsp; &emsp; A large community is using iPhone in current world. This is a version that is elite out of all and our developers are making it even more valuable for customers. We will surely build you application which can compete at international level
                        to get the ball rolling for your organization.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="assets/pic/services/apple-857-675897.png" class="img-fluid" alt="">

                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 order-md-1 order-2">
                    <img src="assets/pic/services/android_app.png" class="img-fluid pb-3 pt-3" alt="">
                </div>
                <div class="col-md-9 order-md-2 order-1">
                    <h1>Android Apps</h1>
                    <p>&emsp; &emsp; As far as producing new profitable applications are concerned, we are second to none and we’re bringing much needed innovation on the table. In a very short span of time, we can produce breaking new ground sort of applications
                        for our customers which will surely provide comfort to huge population who is currently using android version. In short we are your one stop solution as far as android versions are concerned.</p>
                    <p>&emsp; &emsp; These applications are bringing innovation in our lives and as we are changing our mode of living and we are adapting to technology. In current world, we are living in the age of technological things and we are using
                        technology at every step. Out of all app development companies in Pakistan, we are second to none when it comes to innovation and modernization. Technology is opening doors for amelioration and this has improved our live in a way
                        better than our expectations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== leading developers -->
    <section class="leadingDep container-fluid" id="leadingDep ">
        <h1 class="text-center">Our leading developers will tell you about our technology</h1>
        <div class="owl-carousel lagi-carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="p-1">
                <img src="assets/pic/services/java2.png" alt="">
                <h2 class="text-center">JAVA</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/ruby.png" alt="">
                <h2 class="text-center">RUBY</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/flutter5786.jpg" alt="">
                <h2 class="text-center">FLUTTER</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/python.png" alt="">
                <h2 class="text-center">PYTHON</h2>
            </div>

            <div class="p-1">
                <img src="assets/pic/services/js.svg" alt="">
                <h2 class="text-center">JAVASCRIPT</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/1200px-.NET_Core_Logo.svg.png" alt="">
                <h2 class="text-center">.NET</h2>
            </div>
        </div>
    </section>
    <!-- ====== portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <h1 class="text-center ">Our Work</h1>

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
    </section>


</main>
@endsection
