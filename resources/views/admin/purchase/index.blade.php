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
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Project Name</th><th>Project</th><th>Mobile</th><th>Property Name</th><th>Area</th><th>Amount</th><th>Action</th></tr></thead>


                            <tbody>
                            @foreach($purchase as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->projects->where('id',$value->project_id)->first()->name }}</td>
                                    <td>{{ $value->mobile }}</td>
                                    <td>{{ $value->property_name }}</td>
                                    <td>{{ $value->area .' '.$value->units->where('id',$value->unit_id)->first()->name }}</td>
                                    <td>{{ $value->amount }}</td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('purchase-payments/'.$value->id) }}"> Make payment</a>
                                                <a class="dropdown-item" href="{{ url('list-purchase-payments/'.$value->id) }}"> Show Payment</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ url('purchase/'.$value->id) }}"> View</a>
                                                <a class="dropdown-item" href="{{ url('purchase-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('purchase/'.$value->id.'/edit') }}"> Update</a>
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