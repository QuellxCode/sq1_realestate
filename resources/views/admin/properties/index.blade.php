@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Properties
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('properties/create') }}" class="mr-2 mb-2 btn btn-success" > List Properties</a>
                        <a href="{{ url('properties/create') }}" class="mr-2 mb-2 btn btn-success" > Fetch from MLS</a>
                    </h5>

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Property Name</th><th>Type</th><th>Action</th></tr></thead>
                            <tbody>
                            @foreach($properties as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->type }}</td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('properties-photos/'.$value->id) }}"> Photos</a>
                                                <a class="dropdown-item" href="{{ url('properties-documents/'.$value->id) }}"> Documents</a>
                                                <a class="dropdown-item" href="{{ url('properties-flats/'.$value->id) }}"> Flats/Plot</a>
                                                <a class="dropdown-item" href="{{ url('properties-feature-photo/'.$value->id) }}"> Feature Photo</a>
                                                <div class="dropdown-divider"></div>
                                               @if( $value->type == 'condo')
                                                <a class="dropdown-item" href="{{ url('condo/'.$value->id) }}"> View Group</a>
                                                   @else
                                                    <a class="dropdown-item" href="{{ url('properties/'.$value->id) }}"> View</a>
                                                @endif
                                                <a class="dropdown-item" href="{{ url('properties-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('properties/'.$value->id.'/edit') }}"> Update</a>

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