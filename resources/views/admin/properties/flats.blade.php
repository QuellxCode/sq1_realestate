@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Create Flats/Plots
                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('properties') }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <input class="form-control" required="required" type="radio"
                                                   name="type" value="flat">Flat
                                            <input class="form-control" required="required" type="radio"
                                                   name="type" value="plot">Plot
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Flat/Plot Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Amount</label>
                                            <textarea class="form-control" required="required"
                                                      name="price"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Property Area</label>
                                                    <input class="form-control" required="required" type="text"
                                                           name="area">
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Unit</label>
                                                    <select class="form-control" required="required" name="unit_id">
                                                        <option value="">
                                                            Select Units
                                                        </option>
                                                        @foreach($units as $value)
                                                            <option value="{{ $value->id }}">
                                                                {{ $value->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Comment/Remarks</label>
                                            <textarea class="form-control" required="required"
                                                      name="remarks"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Photo</label>
                                            <input class="form-control" required="required" type="file" name="photo">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Add Document</label>
                                            <input class="form-control" required="required" type="file" name="photo">
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
@stop