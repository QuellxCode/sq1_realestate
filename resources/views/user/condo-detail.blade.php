@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumbs-title text-center">
                            <h1>PROPERTIES</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property properties-list pt-130">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <div class="single-property-details">
                        <div class="property-details-img">

                                <h2>Carousel Example</h2>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">

                                        @if($condo_group->models)
                                            @php $i = 1   @endphp
                                            @foreach($condo_group->models as $value)

                                        <div class="item  @if($i == 1) {{'active'}} @endif  ">
                                            <img src="{{ url($value->image) }}"  alt="Los Angeles" style="width:400px; height:300px">
                                        </div>
                                                @php $i++  @endphp
                                            @endforeach
                                        @endif

                                        {{--<div class="item">--}}
                                            {{--<img src="chicago.jpg" alt="Chicago" style="width:100px;">--}}
                                        {{--</div>--}}

                                        {{--<div class="item">--}}
                                            {{--<img src="ny.jpg" alt="New york" style="width:100px;">--}}
                                        {{--</div>--}}
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                        {{--@if(count($condo_group->feature_image)>0)--}}
                                {{--<img src="{{ url($condo_group->feature_image) }}" alt="" style=" width:100%; height:380px">--}}
                            {{--@endif--}}
                        </div>
                        <div class="single-property-description">
                            <div class="desc-title">
                                <h5>{{ $properties->name }}</h5>
                            </div>
                        </div>
                        <div class="single-property-description">
                            <div class="desc-title">
                                <h5>Description</h5>
                            </div>
                            <div class="description-inner">
                                <p>{{ $condo_group->features }}</p>
                            </div>
                        </div>
                        <div class="condition-amenities">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="amenities">
                                        <div class="amenities-title">
                                            <h5>Amenities</h5>
                                        </div>
                                        <select id="select-amenities">
                                            <option value="school">School</option>
                                            <option value="bank">Bank</option>
                                            <option value="bakery">Bakery</option>
                                            <option value="bus_station">Bus Station</option>
                                            <option value="doctor">Doctor</option>


                                        </select>
                                        <br/>
                                        <div class="amenities-list">
                                            <ul id="amenities-list">

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="planning">
                            <div class="row">
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="plan-title">
                                        <h5>Floor Plan</h5>
                                    </div>
                                    <div class="plan-map">
                                        @if(count($condo_group->floor_plan)>0)

                                            <img src="{{ url($condo_group->floor_plan) }}" alt="" style=" width:100%; height:380px">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-7  col-sm-6 col-xs-12">
                                    <div class="plan-title">
                                        <h5>Video Presentation</h5>
                                    </div>
                                    <div class="vimeo-video">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://player.vimeo.com/video/12690053"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar right-side">
                        <aside class="single-side-box search-property">
                            <div class="aside-title">
                                <h5>Search for Property</h5>
                            </div>
                            <div class="find_home-box">
                                <div class="find_home-box-inner">
                                    <form action="#">
                                        <div class="find-home-cagtegory">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="find-home-item custom-select ">
                                                        <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                                            <optgroup disabled="disabled" label="disabled">
                                                                <option>Hidden</option>
                                                            </optgroup>
                                                            <optgroup label="Australia">
                                                                <option>Sydney</option>
                                                                <option>Melbourne</option>
                                                                <option>Cairns</option>
                                                            </optgroup>
                                                            <optgroup label="USA">
                                                                <option>South Carolina</option>
                                                                <option>Florida</option>
                                                                <option>Rhode Island</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item custom-select">
                                                        <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                                            <optgroup disabled="disabled" label="disabled">
                                                                <option>Hidden</option>
                                                            </optgroup>
                                                            <optgroup label="Australia">
                                                                <option>southeastern coast</option>
                                                                <option>southeastern tip</option>
                                                                <option>northwest corner</option>
                                                            </optgroup>
                                                            <optgroup label="USA">
                                                                <option>Charleston</option>
                                                                <option>St. Petersburg</option>
                                                                <option>Newport</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="find-home-item">
                                                        <input type="text" name="min-area" placeholder="Min area (sqft)">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item ">
                                                        <input type="text" name="max-area" placeholder="Max area (sqft)">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="find-home-item no-caret  custom-select">
                                                        <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                                            <optgroup  label="1">
                                                                <option label="1">1 Beadrooms</option>
                                                                <option>2 Beadrooms</option>
                                                                <option>3 Beadrooms</option>
                                                                <option>4 Beadrooms</option>
                                                                <option>5 Beadrooms</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item no-caret  custom-select">
                                                        <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                                            <optgroup label="2">
                                                                <option>1 Bathrooms</option>
                                                                <option>2 Bathrooms</option>
                                                                <option>3 Bathrooms</option>
                                                                <option>4 Bathrooms</option>
                                                                <option>5 Bathrooms</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="find-home_bottom">
                                                    <div class="col-md-12">
                                                        <div class="find-home-item">
                                                            <!-- shop-filter -->
                                                            <div class="shop-filter">
                                                                <div class="price_filter">
                                                                    <div class="price_slider_amount">
                                                                        <input type="submit"  value="price range"/>
                                                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                                    </div>
                                                                    <div id="slider-range"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="find-home-item">
                                                            <button type="submit">SEARCH PROPERTY </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <aside class="single-side-box feature">
                            <div class="aside-title">
                                <h5>Featured Property</h5>
                            </div>
                            <div class="feature-property">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc text-center">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                    <h4 class="price">$52,354</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="img/property/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc text-center">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                    <h4 class="price">$52,354</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="img/property/5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc text-center">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                    <h4 class="price">$52,354</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="img/property/11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc text-center">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                    <h4 class="price">$52,354</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="single-side-box tags">
                            <div class="aside-title">
                                <h5>Our Agents</h5>
                            </div>
                            <div class="our-tag-list">
                                <ul>
                                    @foreach($property_agent as $value)
                                        @foreach($value->agent as $agent)

                                            <h5>{{ $agent->first_name }}</h5>
                                            @if($agent->agent)
                                                <p>Phont No :{{ $agent->agent->phone }}</p>
                                            @endif
                                        @endforeach
                                    @endforeach



                                    {{--<li><a href="#">Home</a></li>--}}
                                    {{--<li><a href="#">Appartment</a></li>--}}
                                    {{--<li><a href="#">Duplex villa</a></li>--}}
                                    {{--<li><a href="#">But property</a></li>--}}
                                </ul>
                            </div>
                        </aside>

                        <aside class="single-side-box tags">
                            <div class="aside-title">
                                <h5>Brokerage</h5>
                            </div>
                            <div class="our-tag-list">
                                @if(count($brokerage) > 0 && $brokerage->brokerage)
                                    <h5>{{ $brokerage->brokerage->name }}</h5>
                                    <p>Address :{{ $brokerage->brokerage->address }}</p>
                                    <p>Phone No :{{ $brokerage->brokerage->phone }}</p>
                                @endif

                            </div>
                        </aside>
                        <aside class="single-side-box tags">
                            <div class="aside-title">
                                <h5>Map</h5>
                            </div>
                            <div id="map" style="width: 100%; height: 224px;"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Feature property section end-->


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
    <div id="service-helper"></div>
    {{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw&libraries=places,geometry&callback=initMap" async defer></script>--}}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw&libraries=places&callback=initMap" async defer></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#select-amenities').change(function() {
                //alert($(this).val());
                initMap();
            });
        });
        function initMap() {
            var property_id = "<?= $properties->property->id ?>";
            $.ajax({
                url: "latlong/"+property_id,
                success: passLatLong
            });
            var pyrmont;
            function passLatLong (data) {
                lat = data.latitude;
                lng = data.longitude;
                //alert(lng);
                pyrmont = {lat: parseFloat(data.latitude), lng: parseFloat(data.longitude)};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: pyrmont
                });

                var marker = new google.maps.Marker({
                    position: pyrmont,
                    map: map,
                    title: 'Hello World!'
                });
                var service = new google.maps.places.PlacesService($('#service-helper').get(0));
                service.nearbySearch({
                    location: pyrmont,
                    radius: 1000,
                    type: $('#select-amenities').val()
                }, callback);
            }
        }
        function callback(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                $('#amenities-list').html("");
                for (var i = 0; i <= 10; i++) {
                    //console.log(results[i].name);
                    $('#amenities-list').append('<li><i class="fa fa-check-square-o"></i> <span>' + results[i].name + '</span></li>\n');
                }
            }
        }
    </script>

@stop