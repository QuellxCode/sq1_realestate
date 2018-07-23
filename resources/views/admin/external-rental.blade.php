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
      --------------------><div class="rentals-list-w">
        <!--------------------
        START - Property Index Filters
        -------------------->
        <div class="filter-side">
            <div class="filters-header">
                <h4>
                    Filter
                </h4>
                <div class="reset-filters">
                    <i class="os-icon-close os-icon"></i><span>Reset Filters</span>
                </div>
            </div>
            <div class="filter-w">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Listing Type
                </h6>
                <div class="filter-body">
                    <div class="toggled-buttons">
                        <a class="btn btn-toggled on" href="#">Show All</a><a class="btn btn-toggled off" href="#">For Rent</a><a class="btn btn-toggled off" href="#">For Sale</a>
                    </div>
                </div>
            </div>
            <div class="filter-w">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Price Range
                </h6>
                <div class="filter-body">
                    <input class="ion-range-slider" type="text">
                </div>
            </div>
            <div class="filter-w">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Number of Bedrooms
                </h6>
                <div class="filter-body">
                    <div class="toggled-buttons solid">
                        <a class="btn btn-toggled off" href="#">1+</a><a class="btn btn-toggled off" href="#">2+</a><a class="btn btn-toggled off" href="#">3+</a><a class="btn btn-toggled on" href="#">4+</a><a class="btn btn-toggled off" href="#">5+</a>
                    </div>
                </div>
            </div>
            <div class="filter-w">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Features
                </h6>
                <div class="filter-body">
                    <select class="select2" multiple="true" name="">
                        <option>
                            Solar Power
                        </option>
                        <option>
                            Open Space
                        </option>
                        <option selected="true">
                            Backyard
                        </option>
                        <option>
                            Washer
                        </option>
                        <option selected="true">
                            Garage
                        </option>
                    </select>
                </div>
            </div>
            <div class="filter-w collapsed">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Posted by Agent
                </h6>
                <div class="filter-body">
                    <input class="ion-range-slider" type="text">
                </div>
            </div>
            <div class="filter-w collapsed">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Time on Market
                </h6>
                <div class="filter-body">
                    <input class="ion-range-slider" type="text">
                </div>
            </div>
            <div class="filter-w no-padding">
                <div class="filter-toggle">
                    <i class="os-icon-minus os-icon"></i>
                </div>
                <h6 class="filter-header">
                    Listings on Map
                </h6>
                <div class="filter-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26466.220546263787!2d-118.35266418131052!3d33.98540355993257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b79824efa317%3A0x29dd07e1734487f2!2sPark+Mesa+Heights%2C+Los+Angeles%2C+CA!5e0!3m2!1sen!2sus!4v1502593931845" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="rentals-list">
            <div class="list-controls">
                <div class="list-info">
                    1,240 Properties found in Brooklyn, NY
                </div>
                <div class="list-order">
                    <label for="">Order By:</label><select>
                        <option>
                            Relevance
                        </option>
                        <option>
                            Date
                        </option>
                        <option>
                            Price
                        </option>
                    </select>
                </div>
            </div>
            <div class="property-items as-grid">
                @foreach($properties as $group)
                    @foreach($group->groupFields  as $value)

                <div class="property-item">
                    <a class="item-media-w" href="#">
                        @if(count($value) > 0)
                        <div class="item-media"
                             @if($value->feature_image)
                             style="background-image: url('{{ url($value->feature_image)}}')"
                                @endif
                    >
                        </div>
                            @endif
                    </a>
                    <div class="item-info">
                        <div class="item-features">
                            <div class="feature">
                                floor
                            </div>
                            <div class="feature">
                                {{ $value->floors }}
                            </div>
                        </div>
                        <h3 class="item-title">
                            <a href="{{ url('condo-properties/detail/'.strtr(base64_encode($value->id), '+/=', '._-')) }}">{{ $group->name }}</a>
                            {{--<a href="{{ url('campaign-properties/detail/') }}">{{ $value->name }}</a>--}}
                        </h3>
                        <div class="item-price-buttons">
                            <div class="item-price">
                                <strong>${{$value->price_from}}</strong>
                            </div>
                            <div class="item-buttons">
                                <a class="btn btn-outline-primary" href="{{ url('condo-properties/detail/'.strtr(base64_encode($group->id), '+/=', '._-')) }}"><span>Details</span><i class="os-icon os-icon-arrow-2-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                    @endforeach

            </div>
            <div class="pagination-w">
                <div class="pagination-info">
                    Showing 20-40 Properties found in Brooklyn, NY
                </div>
                <div class="pagination-links">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#"> Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#"> 1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> 3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"> Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--------------------
      END - Rentals Content
      --------------------><!--------------------
      START - Footer
      -------------------->

    <div class="footer-w">
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
</body>
@include('admin.include.footer')
</html>
