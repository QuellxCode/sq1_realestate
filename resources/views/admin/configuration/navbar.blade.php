@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            NavBar                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('update-navbar/'.$navbar->id) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $navbar->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="{{ url('navbar') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop