@extends('frontEnd.layouts.main')
@section('page_title')
    {{ "System Administrative | WasiSoft Technology" }}
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
                        <h1>System Administration</h1>
                        <h3>"Let us take you into a deeper experience,<br> make a moment a lasting conveyable memory. <br> <span>Let us help build your tribe.</span> "</h3>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="text-center">
                            <img src="assets/pic/services/System-Adminstration-png-icon.png" height="" class="img-fluid" alt="">
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
                        <img src="assets/pic/services/admin-removebg-preview.png" class="img-fluid " width="250px" alt="">

                        <h2>User Administration</h2>
                        <p>The primary responsibility of a sysadmin is to support reliable and effective use of complex IT systems by end users, whether internal employees or external customers. </p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/main-removebg-preview.png" class="img-fluid " width="340px" alt="">
                        <h2>System Maintenance</h2>
                        <p>Sysadmins are responsible for dependable access and availability to IT systems. Sysadmins are therefore required to troubleshoot and fix issues that compromise system performance or access to an IT service.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/cap-removebg-preview.png" class="img-fluid " width="250px" alt="">

                        <h2>Application Compatibility</h2>
                        <p>Sysadmins support various IT teams to ensure that software systems and feature releases are compatible with the IT infrastructure. </p>
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
                        System Administration
                    </h1>
                    <hr>
                    <p>&emsp; &emsp; System administrators typically install, upgrade and monitor software and hardware. They may also be involved in data backup and recovery. They usually maintain the essentials such as operating systems, business applications,
                        security tools, web-servers, email, PCs, local and wide area networking both hardware and software and mid-range server hardware.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-9">
                    <h1>
                        What is a Systems Administrator?

                    </h1>
                    <p>
                        &emsp; &emsp; If you’ve ever considered a career in information technology, becoming a systems administrator would be a great start! Organizations of all sizes, shapes, and sectors have computer networks today. Businesses must build and maintain a strong,
                        secure computer infrastructure for digital communications. Getting all the hardware and software to operate together properly is a difficult task though. That’s why companies need skilled administrators with the experience and
                        knowledge to manage their complex computer options.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="assets/pic/services/01AA.png" class="img-fluid" alt="">

                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 order-md-1 order-2">
                    <img src="assets/pic/services/system-admin.png" class="img-fluid pb-3 pt-3" alt="">
                </div>
                <div class="col-md-9 order-md-2 order-1">
                    <h1>The system administrator is responsible for following things:</h1>
                    <ul>
                        <li>User administration (setup and maintaining account)</li>
                        <li>Maintaining system</li>
                        <li>Verify that peripherals are working properly</li>
                        <li>Quickly arrange repair for hardware in occasion of hardware failure</li>
                        <li>Monitor system performance</li>
                        <li>Create file systems</li>
                        <li>Install software</li>
                        <li>Create a backup and recover policy</li>
                        <li>Monitor network communication</li>
                        <li>Update system as soon as new version of OS and application software comes out</li>
                        <li>Implement the policies for the use of the computer system and network</li>
                        <li>Setup security policies for users. A sysadmin must have a strong grasp of computer security (e.g. firewalls and intrusion detection systems)
                        </li>
                        <li>Documentation in form of internal wiki</li>
                        <li>Password and identity management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== leading developers -->
    <section class="leadingDep container-fluid" id="leadingDep ">
        <h1 class="text-center">Our leading developers will tell you about our technology</h1>
        <div class="owl-carousel lagi-carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="p-1">
                <img src="assets/pic/services/network.png" alt="">
                <h2 class="text-center">NETWORKING</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/database.png" alt="">
                <h2 class="text-center">DATABASES</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/virtu.jpg" alt="">
                <h2 class="text-center">VIRTULIZATION</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/os.jpg" alt="">
                <h2 class="text-center">OPERATING <br>SYSTEM</h2>
            </div>

            <div class="p-1">
                <img src="assets/pic/services/hardware.jpg" alt="">
                <h2 class="text-center">HARDWARE</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/backup.jpg" alt="">
                <h2 class="text-center">BACKUP</h2>

            </div>

        </div>
    </section>
    <!-- ====== portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <h1 class="text-center ">Our Work</h1>

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
    </section>

</main>
@endsection
