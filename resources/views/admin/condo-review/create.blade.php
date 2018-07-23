@extends('admin.layout.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <style>
        .bootstrap-tagsinput {
            background-color: #dgdfgf;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(121, 111, 222, 0.075);
            display: block;
            padding: 4px 6px;
            color: #964545;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: 22px;
            cursor: text;
        }
        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            padding: 0 6px;
            margin: 0;
            width: auto;
            max-width: inherit;
        }
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #964545;
        }
        </style>
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Condo Reviews
                        </h6>
                        @include('shared.errors')
                        <div class="element-box">
                            <form  action="{{ url('condo-review') }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea class="form-control" id="searchTextField" required="required"
                                                      name="address"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                            <div id="map_canvas"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="">No. of floors</label>

                                        <input type="text" value="" data-role="tagsinput" id="tags" class="form-control">

                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Maintenance fees</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="maintenance_fees">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">No. of units</label>
                                            <input class="form-control" required="required" type="text" name="no_of_units">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property manager contact</label>
                                            <input class="form-control" required="required" type="text" name="property_manage_contact">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Security contact</label>
                                            <input class="form-control" required="required" type="text" name="security_contact">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Leasing contact</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="leasing_contact">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Buying contact</label>
                                            <input class="form-control" required="required" type="text" name="buying_contact">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Building Amenities</label>
                                            <input class="form-control" name="building_amenities"  type="text">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pets</label>
                                            <input class="form-control" required="required" type="text" name="pets">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Corporation No</label>
                                            <input class="form-control" required="required" type="text" name="corporation_no">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Latitude</label>
                                            <input class="form-control" required="required" type="text" name="latitude">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Longitude</label>
                                                <input class="form-control" required="required" type="text" name="longitude">
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Descrition</label>
                                            <textarea class="form-control" required="required"
                                                      name="description"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="{{ url('condo-review') }}" class="btn btn-danger" >Close</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9vUeZmp6qVCibPasj4uGXQIY9Sh0PGfw&libraries=places" type="text/javascript"></script>


            <script type="text/javascript" src="{{ url('customs/google-location.js') }}">

            </script>
@stop