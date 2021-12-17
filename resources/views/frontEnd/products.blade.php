@extends('frontEnd.layouts.main')

@section('page_title')
    {{ "Products | WasiSoft Technology" }}
@endsection

@section('main-container')

<div style="margin-top: 72px">
        <!-- ======== Inner Page ======== -->
        <div class="title_about" id="title_about">
            <div class="container text-center pt-5 pb-5">
                <h1>Product</h1>
                <h2 data-aos="fade-up">“A brand is a voice and a product is a souvenir. ”</h2>
            </div>
        </div>
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
        <!-- ====== portfolio ====== -->
        <section class="portfolioService" id="portfolioService">
            <div class="card-title" data-aos="fade-up">
                <h2 class="text-center service pb-5 pt-2">Product Sample</h2>
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
