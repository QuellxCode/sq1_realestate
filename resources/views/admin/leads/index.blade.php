@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Leads
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="#" class="mr-2 mb-2 btn btn-success" > Add Leads</a>
                    </h5>

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Name</th><th>Email</th><th>address</th><th>Action</th></tr></thead>


                            <tbody>
                            @foreach($leads as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->address }}</td>
                                    <td>Actions</td>
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