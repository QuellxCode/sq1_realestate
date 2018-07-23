@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Agent                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('users') }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {{--<div class="form-group">--}}
                                            {{--<label for="">Agent Roles</label>--}}
                                            {{--<input class="form-control" required="required" type="text"--}}
                                                   {{--name="role">--}}
                                            {{--<div class="help-block form-text with-errors form-control-feedback"></div>--}}
                                        {{--</div>--}}
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="first_name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Brokerage</label>
                                            <select class="form-control"  name="brokerage[]" >
                                                @foreach($brokerage as $value)
                                                    <option value="{{ $value->id }}">
                                                        {{ $value->name }}
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
                                            <label for="">Last Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="last_name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input class="form-control" required="required" type="number"
                                                   name="phone">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input class="form-control" required="required" type="email"
                                                   name="email">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input class="form-control" required="required" type="password"
                                                   name="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>


                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <a href="{{ url('team') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop