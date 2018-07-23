
@extends('admin.layout.app')
@section('content')
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
                            <form  action="{{ url('condo-review/'.$condo_review->id) }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input name="_method" type="hidden" value="PUT">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $condo_review->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea class="form-control" id="searchTextField" required="required"
                                                      name="address" >{{ $condo_review->address }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                            <div id="map_canvas"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="">No. of floors</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="no_of_floors" value="{{ $condo_review->no_of_floors }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Maintenance fees</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="maintenance_fees" value="{{ $condo_review->maintenance_fees }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">No. of units</label>
                                            <input class="form-control" required="required" type="text" name="no_of_units" value="{{ $condo_review->no_of_units }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property manager contact</label>
                                            <input class="form-control" required="required" type="text" name="property_manage_contact" value="{{ $condo_review->property_manage_contact }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Security contact</label>
                                            <input class="form-control" required="required" type="text" name="security_contact" value="{{ $condo_review->security_contact }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Leasing contact</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="leasing_contact" value="{{ $condo_review->leasing_contact }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Buying contact</label>
                                            <input class="form-control" required="required" type="text" name="buying_contact" value="{{ $condo_review->buying_contact }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Building Amenities</label>
                                            <input class="form-control" name="building_amenities"  type="text" value="{{ $condo_review->building_amenities }}">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pets</label>
                                            <input class="form-control" required="required" type="text" name="pets" value="{{ $condo_review->pets }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Corporation No</label>
                                            <input class="form-control" required="required" type="text" name="corporation_no" value="{{ $condo_review->corporation_no }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Latitude</label>
                                            <input class="form-control" required="required" type="text" name="latitude" value="{{ $condo_review->latitude }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Longitude</label>
                                            <input class="form-control" required="required" type="text" name="longitude" value="{{ $condo_review->longitude }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Descrition</label>
                                            <textarea class="form-control" required="required"
                                                      name="description"> {{ $condo_review->description }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">update</button>
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