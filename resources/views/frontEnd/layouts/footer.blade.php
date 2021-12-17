<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container-fluid">

        <div class="text-center client_h2" data-aos="fade-up">
            <h2>Our Clients</h2>
        </div>

        <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
            @foreach ($clients as $item)
            <img  src="{{asset('uploads/clients/'.$item->image)}}" alt="client image">
            @endforeach
        </div>

    </div>
</section>
<!-- End Clients Section -->
<!-- ============= Client Says Section=================== -->
<div class="text-center" id="clientSays">
    <div id="carouselExampleSlidesOnly" class="carousel slide clientSays pointer-event" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block ">
                    <div class=" client-txt p-5">
                        <div class=" ">
                            <h2>Client Says</h2>
                        </div>
                        <p>"They’ve been consistent throughout the years and grown together with us. Even as they’ve grown, they haven’t lost sight of what they do. Most of their key resources are still with them, which is also a testament to their organization."</p>
                        <pre>- James Mary -</pre>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="d-block ">
                    <div class="  p-5">
                        <div class="client-txt ">
                            <h2>Client Says</h2>
                        </div>
                        <p>"It is a distinct pleasure for me to recommend Thrive Internet Marketing to any and all interested parties. They have been professional, comprehensive and competent throughout the process of our working together. "</p>
                        <pre>- Robert Patricia -</pre>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block ">
                    <div class="  p-5 col-12">
                        <div class="client-txt ">
                            <h2>Client Says</h2>
                        </div>
                        <p>"Since having our new website built by Thrive, we have seen a 200% increase in the number of online contact forms being filled out and returned to us. 200% increase in the number of online contact forms being filled out and
                            returned to us. "</p>
                        <pre>- Jerry Tom -</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End client says section -->
<!-- ========== Contact Details section ========== -->
<main class="col-md-12" id="contactDetails">
    <div class="row pt-5">
        <div class="col-md-3">
            <div class="dbox w-100 text-center" data-aos="fade-top-bottom">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="text">
                    <p><span>Address:</span> 10-C2, Main UMT Road, Johar Town, Lahore</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center" data-aos="fade-top-bottom" data-aos-delay="100">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="text">
                    <p><span>Phone:</span> <a href="">+ 92 300 9191 943</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center" data-aos="fade-top-bottom" data-aos-delay="200">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text">
                    <p><span>Email:</span> <a href="mailto:info@wasisoft.com">info@wasisoft.com</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center" data-aos="fade-top-bottom" data-aos-delay="300">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                </div>
                <div class="text">
                    <p><span>Website:</span> <a href="#">wasisoft.com</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Contact details -->

<!-- ========== Footer ========== -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 footer-item" data-aos="fade-up">
                <h4><span>WASI</span>SOFT
                    <tech>TECHNOLOGY</tech>
                </h4>
                <p>Welcome to WasiSoft Technology leading top software house in USA, Dubai and Pakistan.<br> We offer our services in Mobile Apps, Websites and ERP. <br>WasiSoft Technology have must idea for your business.</p>
                <ul class="social-icons">
                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item footer-a" data-aos="fade-up">
                <h4 class="">Services</h4>
                <table class="table  text-white">

                    <tbody class="fw-normal">
                        <tr>
                            <td><a href="{{('/WebDepServices')}}"><i class="fas fa-arrow-right"></i> Web Development</a></td>

                        </tr>
                        <tr>
                            <td><a href="{{('/MobAppServices')}}"><i class="fas fa-arrow-right"></i> Mobile App Development</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/digiMartServices')}}"><i class="fas fa-arrow-right"></i> Digital Marketing</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/SysAdmServices')}}"><i class="fas fa-arrow-right"></i> System Administration</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/services')}}"><i class="fas fa-arrow-right"></i> Other Services</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="col-md-3 footer-item footer-a" data-aos="fade-up">
                <h4 class="">Products</h4>
                <table class="table  text-white">
                    <tbody class="fw-normal">
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> FYP Supervision</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> Inventory System</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> Point Of Sale (POS)</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> ERP System</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/products')}}"><i class="fas fa-arrow-right"></i> Other Products</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-3 footer-item footer-a" data-aos="fade-up">
                <h4 class="">Projects</h4>
                <table class="table  text-white">
                    <tbody class="fw-normal">
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> IT Drill</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> Let's Grow</a></td>
                        </tr>
                        <tr>
                            <td><a href="http://sahafi.tv/"><i class="fas fa-arrow-right"></i> Sahafi TV</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/demo')}}"><i class="fas fa-arrow-right"></i> WASI TECH</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{('/projects')}}"><i class="fas fa-arrow-right"></i> Other Projects</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="text-center p-2 copyRight" id="copyRight">
        <span>
            © 2015-2021 Copyright: All &reg; Rights Reserved by
            <a class="text-warning" href="mailto:info@wasisoft.com">WasiSoft Technology</a></span>
    </div>
    <!-- Copyright -->
</footer>
<!--End Footer -->
<a href="#" class="back-to-top"><i class="far fa-hand-pointer"></i></a>
<a href="https://api.whatsapp.com/send?phone=923009191943&text=Hello%20Sir,%20How%20can%20I%20help%20you?" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js">
</script>
<!-- below links for client -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        var path = window.location.href;
        $('ul li a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });
    });
</script>


</body>
</html>
