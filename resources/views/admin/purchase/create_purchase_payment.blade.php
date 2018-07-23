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
                            <form action="{{ url('purchase-payments/'.Request::segment(2)) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Amount</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="amount">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Payment Type</label>
                                            <select class="form-control" required="required" name="paymenttype_id">
                                                <option value="">
                                                    Select Payment Type
                                                </option>
                                                @foreach($payment_type as $value)
                                                    <option value="{{ $value->id }}">
                                                        {{ $value->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Payment Date</label>
                                            <div class="date-input">
                                                <input class="single-daterange form-control"  required="required" name="date" placeholder="Payment Date" type="text" >
                                                <div class="help-block form-text with-errors form-control-feedback"></div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Transaction Reference</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="remarks">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <a href="{{ url('purchase') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop