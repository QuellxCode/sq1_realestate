@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner" >
                        <div class="breadcrumbs-title text-center">
                            <h1>PROPERTIES FOR RENT</h1>
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
                @foreach($properties as $value)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-property mb-40 fadeInUp wow" data-wow-delay="0.2s">
                            <span class="bg-blue">FOR Rent</span>
                            <div class="property-img">
                                @if($value->type == "condo")
                                    <a href="{{ url('/condo-list/'.$value->id) }}">
                                        @else
                                            <a href="{{ url('/property/detail/'.$value->id) }}">
                                                @endif
                                                @if(count($value->feature_photo)>0)
                                                    <img src="{{ url($value->feature_photo) }}" alt="" style=" width:100%; height:380px">
                                                @endif
                                            </a>
                            </div>
                            <div class="property-desc">
                                <div class="property-desc-top">
                                    <h6>
                                        @if($value->type == "condo")
                                            <a href="{{ url('/condo-list/'.$value->id) }}">
                                                @else
                                                    <a href="{{ url('/property/detail/'.$value->id) }}">
                                                        @endif
                                                        {{ $value->name }}</a></h6>
                                    <h4 class="price">${{ $value->price }}</h4>
                                    <div class="property-location">
                                        <p><img src="img/property/icon-5.png" alt="">{{ $value->location }}</p>
                                    </div>
                                </div>
                                @if($value->type == "semi-detached" || $value->type == "detached")

                                @if($value->semiDetached)
                                <div class="property-desc-bottom">
                                    <div class="property-bottom-list">
                                        <ul>
                                            <li>
                                                <img src="{{ url('user-assets/img/property/icon-1.png') }}" alt="">
                                                <span>{{ $value->semiDetached->area }} sqft</span>
                                            </li>
                                            <li>
                                                <img src="{{ url('user-assets/img/property/icon-2.png') }}" alt="">
                                                <span>{{ $value->semiDetached->bed_room }} </span>
                                            </li>
                                            <li>
                                                <img src="{{ url('user-assets/img/property/icon-3.png') }}" alt="">
                                                <span>{{ $value->semiDetached->bath_room }} </span>
                                            </li>
                                            <li>
                                                <img src="{{ url('user-assets/img/property/icon-4.png') }}" alt="">
                                                <span>{{ $value->semiDetached->garage }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    @elseif($value->detached)
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="{{ url('user-assets/img/property/icon-1.png') }}" alt="">
                                                        <span>{{ $value->detached->area }} sqft</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ url('user-assets/img/property/icon-2.png') }}" alt="">
                                                        <span>{{ $value->detached->bed_room }} </span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ url('user-assets/img/property/icon-3.png') }}" alt="">
                                                        <span>{{ $value->detached->bath_room }} </span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ url('user-assets/img/property/icon-4.png') }}" alt="">
                                                        <span>{{ $value->detached->garage }} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    @endif
                                    @endif
                            </div>
                        </div>
                    </div>
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