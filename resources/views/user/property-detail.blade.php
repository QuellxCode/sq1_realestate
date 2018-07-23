@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url({{url('user-assets/img/banner.jpg')}})">
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
    <!--Breadcrumbs end-->

    <!--Feature property section-->
    <div class="feature-property properties-list pt-130">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 ">
                    <div class="single-property-details">
                        <div class="property-details-img">
                            @if(count($properties->feature_photo)>0)
                                <img src="{{ url($properties->feature_photo) }}" alt="" style=" width:100%; height:380px">
                            @endif
                        </div>
                        <div class="single-property-description">
                            <div class="desc-title">
                                <h5>Description</h5>
                            </div>
                            <div class="description-inner">

                                <p class="text-2">
                                    {{$properties->remarks}}
                                </p>

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
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar right-side">
                        <aside class="single-side-box search-property">
                            <div class="aside-title">
                                <h5>Contact</h5>
                            </div>
                            <div class="find_home-box">
                                <div class="find_home-box-inner">
                                    <form action="{{ url('property-leads/'.$properties->id) }}" id="formValidate" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="find-home-cagtegory">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="find-home-item ">
                                                        <input type="text" name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item ">
                                                        <input type="text" name="address" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item">
                                                        <input type="email" name="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="find-home-item ">
                                                        <input type="date" name="date_of_birth" placeholder="Date of birth">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="find-home-item ">
                                                        <input type="number" name="phone" placeholder="Phone No">
                                                    </div>
                                                </div>

                                                <div class="find-home_bottom">
                                                    <div class="col-md-12">
                                                        <div class="find-home-item">
                                                            <button type="submit">Request</button>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw&libraries=places&callback=initMap" async defer></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#select-amenities').change(function() {
                 //alert($(this).val());
                initMap();
            });
        });
        function initMap() {
            var property_id = "<?= $properties->id ?>";
            $.ajax({
                url: "latlong/"+property_id,
                success: passLatLong
            });
            var pyrmont;
            function passLatLong (data) {
                lat = data.latitude;
                lng = data.longitude;
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