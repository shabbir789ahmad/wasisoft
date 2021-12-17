@extends('frontEnd.layouts.main')
@section('page_title')
    {{ "Software Development | WasiSoft Technology" }}
@endsection

@section('main-container')
<main style="margin-top: 72px;">
    <!-- ======== Web Dep Services ======= -->
    <!-- ==== Hero section ==== -->
    <section class="web_hero app_hero">
        <div class=" container ">
            <div class="col-lg-12 ">
                <div class="row p-2 ">
                    <div class="col-lg-6 text-center order-2 order-lg-1 ">
                        <h1>Software Development</h1>
                        <h3>"Let us take you into a deeper experience,<br> make a moment a lasting conveyable memory. <br> <span>Let us help build your tribe.</span> "</h3>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="text-center">
                            <img src="assets/pic/services/noc-services-removebg-preview.png" height="" class="img-fluid" alt="">
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
                        <img src="assets/pic/services/Source-code-icon-png-1.png" class="img-fluid w-50" alt="">

                        <h2>Source Control</h2>
                        <p>Source Control is a security plan to secure your working code. Implement Source Control by keeping the code in a single location, with secure and logged access.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/Continuous-Integration-icon-png-1.png" class="img-fluid w-50" alt="">
                        <h2>Continuous Integration</h2>
                        <p>Continuous Integration evolved out of a case of what not to do. CI works to make sure each component is compatible through the whole development cycle.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/SDLC-Management-Systems-1.png" class="img-fluid w-50" alt="">

                        <h2>SDLC Systems</h2>
                        <p>A software development cycle management system works to control and manage each step of the development cycle.</p>
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
                        What is the Software Development Life Cycle?
                    </h1>
                    <hr>
                    <p>&emsp; &emsp; Software Development Life Cycle is the application of standard business practices to building software applications. It’s typically divided into six to eight steps: Planning, Requirements, Design, Build, Document, Test,
                        Deploy, Maintain. Some project managers will combine, split, or omit steps, depending on the project’s scope. These are the core components recommended for all software development projects.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-9">
                    <h1>
                        Software Development (SDLC)
                    </h1>
                    <p>
                        &emsp; &emsp; SDLC is a way to measure and improve the development process. It allows a fine-grain analysis of each step of the process. This, in turn, helps companies maximize efficiency at each stage. As computing power increases, it places a higher
                        demand on software and developers.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="assets/pic/services/NOC.png" class="img-fluid" alt="">

                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 order-md-1 order-2">
                    <img src="assets/pic/services/software-development.jpg" class="img-fluid pb-3 pt-3" alt="">
                </div>
                <div class="col-md-9 order-md-2 order-1">
                    <h1>Software development</h1>
                    <p>&emsp; &emsp; This is the actual writing of the program. A small project might be written by a single developer, while a large project might be broken up and worked by several teams. Use an Access Control or Source Code Management
                        application in this phase. These systems help developers track changes to the code. They also help ensure compatibility between different team projects and to make sure target goals are being met.</p>
                    <p>&emsp; &emsp; The coding process includes many other tasks. Many developers need to brush up on skills or work as a team. Finding and fixing errors and glitches is critical. Tasks often hold up the development process, such as waiting
                        for test results or compiling code so an application can run. SDLC can anticipate these delays so that developers can be tasked with other duties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== leading developers -->
    <section class="leadingDep container-fluid" id="leadingDep ">
        <h1 class="text-center">Our leading developers will tell you about our technology</h1>
        <div class="owl-carousel lagi-carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="p-1">
                <img src="assets/pic/services/cloud.png" alt="">
                <h2 class="text-center">CLOUD <br> COMPUTING</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/devsep.png" alt="">
                <h2 class="text-center">SECURITY <br> DEVSEC</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/server.png" alt="">
                <h2 class="text-center">SERVERLESS
                    <br> COMPUTING
                </h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/docker_4x.jpg" alt="">
                <h2 class="text-center">DOCKER</h2>
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



</main>
@endsection
