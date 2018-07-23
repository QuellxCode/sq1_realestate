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
                        <a href="{{ url('properties') }}" class="mr-2 mb-2 btn btn-success" > Back</a>
                    </h5>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td><strong><small class="text-danger">Project</small></strong></td>
                                        <td colspan="3">{{ $properties->projects->where('id',$properties->project_id)->first()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Property Name</small></strong></td>
                                        <td>{{ $properties->name }}</td>
                                        <td><strong><small class="text-danger">State</small></strong></td>
                                        <td>{{ $properties->type }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Availiable</small></strong></td>
                                        <td>{{ $properties->availiable }}</td>
                                        <td><strong><small class="text-danger">Remarks </small></strong></td>
                                        <td>{{ $properties->remarks }}</td>
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