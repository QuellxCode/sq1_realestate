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
                        <a href="{{ url('projects') }}" class="mr-2 mb-2 btn btn-success" > Back</a>
                    </h5>

                    <div class="table-responsive">
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody><tr>
                <td><strong><small class="text-danger">Name</small></strong></td>
                <td colspan="3">{{ $projects->name }}</td>
            </tr>
            <tr>
                <td><strong><small class="text-danger">City</small></strong></td>
                <td>{{ $projects->city }}</td>
                <td><strong><small class="text-danger">State</small></strong></td>
                <td>{{ $projects->state }}</td>
            </tr>
            <tr>
                <td><strong><small class="text-danger">Address</small></strong></td>
                <td>{{ $projects->address }}</td>
                <td><strong><small class="text-danger">Nearest Location</small></strong></td>
                <td>{{ $projects->nearest_location }}</td>
            </tr>
            <tr>
                <td><strong><small class="text-danger">How to reach</small></strong></td>
                <td>{{ $projects->reach }}</td>
                <td><strong><small class="text-danger">Why purchase</small></strong></td>
                <td>{{ $projects->purchase }}</td>
            </tr>
            <tr>
                <td><strong><small class="text-danger">Description:</small></strong></td>
                <td colspan="3">{{ $projects->description }}</td>
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