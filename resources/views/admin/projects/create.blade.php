@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Campaign
                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form  action="{{ url('projects') }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Compaign Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Properties</label>
                                            <select class="form-control"  required="required" name="properties[]">
                                                @if($properties)
                                                    @foreach($properties as $value)
                                                        <option value="{{ $value->id }}">
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Category</label>--}}
                                            {{--<select class="form-control" required="required" name="category_id">--}}
                                                {{--<option value="">--}}
                                                    {{--New York--}}
                                                {{--</option>--}}
                                                {{--<option value="1">--}}
                                                    {{--California--}}
                                                {{--</option>--}}
                                                {{--<option value="2">--}}
                                                    {{--Boston--}}
                                                {{--</option>--}}
                                                {{--<option value="3">--}}
                                                    {{--Texas--}}
                                                {{--</option>--}}
                                                {{--<option value="4">--}}
                                                    {{--Colorado--}}
                                                {{--</option>--}}
                                            {{--</select>--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">City</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="city">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">State</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="state">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input class="form-control"  id="searchTextField"  required="required" type="text" name="address">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div id="map_canvas"></div>
                                    </div>
                                    <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="">Add Photo</label>
                                        <input class="form-control" required="required" type="file" name="photo">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    </div>
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Nearest Location</label>--}}
                                            {{--<input class="form-control" required="required" type="text"--}}
                                                   {{--name="nearest_location">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">How to reach</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="reach">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Why purchase</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="purchase">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row">
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Description</label>--}}
                                            {{--<textarea class="form-control" required="required"--}}
                                                      {{--name="description"></textarea>--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-sm-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Layout Plan</label>
                                            <input class="form-control" required="required" type="file" name="plan">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Location Map</label>
                                            <input class="form-control" required="required" type="file" name="map">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">To</label>
                                            <input class="single-daterange form-control" name="to_date"  type="text" >

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">From</label>
                                            <input class="single-daterange form-control" name="from_date"  type="text">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="{{ url('projects') }}" class="btn btn-danger" >Close</a>
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