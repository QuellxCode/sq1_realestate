@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Create Project
                        </h6>
                        @include('shared.errors')
                        <div class="element-box">
                            <form  action="{{ url('general') }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Site Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $configuration->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Organization Name</label>
                                            <input class="form-control" required="required" type="text" name="organization_name" value="{{ $configuration->organization_name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea class="form-control" id="searchTextField" required="required"
                                                      name="address">{{ $configuration->address }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                            <div id="map_canvas"></div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Account Details</label>
                                            <textarea class="form-control" required="required"
                                                      name="account_details">{{ $configuration->account_details }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Domain Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="domain_name" value="{{ $configuration->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Organization Email</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="email" value="{{ $configuration->email }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Meta Title</label>
                                            <textarea class="form-control" required="required"
                                                      name="meta_title">{{ $configuration->meta_title }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <textarea class="form-control" required="required"
                                                      name="meta_desc">{{ $configuration->meta_desc }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Time Zone</label>
                                            <select class="form-control" required="required" name="timezone">
                                                <option value="">
                                                    New York
                                                </option>
                                                <option value="1">
                                                    California
                                                </option>
                                                <option value="2">
                                                    Boston
                                                </option>
                                                <option value="3">
                                                    Texas
                                                </option>
                                                <option value="4">
                                                    Colorado
                                                </option>
                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Currency</label>
                                            <select class="form-control" required="required" name="currency">
                                                <option value="">
                                                    New York
                                                </option>
                                                <option value="1">
                                                    California
                                                </option>
                                                <option value="2">
                                                    Boston
                                                </option>
                                                <option value="3">
                                                    Texas
                                                </option>
                                                <option value="4">
                                                    Colorado
                                                </option>
                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Language</label>
                                            <select class="form-control" required="required" name="language">
                                                <option value="">
                                                    New York
                                                </option>
                                                <option value="1">
                                                    California
                                                </option>
                                                <option value="2">
                                                    Boston
                                                </option>
                                                <option value="3">
                                                    Texas
                                                </option>
                                                <option value="4">
                                                    Colorado
                                                </option>
                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Text Direction</label>
                                            <input class="form-control" required="required" type="radio"
                                                   name="dir_type" value="1"
                                            @if($configuration->dir_type == 1)
                                                   checked="{{ 'selected' }}"
                                                @endif
                                            >Commercial
                                            <input class="form-control" required="required" type="radio"
                                                   name="dir_type" value="2"
                                            @if($configuration->dir_type == 2)
                                                   checked="{{ 'selected' }}"
                                                    @endif
                                            >Residential
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Date Format</label>
                                            <textarea class="form-control" required="required"
                                                      name="date_format">{{ $configuration->date_format }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">

                                        </div>
                                        Date, Month, Year, Hour, Min, Sec, Meridian, Date Seprator, Time Seprator

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Short Name</label>
                                            <textarea class="form-control" required="required"
                                                      name="short_name">{{ $configuration->short_name }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Contact Nos.</label>
                                            <textarea class="form-control" required="required"
                                                      name="contact">{{ $configuration->contact }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Due Days</label>
                                            <textarea class="form-control" required="required"
                                                      name="due_days">{{ $configuration->due_days }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Late Fees(% annually)</label>
                                            <textarea class="form-control" required="required"
                                                      name="late_fees">{{ $configuration->late_fees }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">About Website</label>
                                            <textarea class="form-control" required="required"
                                                      name="about_website">{{ $configuration->about_website }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                          <input type="checkbox" name="email_notification" value="Bike" >  Email Notification

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>


                                </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <input type="checkbox" name="sms_notification" value="Bike">  SMS Notification
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>


                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <input type="checkbox" name="translate" value="Bike">   Translation

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
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