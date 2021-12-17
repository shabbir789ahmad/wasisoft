@extends('frontEnd.layouts.main')
@section('page_title')
    {{ "Graphic Designing | WasiSoft Technology" }}
@endsection

@section('main-container')
<main style="margin-top: 72px;">
    <!-- ======== Web Dep Services ======= -->
    <!-- ==== Hero section ==== -->
    <section class="web_hero ">
        <div class="container">
            <div class="col-lg-12">
                <div class="row p-2 ">
                    <div class="col-lg-6 text-center order-2 order-lg-1">
                        <h1>Graphic Designing</h1>
                        <h3>"Let us take you into a deeper experience,<br> make a moment a lasting conveyable memory. <br> <span>Let us help build your tribe.</span> "</h3>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="text-center">
                            <img src="assets/pic/Graphics-Designer-removebg-preview.png" height="" class="img-fluid" alt="">
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
                        <img src="assets/pic/services/LOGO.gif" class="img-fluid w-50" alt="">

                        <h2>Logo Design</h2>
                        <p>We immerse ourselves in the business of customers, study the target audience, and clearly indicate the marketing task that the logo should solve. Only after that we develop the concept.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/UI.gif" class="img-fluid w-50" alt="">
                        <h2>UI/UX Design</h2>
                        <p>We do design based on a long-term study of user behavior on sites of various subjects. This allows you to naturally bring a person to the desired action.</p>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="text-center">
                        <img src="assets/pic/services/SITE.gif" class="img-fluid w-50" alt="">

                        <h2>Site Design</h2>
                        <p>We take your corporate identity as a basis, so that loyal users remember it and want to return to an aesthetic and convenient resource.</p>
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
                        Our Design For Your Business Achievement
                    </h1>
                    <hr>
                    <p>&emsp; &emsp; We at WasiSoft Technology, provide premium sort of graphic design services all over Pakistan. Our graphic designers are not only expert in graphic designing but also they’re up-to-date as far as web promotion is concerned.
                        So here you can get multiple benefits under a table which is our specialty. WasiSoft Technology is known for producing best logo design in Pakistan.

                    </p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-9">
                    <h1>
                        Flyer and Brochures
                    </h1>
                    <p>
                        &emsp; &emsp; Distinctive kinds of flyer designs are missing in Pakistan and we are here to bring much needed style and class in brochures which will surely attract customers at will. If you’re looking for some of the eye- catching flyers and brochures,
                        let Elexoft know and leave the rest to you as we’ve got all covered for your convenience. Not only we will provide you contemporary and ingenious flyers, but we will come up with such a marketing plan that will turn the table around
                        as far as branding and advertising is concerned. Through our best logo designers and graphic designers, we’ll produce your message in such a crafty way that it will appear to be so pleasing on the eye and at the same moment so
                        appealing as well.
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="assets/pic/services/flyer.png" class="img-fluid" alt="">

                </div>
            </div>
            <div class="row ">
                <div class="col-md-3 order-md-1 order-2">
                    <img src="assets/pic/services/logodesign.png" class="img-fluid " alt="">
                </div>
                <div class="col-md-9 order-md-2 order-1">
                    <h1>Logo Design</h1>
                    <p>&emsp; &emsp; WasiSoft Technology is a hub of best logo designs as we have got all what is required to make marked and note- worthy logos. We will make your business a big thing by producing palpable logo which will make your identity
                        all over Pakistan. There are so many hurdles which people often face in logo design that logos are usually not effectively communicative due to which organizations faces so many issues but our foremost task is to produce such types
                        of logo which can stick to anyone’s mind and by just imagining about the logo, customer can think of whole organization and logo will be symbol of elegance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== leading developers -->
    <section class="leadingDep container-fluid" id="leadingDep ">
        <h1 class="text-center">Our leading developers will tell you about our technology</h1>
        <div class="owl-carousel lagi-carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="p-1">
                <img src="assets/pic/services/ai.png" alt="">
                <h2 class="text-center">ADOBE <br> ILLUSTRATOR</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/CorelDRAW logo.png" alt="">
                <h2 class="text-center">COREL <br>DRAW</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/adobe-xd.jpg" alt="">
                <h2 class="text-center">ADOBE <br> XD</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/flash.png" alt="">
                <h2 class="text-center">FLASH</h2>
            </div>

            <div class="p-1">
                <img src="assets/pic/services/paint.png" alt="">
                <h2 class="text-center">COREL <br>PAINT</h2>
            </div>
            <div class="p-1">
                <img src="assets/pic/services/id.png" alt="">
                <h2 class="text-center">ADOBE <br>INDESIDN</h2>

            </div>

        </div>
    </section>
    <!-- ====== portfolio ====== -->
    <section class="portfolioService" id="portfolioService">
        <h1 class="text-center ">Our Work</h1>

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

    </section>


</main>
@endsection
