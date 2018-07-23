@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Create Properties
                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('properties/'.$properties->id) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <input name="_method" type="hidden" value="PUT">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $properties->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="price" value="{{ $properties->price }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for=""> Properties</label>
                                            <select class="form-control select property-type" name="type">
                                                <option>
                                                    Select Type
                                                </option>
                                                <option value="detached"
                                                @if($properties->type == 'detached')
                                                selected="true"
                                                    @endif
                                                >
                                                    Detached
                                                </option>
                                                <option value="semi-detached"
                                                        @if($properties->type == 'semi-detached')
                                                        selected="true"
                                                        @endif >
                                                    Semi-Detached
                                                </option>
                                                <option value="condo"
                                                        @if($properties->type == 'condo')
                                                        selected="true"
                                                        @endif >
                                                    New Condo Building
                                                </option>
                                                <option value="apartment">
                                                    Condo/Apartment
                                                </option>
                                            </select>
                                        </div>
                                        {{--<div class="element-box property-groups">--}}
                                            {{--<h5 class="form-header">--}}
                                                {{--<span> <a  class="btn btn-primary" id="plus"> Add New Group</a></span>--}}
                                            {{--</h5>--}}
                                            {{--<div id="formInputfields">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                       @if($properties->type == 'detached')
                                        <div class="element-box property-detached">
                                            <h5 class="form-header">
                                                <span>Property Info</span>
                                            </h5>
                                            <div id="subformChild" class="form-inline" style="margin-top:40px; ">

                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bathroom" name="bath_room" type="text" value="{{$properties->detached->bath_room}}">

                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bedroom" name="bed_room" type="text" value="{{$properties->detached->bed_room}}">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Garage" name="garage" type="text" value="{{$properties->detached->garage}}">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Area (Quft)" name="area" type="text" value="{{$properties->detached->area}}">

                                            </div>

                                        </div>
                                           @endif
                                        @if($properties->type == 'semi-detached')
                                            <div class="element-box semi-detached">
                                                <h5 class="form-header">
                                                    <span>Property Info</span>
                                                </h5>
                                                <div id="subformChild" class="form-inline" style="margin-top:40px; ">

                                                    <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bathroom" name="semi_bath_room" type="text" value="{{$properties->semiDetached->bath_room}}">

                                                    <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bedroom" name="semi_bed_room" type="text" value="{{$properties->semiDetached->bed_room}}">
                                                    <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Garage" name="semi_garage" type="text" value="{{$properties->semiDetached->garage}}">
                                                    <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Area (Quft)" name="semi_area" type="text" value="{{$properties->semiDetached->area}}">

                                                </div>

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Location</label>
                                            <input class="form-control" id="searchTextField"  type="text"
                                                   name="location" value="{{ $properties->location }}">
                                        </div>
                                        <div id="map_canvas"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="form-control" required="required"
                                                      name="remarks">{{ $properties->remarks }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Latitude</label>
                                            <input class="form-control" id="latitude"  type="number"
                                                   name="latitude" value="{{ $properties->latitude }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Longitude</label>
                                            <input class="form-control"  type="number" id="longitude"
                                                   name="longitude" value="{{ $properties->longitude }}" disabled>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control select" name="availiable">
                                                <option value="">
                                                    Select Status
                                                </option>
                                                <option value="Sale" @if($properties->availiable == 'Sale')
                                                    {{ 'selected' }}
                                                    @endif
                                                    >
                                                    Sale
                                                </option>
                                                <option value="Rent" " @if($properties->availiable == 'Rent')
                                                    {{ 'selected' }}
                                                @endif>
                                                    Rent
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Agents</label>
                                            <select class="form-control select2"  name="agents[]" multiple="true">
                                                @foreach($agent as $value)
                                                    <option value="{{ $value->id }}"
                                                    @foreach($property_agent as $agents)
                                                        @if($agents->user_id == $value->id)
                                                    selected="true"
                                                            @endif
                                                        @endforeach
                                                    >
                                                        {{ $value->first_name }}
                                                    </option>
                                                    {{--<option selected="true">--}}
                                                    {{--California--}}
                                                    {{--</option>--}}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Feature Photo</label>
                                            <input class="form-control" type="file" name="feature_photo">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Video</label>
                                            <input class="form-control" type="file" name="video">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="{{ url('properties') }}" class="btn btn-danger">Close</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('.property-groups').hide();
                    $('.property-detached').hide();
                    $('.property-semi-detached').hide();
                    $('.property-type').on('change', function() {
                        var value = $(this).find(":checked").val();
                        if(value == 'condo'){
                            $('.property-detached').hide();
                            $('.property-semi-detached').hide();
                            $('.property-groups').show();
                        }else if(value == 'detached'){
                            $('.property-groups').hide();
                            $('.property-semi-detached').hide();
                            $('.property-detached').show();
                        }else if(value == 'semi-detached'){
                            $('.property-semi-detached').show();
                            $('.property-groups').hide();
                            $('.property-detached').hide();
                        }
                    });
                    counterParent = 1;
                    var group_val = 1;
                    $(document).on('click', '#plus', function () {
                        // body...
                        i = 0;
                        $('#formInputfields').append(`<div class="formInputfieldschildren" id="formInputfieldschild` + counterParent + `">
      <h5 class="form-header" style="margin-top:20px;">
      Group Name <span> <a  class="btn btn-primary" id="plus"> Plus</a></span>
    </h5> <div class=" deleteIcon top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-cancel-circle"></i>
            </div>
    <div class="form-group">

          <label class=""> Title </label><input id="Groupname` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" required="required" name="groups[group`+counterParent+`]" placeholder="Title" type="text" >

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
        <a  class="btn btn-primary childButtons" style="position:absolute; right: 60px; margin-top:-12px;" id="plus` + counterParent + `"> Plus</a>
        <div id="subform` + counterParent + `">
          <div id="subformChild0" class="form-inline" style="margin-top:40px; ">

            <label class="sr-only"> Model </label><input id="input1` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Model" name="model[group`+counterParent+`][`+i+`]" type="text">
            <label class="sr-only"> SQFT </label><input id="input2` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="SQFT" name="sqft[group`+counterParent+`][`+i+`]" type="text">
            <label class="sr-only"> Floors </label><input id="input3` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Floors" name="floors[group`+counterParent+`][`+i+`]" type="text">
            <label class="sr-only"> Price From </label><input id="input4` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" name="price_from[group`+counterParent+`][`+i+`]" placeholder="Price From " type="text">
             <label class="sr-only"> Features </label><input id="input4` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Feature"  name="features[group`+counterParent+`][`+i+`]"  type="text">

            <div class=" deleteIcon top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-cancel-circle"></i>
            </div>
         </div>
       </div>
       </div>`);

                        group_val = counterParent;
                        counterParent++;

                    });
                    var counterChild = 1;
                    $(document).on('click', ".childButtons", function () {
                        i++;
                        $(this).next().append(` <div class="form-inline" id="subformChild` + counterChild + `" style="margin-top:40px; ">
            <label class="sr-only"> Model </label><input id="input1` + counterChild + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Model" name="model[group`+group_val+`][`+i+`]" type="text">
            <label class="sr-only"> SQFT </label><input id="input2` + counterChild + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="SQFT" name="sqft[group`+group_val+`][`+i+`]" type="text">
            <label class="sr-only"> Floors </label><input id="input3` + counterChild + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Floors" name="floors[group`+group_val+`][`+i+`]" type="text">
            <label class="sr-only"> Price From </label><input id="input4` + counterChild + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Price From" name="price_from[group`+group_val+`][`+i+`]" type="text">
  <label class="sr-only"> Feature Image </label><input id="input4` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Feature" name="features[group`+group_val+`][`+i+`]" type="text">

            <div class=" deleteIcon top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
              <i class="os-icon os-icon-cancel-circle"></i>
            </div>
         </div> `);
                        counterChild++;

                    });
                });
                $(document).on('click', ".deleteIcon", function () {
                    $(this).parent().remove();
                });


            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw&libraries=places" type="text/javascript"></script>


            <script type="text/javascript">
                function initialize() {
                    var mapOptions = {
                        center: new google.maps.LatLng(-33.8688, 151.2195),
                        zoom: 13,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById('map_canvas'),
                        mapOptions);

                    var input = document.getElementById('searchTextField');
                    var autocomplete = new google.maps.places.Autocomplete(input);
                    autocomplete.bindTo('bounds', map);
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(autocomplete, 'place_changed', function () {
                        infowindow.close();
                        var place = autocomplete.getPlace();
                        if (place.geometry.viewport) {
                            map.fitBounds(place.geometry.viewport);
                        } else {
                            map.setCenter(place.geometry.location);
                            map.setZoom(17); // Why 17? Because it looks good.
                        }
                        var address = '';
                        if (place.address_components) {
                            address = [(place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')].join(' ');
                        }
                        updateTextFields(place.geometry.location.lat(),place.geometry.location.lng());
                    });
                }
                $('#latitude').val("");
                $('#longitude').val("");
                google.maps.event.addDomListener(window, 'load', initialize);
                function updateTextFields(lat, lng) {
                    $('#latitude').val(lat);
                    $('#longitude').val(lng);
                }
            </script>
@stop