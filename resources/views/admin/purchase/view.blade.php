@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Purchase
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('purchase') }}" class="mr-2 mb-2 btn btn-success" > Back</a>
                    </h5>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td><strong><small class="text-danger">Project Name</small></strong></td>
                                        <td colspan="3">{{ $purchase->projects->where('id',$purchase->project_id)->first()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Seller Name</small></strong></td>
                                        <td>{{ $purchase->name }}</td>
                                        <td><strong><small class="text-danger">Seller Mobile</small></strong></td>
                                        <td>{{ $purchase->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Seller Address</small></strong></td>
                                        <td>{{ $purchase->address }}</td>
                                        <td><strong><small class="text-danger">Property Name </small></strong></td>
                                        <td>{{ $purchase->property_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Property Area</small></strong></td>
                                        <td>{{ $purchase->area.'  '.$purchase->units->where('id',$purchase->unit_id)->first()->name }}</td>
                                        <td><strong><small class="text-danger">Property Amount </small></strong></td>
                                        <td>{{ $purchase->amount }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Property Description:</small></strong></td>
                                        <td colspan="3">{{ $purchase->description }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Remarks</small></strong></td>
                                        <td colspan="3">{{ $purchase->remarks }}</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop