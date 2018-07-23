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
                            <form action="{{ url('properties') }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for=""> Properties</label>
                                            <select class="form-control select property-type" name="type">
                                                <option value="">
                                                    Select Type
                                                </option>
                                                <option value="detached">
                                                    Detached
                                                </option>
                                                <option value="semi-detached">
                                                    Semi-Detached
                                                </option>
                                                <option value="condo">
                                                    New Condo Building
                                                </option>
                                                <option value="apartment">
                                                    Condo/Apartment
                                                </option>
                                            </select>
                                        </div>

                                        <div class="element-box property-groups">
                                            <h5 class="form-header">
                                                <span> <a  class="btn btn-primary" id="plus"> Add New Group</a></span>
                                            </h5>
                                            <div id="formInputfields">
                                            </div>
                                        </div>
                                        <div class="element-box property-detached">
                                            <h5 class="form-header">
                                                <span>Property Detached Info</span>
                                            </h5>
                                            <div id="subformChild" class="form-inline" style="margin-top:40px; ">

                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bathroom" name="bath_room" type="number">

                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bedroom" name="bed_room" type="number">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Garage" name="garage" type="number">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Area (SQft)" name="area" type="number">
                                            </div>
                                        </div>
                                        <div class="element-box property-semi-detached">
                                            <h5 class="form-header">
                                                <span>Property Semi Detached Info</span>
                                            </h5>
                                            <div id="subformChild" class="form-inline" style="margin-top:40px; ">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bathroom" name="semi_bath_room" type="number">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Bedroom" name="semi_bed_room" type="number">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="No. Of Garage" name="semi_garage" type="number">
                                                <input id="input1" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Area (Quft)" name="semi_area" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input class="form-control" required="required" type="number"
                                                   name="price">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Location</label>
                                            <input class="form-control" id="searchTextField" required="required" type="text"
                                                   name="location">
                                        </div>
                                    </div>
                                    <div id="map_canvas"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="form-control" required="required"
                                                      name="remarks"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id="latitude" type="hidden"
                                                   name="latitude" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden"  id="longitude"
                                                   name="longitude" >
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
                                                <option value="Sale">
                                                    Sale
                                                </option>
                                                <option value="Rent">
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
                                                    <option value="{{ $value->id }}">
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
                                            <label for="">Add Photo</label>
                                            <input class="form-control" required="required" type="file" name="feature_photo">
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
                                    <button class="btn btn-primary" type="submit">Submit</button>
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
                         }else {
                             $('.property-semi-detached').hide();
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
             <label class="sr-only"> Features </label>
             <textarea id="input4` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Feature"  name="features[group`+counterParent+`][`+i+`]"></textarea>

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
  <label class="sr-only"> Feature Image </label>
  <textarea id="input4` + counterParent + `" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Feature" name="features[group`+group_val+`][`+i+`]"></textarea>

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


            <script type="text/javascript" src="{{ url('customs/google-location.js') }}">

            </script>
@stop