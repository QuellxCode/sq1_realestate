@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Tax                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('tax-create') }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Tax Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tax Percentage</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="percent">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <a href="{{ url('currrency') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop