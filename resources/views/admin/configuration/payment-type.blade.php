@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Payment Type
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('payment-type-create') }}" class="mr-2 mb-2 btn btn-success" > Add Payment Type</a>
                    </h5>

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Name</th><th>Action</th></tr></thead>


                            <tbody>
                            @foreach($payment_type as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">


                                                <a class="dropdown-item" href="{{ url('payment-type-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('payment-type-update/'.$value->id) }}"> Update</a>
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