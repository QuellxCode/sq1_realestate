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
                            <form  action="{{ url('projects/'.$projects->id) }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input name="_method" type="hidden" value="PUT">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Compaign Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $projects->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Properties</label>
                                            <select class="form-control select2" multiple="true" name="properties[]">
                                                @if($project_properties)
                                                    @foreach($properties as $property)
                                                        @foreach($project_properties as $value)
                                                            <option value="{{ $property->id }}"
                                                            @if($value->properties_id == $property->id  )
                                                                {{ 'selected' }}
                                                                    @endif
                                                            >
                                                                {{ $property->name }}
                                                            </option>
                                                        @endforeach

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
                                            {{--<input class="form-control" required="required" type="text" name="city" value="{{ $projects->city }}">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">State</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="state" value="{{ $projects->state }}">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input class="form-control" id="searchTextField"   required="required" type="text" name="address" value="{{ $projects->address }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                            <div id="map_canvas"></div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Photo</label>
                                            <input class="form-control"  type="file" name="photo">
                                        </div>
                                    </div>
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Nearest Location</label>--}}
                                            {{--<input class="form-control" required="required" type="text"--}}
                                                   {{--name="nearest_location" value="{{ $projects->nearest_location }}">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">How to reach</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="reach" value="{{ $projects->reach }}">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Why purchase</label>--}}
                                            {{--<input class="form-control" required="required" type="text" name="purchase" value="{{ $projects->purchase }}">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Description</label>--}}
                                            {{--<textarea class="form-control" required="required"--}}
                                                      {{--name="description" >{{ $projects->name }}</textarea>--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Add Photo</label>--}}
                                            {{--<input class="form-control"  type="file" name="photo">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Layout Plan</label>
                                            <input class="form-control"  type="file" name="plan">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Location Map</label>
                                            <input class="form-control" type="file" name="map">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <script>
                                        $(function() {
                                            $('.single-daterange').daterangepicker({
                                                format: "mm-dd-yyyy",

                                            });
                                        });
                                    </script>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">To</label>
                                            <input class="single-daterange form-control" name="to_date"  type="text" value="{{ $projects->to_date }}">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">From</label>
                                            <input class="single-daterange form-control" name="from_date"  type="text" value="{{ $projects->from_date }}">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Update</button>
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