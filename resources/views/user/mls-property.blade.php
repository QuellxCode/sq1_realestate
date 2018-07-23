@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumbs-title text-center">
                            <h1>MLS PROPERTIES</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property pt-130">
        <div class="container">
            <div class="row">
                @foreach($array_value as $value)
                  @foreach($value as $data)


                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-property mb-40 fadeInUp wow" data-wow-delay="0.2s">
                                <span>FOR SALE</span>
                                <div class="property-img">

                                                <a href="#">

           <img src="{{ url("condo/condo/Photo".$data["MLS"]."-1.jpeg") }}" alt="" style=" width:100%; height:380px">
</a>
                                </div>
                                <div class="property-desc">
                                    <div class="property-desc-top">
                                        <h6>
                                                <a href="#">

                                                            {{  $data["MLS"] }}</a></h6>
                                        <h4 class="price">${{  $data["MLS"]}}</h4>
                                        <div class="property-location">
                                            <p><img src="img/property/icon-5.png" alt="">{{  $data["Address"] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 @endforeach

                @endforeach

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination">
                        <div class="pagination-inner text-center">
                            <ul>
                                <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>. . . . . .</li>
                                <li><a href="#">15</a></li>
                                <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Brand section start-->
    <div class="brand-section pd-2">
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