<!DOCTYPE html>
<html lang="en">

@include('frontEnd.layouts.head')

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex">

            <div class="logo mr-auto ml-4">
                <div class="row">
                    <a href="index.html"><img src="assets/pic/Website-Logo-1.png" alt="" class="img-fluid ml-2"></a>
                    <h1 class="text-light"><a href="{{('/')}}"><span>WASI</span>SOFT <tech>TECHNOLOGY</tech></a></h1>
                </div>

            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{'/' == request()->path() ? 'activated ' : ''}}" >
                        <a href="{{('/')}}">Home</a>
                    </li>
                    <li class="{{'about' == request()->path() ? 'activated ' : ''}}">
                        <a href="{{('/about')}}">About</a>
                    </li>
                    <li  class="drop-down {{'services' == request()->path() ? 'activated ' : ''}}">
                        <a href="{{('/services')}}">Services</a>
                        <ul>
                            <li><a href="{{('/WebDepServices')}}">Web Development</a></li>
                            <li><a href="{{('/MobAppServices')}}">Mobile App Development</a></li>
                            <li><a href="{{('/digiMartServices')}}">Digital Marketing</a></li>
                            <li><a href="{{('/GrapDesignServices')}}">Graphic Designing</a></li>
                            <li><a href="{{('/SoftDepServices')}}">Software Development</a></li>
                            <li><a href="{{('/SysAdmServices')}}">System Administration</a></li>
                        </ul>
                    </li>
                    <li class="drop-down {{'products' == request()->path() ? 'activated ' : ''}}"><a href="{{('/products')}}">Product</a>
                        <ul>
                            <li><a href="{{('/demo')}}">School Management System</a></li>
                            <li><a href="{{('/demo')}}">Inventory System</a></li>
                            <li><a href="{{('/demo')}}">Point of Sale (POS)</a></li>
                            <li><a href="{{('/demo')}}">Hospital Management System</a></li>
                            <li><a href="{{('/demo')}}">ERP System</a></li>
                            <li><a href="{{('/demo')}}">FYP Supervision</a></li>
                        </ul>
                    </li>
                    <li class="drop-down {{'projects' == request()->path() ? 'activated ' : ''}}"><a href="{{('/projects')}}">Projects</a>
                        <ul>
                            <li><a href="{{('/demo')}}">IT Drill</a></li>
                            <li><a href="{{('/demo')}}">Let's Grow</a></li>
                            <li><a href="http://sahafi.tv/">Sahafi TV</a></li>
                            <li class="drop-down"><a href="#">WASI Projects</a>
                                <ul>
                                    <li><a href="{{('/demo')}}">WASI CORE</a></li>
                                    <li><a href="{{('/demo')}}">WASI LAGI</a></li>
                                    <li><a href="{{('/demo')}}">WASI TECH</a></li>
                                    <li><a href="{{('/demo')}}">WASI MARKET</a></li>
                                    <li><a href="{{('/demo')}}">WASI QLEARN</a></li>
                                    <li><a href="{{('/demo')}}">WASI OUTFIT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="{{'portfolio' == request()->path() ? 'activated' : ''}}">
                        <a href="{{('/portfolio')}}">Portfolio</a>
                    </li>
                    <li class="{{'contact' == request()->path() ? 'activated' : ''}}">
                        <a href="{{('/contact')}}">Contact</a>
                    </li>

                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->
