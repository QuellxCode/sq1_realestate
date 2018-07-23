@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Projects
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('purchase/create') }}" class="mr-2 mb-2 btn btn-success" > Add Purchase</a>
                    </h5>

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Payment</th><th>Payment Date</th><th>Payment Type</th><th>Transaction Reference </th><th>Action</th></tr></thead>


                            <tbody>
                            @foreach($purchase_payments as $value)
                                <tr>
                                    <td>{{ $value->amount }}</td>
                                    <td>{{ $value->date }}</td>
                                    <td>{{ $value->paymenttype_id }}</td>
                                    <td>{{ $value->remarks }}</td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">

                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ url('purchase-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('edit-purchase-payments/'.$value->id) }}"> Update</a>
                                            </div>
                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop