<!DOCTYPE html>
<html>
<head>
    @include('admin.include.head')
</head>
<body class="white rentals-wrapper full-screen">
<div class="all-wrapper rentals">
    <!--------------------
    START - Top Bar
    -------------------->
    <div class="top-bar-rentals">
        <div class="logo-w">
            <a class="logo" href="index.html">
                <div class="logo-element"></div>
                <div class="logo-label">
                    Property
                </div>
            </a>
            <div class="filters-toggler">
                <i class="os-icon os-icon-hamburger-menu-1"></i>
            </div>
        </div>
        <div class="filters">
            <div class="filters-header">
                <h4>
                    Search By
                </h4>
            </div>
            <form class="form-inline">
                <div class="filter-w">
                    <div class="filter-body">
                        <div class="form-group">
                            <label for="">Zip Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="os-icon os-icon-ui-74"></i>
                                    </div>
                                </div>
                                <input class="form-control zip-width" placeholder="Zip Code" type="text" value="11234">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-w">
                    <div class="filter-body">
                        <div class="form-group">
                            <label for=""> Dates</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="os-icon os-icon-ui-83"></i>
                                    </div>
                                </div>
                                <input class="form-control date-range-picker" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons-w">
                    <a class="btn btn-upper btn-primary" href="#"><i class="os-icon os-icon-ui-37"></i><span>Search</span></a>
                </div>
            </form>
        </div>
    </div>
    <!--------------------
    END - Top bar
    --------------------><!--------------------
      START - Rentals Content
      --------------------><div class="property-single">
        <div class="property-media" style="background-image: url({{ url($properties->feature_photo)}})">
            <div class="media-buttons">
                <a href="#"><i class="os-icon os-icon-documents-07"></i><span>View Photos</span></a><a href="#"><i class="os-icon os-icon-ui-03"></i><span>Like</span></a>
            </div>
        </div>
        <div class="property-info-w">
            <div class="property-info-main">
                <div class="badge badge-red">
                    For {{ $properties->availiable }}
                </div>
                <div class="item-features">
                    <div class="feature">
                        4 Bedrooms
                    </div>
                    <div class="feature">
                        Entire Home
                    </div>
                </div>
                <h1>
                    {{ $properties->name }}
                </h1>
                <div class="property-price">
                    <strong>$1,240,000</strong><span>Listing Price</span>
                </div>
                <div class="item-reviews">
                    <div class="reviews-stars">
                        <select class="item-star-rating">
                            <option value="1">
                                1
                            </option>
                            <option value="2">
                                2
                            </option>
                            <option value="3">
                                3
                            </option>
                            <option selected="yes" value="4">
                                4
                            </option>
                            <option value="5">
                                5
                            </option>
                        </select>
                    </div>
                    <div class="reviews-count">
                        14 Reviews
                    </div>
                </div>
                @if($properties->type == 'semi-detached')
                <div class="property-features-highlight">
                    <div class="feature">
                        <i class="os-icon os-icon-home-34"></i><span>{{ $properties->semiDetached->bed_room }} Bedrooms</span>
                    </div>
                    <div class="feature">
                        <i class="os-icon os-icon-home-13"></i><span>{{ $properties->semiDetached->bath_room }} Bathrooms</span>
                    </div>
                    <div class="feature">
                        <i class="os-icon os-icon-home-09"></i><span>{{ $properties->semiDetached->garage }} Garage</span>
                    </div>
                    <div class="feature">
                        <i class="os-icon os-icon-ui-83"></i><span>{{ $properties->semiDetached->area }} Area</span>
                    </div>
                </div>
                @endif
                <div class="property-description">
                    <p>
                        {{ $properties->remarks }}
                    </p>
                </div>
                <div class="property-section">
                    <div class="property-section-header">
                        Extra Charges
                        <div class="filter-toggle">
                            <i class="os-icon-minus os-icon"></i>
                        </div>
                    </div>
                    <div class="property-section-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        Cleaning Fee: <strong>$50</strong>
                                    </li>
                                    <li>
                                        Security Deposit: <strong>$200</strong>
                                    </li>
                                    <li>
                                        Weekly Discount: <strong>10%</strong>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        Monthly Discount: <strong>15%</strong>
                                    </li>
                                    <li>
                                        Weekend Price: <strong>$199 / night</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-note">
                            <h6>
                                Always communicate through
                            </h6>
                            <p>
                                To protect your payment, never transfer money or communicate outside of the our website or app.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="property-section">
                    <div class="property-section-header">
                        Facts &amp; Features
                        <div class="filter-toggle">
                            <i class="os-icon-minus os-icon"></i>
                        </div>
                    </div>
                    <div class="property-section-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <i class="os-icon os-icon-fire"></i><span>Fire Detector</span>
                                    </li>
                                    <li>
                                        <i class="os-icon os-icon-ui-09"></i><span>Remote Door Lock</span>
                                    </li>
                                    <li>
                                        <i class="os-icon os-icon-old-tv-2"></i><span>Cable TV</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                        <i class="os-icon os-icon-home-11"></i><span>Free toilet paper</span>
                                    </li>
                                    <li>
                                        <i class="os-icon os-icon-home-09"></i><span>Modern Kitchen</span>
                                    </li>
                                    <li>
                                        <i class="os-icon os-icon-ui-74"></i><span>Convenient Location</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-section">
                    <div class="property-section-header">
                        House Rules
                        <div class="filter-toggle">
                            <i class="os-icon-minus os-icon"></i>
                        </div>
                    </div>
                    <div class="property-section-body">
                        <ul>
                            <li>
                                No smoking
                            </li>
                            <li>
                                Not suitable for pets
                            </li>
                            <li>
                                Check in is anytime after 3PM
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="property-section">
                    <div class="property-section-header">
                        Cancellation Policy
                        <div class="filter-toggle">
                            <i class="os-icon-minus os-icon"></i>
                        </div>
                    </div>
                    <div class="property-section-body">
                        <h6>
                            Strict
                        </h6>
                        <p>
                            Cancel up to 7 days before your trip and get a 50% refund. Cancel within 7 days of your trip and the reservation is non-refundable.
                        </p>
                    </div>
                </div>
                <div class="property-section">
                    <div class="property-section-header">
                        Location Info
                        <div class="filter-toggle">
                            <i class="os-icon-minus os-icon"></i>
                        </div>
                    </div>
                    <div class="property-section-body">
                        <div id="map" style="height:200px"></div>
                    </div>
                </div>
            </div>
            <div class="property-info-side">
                <div class="side-section">
                    <div class="side-section-header">
                        Request Information
                    </div>
                    <div class="side-section-content">
                        <form action="" class="side-action-form">

                            <div class="form-buttons">
                                <button class="btn btn-primary" data-target="#exampleModal1" data-toggle="modal" type="button"> Contact Agent</button>

                            </div>
                        </form>
                    </div>
                </div>

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($properties->photo as $key=>$value)
                        <div class="carousel-item
                                @if($key == 1)
                                {{ 'active' }}
                                @endif
                                ">
                            <img class="d-block w-100" src="{{ url($value->photo) }}" alt="First slide">
                        </div>
                            @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-w">
        <div class="fade3"></div>
        <div class="os-container">

            <div class="deep-footer">
                Use of this site constitutes acceptance of our <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>. &copy; 2017 Pinsupreme.com All rights reserved.
            </div>
        </div>
    </div>
    <!--------------------
    END - Footer
    -------------------->
</div>
<div class="display-type"></div>
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Upload Location Map
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true"> &times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('campaign-leads/'.strtr(base64_encode($id), '+/=', '._-')) }}" id="formValidate" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input class="form-control" required="required" type="text" name="name">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input class="form-control" required="required" type="text" name="address">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input class="form-control" required="required" type="email" name="email">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input class="form-control" required="required" type="date" name="date_of_birth">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input class="form-control" required="required" type="number" name="phone">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                <button class="btn btn-primary" type="submit"> Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw"></script>
<script>
    // In the following example, markers appear when the user clicks on the map.
    // Each marker is labeled with a single alphabetical character.
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var labelIndex = 0;

    function initialize() {
        var bangalore = { lat: <?php echo $properties->latitude ?>, lng: <?php echo $properties->longitude ?> };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: bangalore
        });

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
            addMarker(event.latLng, map);
        });

        // Add a marker at the center of the map.
        addMarker(bangalore, map);
    }

    // Adds a marker to the map.
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
            position: location,
            label: labels[labelIndex++ % labels.length],
            map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
@include('admin.include.footer')
</html>
