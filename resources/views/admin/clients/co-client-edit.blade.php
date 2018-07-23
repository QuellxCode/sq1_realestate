@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Applicant
                        </h6>
                        @include('shared.errors')
                        <div class="element-box">
                            <form  action="{{ url('applicant-update/'.$client_applicant->id) }}" id="formValidate" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name of the Applicant</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $client_applicant->users->first_name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Father's/Husband Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="father_name" value="{{ $client_applicant->father_name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <textarea class="form-control" required="required"
                                                      name="address">{{ $client_applicant->address }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">District</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="district" value="{{ $client_applicant->district }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">State</label>
                                            <input class="form-control" required="required" type="text" name="state" value="{{ $client_applicant->state }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input class="form-control" required="required" type="text" name="state" value="{{ $client_applicant->state }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pincode</label>
                                            <input class="form-control" required="required" type="text" name="pincode" value="{{ $client_applicant->pincode }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Nationality</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="nationality" value="{{ $client_applicant->nationality }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pan</label>
                                            <input class="form-control" required="required" type="text" name="pan" value="{{ $client_applicant->pan }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input class="single-daterange form-control" name="dob"  type="dob" value="{{ $client_applicant->dob }}">

                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input class="form-control" required="required" type="text" name="phone" value="{{ $client_applicant->phone }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Occupation with detail</label>
                                            <input class="form-control" required="required" type="text" name="occupation" value="{{ $client_applicant->occupation }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" required="required" type="email" name="email" value="{{ $client_applicant->users->email}}" readonly>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Address Proof</label>
                                            <input class="form-control"  type="file" name="address_proof">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <input class="form-control" type="file" name="photo">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Identity Proof</label>
                                            <input class="form-control" type="file" name="id_proof">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Applicable For</label>
                                            <input class="form-control" required="required" type="radio"
                                                   name="applicable" value="yes">Yes
                                            <input class="form-control" required="required" type="radio"
                                                   name="applicable" valur="no">No
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="{{ url('client') }}" class="btn btn-danger" >Close</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $('.single-daterange').daterangepicker({
                        format: "mm-dd-yyyy",

                    });
                });
            </script>
@stop