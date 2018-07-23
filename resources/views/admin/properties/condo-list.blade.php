@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Condo Apartment List
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('properties') }}" class="mr-2 mb-2 btn btn-success" > List Properties</a>
                    </h5>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Property Name</th><th>State</th><th>Action</th></tr></thead>
                            <tbody>
                            @foreach($condo as $group)
                                @foreach($group->groupFields  as $value)
                            {{--@foreach($condo as $value)--}}
                                <tr>
                                    <td>{{ $group->name }} {{ $value->model }}</td>
                                    <td></td>
                                    <td><div class="btn-group mr-1 mb-1">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                            <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                                                                           <a class="dropdown-item" href="{{ url('/condo/feature-image/'.$value->id) }}"> Feature Image</a>
                                                <a class="dropdown-item" href="{{ url('/condo/images/'.$value->id) }}"> Images</a>
                                                <a class="dropdown-item" href="{{ url('/condo/floor-plan/'.$value->id) }}"> Floor Plan</a>
                                                <a class="dropdown-item" href="{{ url('properties-delete/'.$value->id) }}"> Delete</a>
                                                <a class="dropdown-item" href="{{ url('properties/'.$value->id.'/edit') }}"> Update</a>

                                            </div>
                                        </div></td>
                                </tr>
                            @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop