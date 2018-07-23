@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Create Purchase
                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('purchase/'.$purchase->id) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <input name="_method" type="hidden" value="PUT">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Projects</label>
                                            <select class="form-control" required="required" name="project_id">
                                                <option value="">
                                                    Select Project
                                                </option>
                                                @foreach($projects as $value)
                                                    <option value="{{ $value->id }}"
                                                    @if($value->id == $purchase->project_id)
                                                        {{ 'selected' }}
                                                            @endif
                                                    >
                                                        {{ $value->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Seller Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $purchase->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Seller Address</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="address" value="{{ $purchase->address }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Seller Mobile</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="mobile" value="{{ $purchase->mobile }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="property_name" value="{{ $purchase->property_name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Property Area</label>
                                                    <input class="form-control" required="required" type="text"
                                                           name="area" value="{{ $purchase->area }}">
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

                                                            <option value="{{ $value->id }}"
                                                            @if($value->id == $purchase->unit_id)
                                                                {{ 'selected' }}
                                                                    @endif
                                                            >
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
                                            <label for="">Property Amount</label>
                                            <input class="form-control" required="required" type="text"
                                                    name="amount" value="{{ $purchase->amount }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Property Description</label>
                                            <textarea class="form-control" required="required"
                                                      name="description">{{ $purchase->description }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Remarks</label>
                                            <textarea class="form-control" required="required"
                                                      name="remarks">{{ $purchase->remarks }}</textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <a href="{{ url('purchase') }}" class="btn btn-danger">Close</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop