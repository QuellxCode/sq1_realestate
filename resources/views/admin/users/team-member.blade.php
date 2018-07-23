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
                        <a href="{{ url('team') }}" class="mr-2 mb-2 btn btn-success" > Back</a>
                    </h5>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td><strong><small class="text-danger">Name</small></strong></td>
                                        <td colspan="3">{{ $team->name }}</td>
                                    </tr>
                                    <tr>                                            <td><strong><small class="text-danger">Team Member</small></strong></td>

                                    @foreach($team_member as $value)
                                            <td> {{ $value->users->first_name }}</td>
                                            @endforeach
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