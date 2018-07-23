@extends('admin.layout.app')
@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                Campaign
            </h6>
            <div class="element-box">
                <h5 class="form-header">
                    <a href="{{ url('projects/create') }}" class="mr-2 mb-2 btn btn-success" > Add Campaign</a>
                </h5>

                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont"><thead><tr><th>Campaign Name</th><th>City</th><th>State</th><th>Action</th></tr></thead>


                        <tbody>
                        @foreach($projects as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->city }}</td>
                            <td>{{ $value->state }}</td>
                            <td><div class="btn-group mr-1 mb-1">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">Action</button>
                                    <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('project-photos/'.$value->id) }}"> Photos</a>
                                        <a class="dropdown-item" href="{{ url('project-layout-plan/'.$value->id) }}"> Layout Plan</a>
                                        <a class="dropdown-item" href="{{ url('project-location-map/'.$value->id) }}"> Location Map</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('projects/'.$value->id) }}"> View</a>
                                        <a class="dropdown-item" href="{{ url('project-delete/'.$value->id) }}"> Delete</a>
                                        <a class="dropdown-item" href="{{ url('projects/'.$value->id.'/edit') }}"> Update</a>
                                        @if($value->to_date < date("Y-m-d"))
                                        <a class="dropdown-item" href="{{ url('campaign-properties/'.str_replace(' ', '-', $value->name)) }}"> External campaign page</a>
                                        @endif

                                        {{--<a class="dropdown-item" href="{{ url('campaign-properties/'.strtr(base64_encode($value->id), '+/=', '._-')) }}"> External campaign page</a>                                    </div>--}}
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