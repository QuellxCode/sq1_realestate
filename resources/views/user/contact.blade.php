@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner" >
                        <div class="breadcrumbs-title text-center">
                            <h1>CONTACT US</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="contact-page pt-130">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome-haven">
                <div class="container">
                <div class="row">
                <div class="col-md-6 col-sm-12 welcome-pd fadeInLeft wow" data-wow-delay="0.2s">
                <div class="welcome-title">
                <h3 class="title-1">WELCOME TO <span>SQ1</span></h3>
                <h4 class="title-2">WE ALWAYS PROVIDE PRORITY TO OUR CUSTOMER</h4>
                </div>
                <div class="welcome-content">
                <p> {{ $configuration->about_website }}</p>
                </div>
                <div class="welcome-services">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="w-single-services">
                <div class="services-img">
                <img src="img/welcome/icon-1.png" alt="">
                </div>
                <div class="services-desc">
                <h6>Low Cost</h6>
                <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="w-single-services">
                <div class="services-img">
                <img src="img/welcome/icon-2.png" alt="">
                </div>
                <div class="services-desc">
                <h6>Good Marketing </h6>
                <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="w-single-services">
                <div class="services-img">
                <img src="img/welcome/icon-3.png" alt="">
                </div>
                <div class="services-desc">
                <h6>Easy to Find</h6>
                <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="w-single-services">
                <div class="services-img">
                <img src="img/welcome/icon-4.png" alt="">
                </div>
                <div class="services-desc">
                <h6>Reliable</h6>
                <p>Low cost provides yur best for <br> elit, sed do eiusmod tempe</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                {{--<div class="col-md-6 col-sm-12 col-xs-12">--}}
                {{--<div class="welcome-haven-img fadeInRight wow"  data-wow-delay="0.2s">--}}
                {{--<img src="{{ url('user-assets/img/welcome/2.jpg') }}" alt="">--}}
                {{--</div>--}}
                {{--</div>--}}
                </div>
                </div>
                </div>
                {{--<div class="map-area">--}}
                    {{--<div class="place-map-inner">--}}
                        {{--<div id="googleMap-2" style="width:100%;height:466px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="contact-list-inner">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-contact_list">
                                        <div class="single-contact-icon">
                                            <img src="img/icon/c-4.png" alt="">
                                        </div>
                                        <div class="single-contact-desc">
                                            <p>256, 1st AVE, Manchester</p>
                                            <p>125 , Noth England</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 ">
                                    <div class="single-contact_list">
                                        <div class="single-contact-icon">
                                            <img src="img/icon/c-5.png" alt="">
                                        </div>
                                        <div class="single-contact-desc">
                                            <p>Telephone : +012 345 678 102</p>
                                            <p>Telephone : +012 345 678 102</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-contact_list">
                                        <div class="single-contact-icon">
                                            <img src="img/icon/c-6.png" alt="">
                                        </div>
                                        <div class="single-contact-desc">
                                            <p>Email : info@example.com</p>
                                            <p>Web : www.example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leave-message">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="contact-form-inner">
                                <div class="contact-form-title">
                                    <h5>Leave a Message</h5>
                                </div>
                                <form id="contact-form" action="mail.php" method="post">
                                    <input name="name" type="text" placeholder="Your Name">
                                    <input  name="email" type="text" placeholder="Email here">

                                    <textarea name="message" placeholder="Write here"></textarea>
                                    <div class="form-submit">
                                        <button type="submit">Submit</button>
                                    </div>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact page end-->

<!--Brand section start-->
<div class="brand-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-list">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/2.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/3.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/4.png" alt=""></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @stop