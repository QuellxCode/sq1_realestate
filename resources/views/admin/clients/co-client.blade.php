@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Applicant
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('applicant-create/'.$id) }}" class="mr-2 mb-2 btn btn-success" > Add Applicant</a>
                    </h5>

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Name</th><th>Father Name</th><th>Email</th><th>Phone</th><th>District</th><th>Action</th></tr></thead>
                            <tbody>
                            @foreach($client_applicant as $value)
                                <tr>
                                    <td>{{ $value->users->first_name }}</td>
                                    <td>{{ $value->father_name }}</td>
                                    <td>{{ $value->users->email }}</td>
                                    <td>{{ $value->phone }}</td>
                                    <td>{{ $value->district }}</td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('applicant-view/'.$value->id) }}"> View</a>
                                                <a class="dropdown-item" href="{{ url('applicant-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('applicant-update/'.$value->id) }}"> Update</a>
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