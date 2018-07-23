@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Clients/Contacts
                </h6>
                <div class="element-box">
                    <h5 class="form-header">
                        <a href="{{ url('client') }}" class="mr-2 mb-2 btn btn-success" > Back</a>
                    </h5>
                    <div class="table-responsive">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td><strong><small class="text-danger">Email</small></strong></td>
                                        <td colspan="3">{{ $clients->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">phone</small></strong></td>
                                        <td>{{ $clients->phone }}</td>
                                        <td><strong><small class="text-danger">father_name	</small></strong></td>
                                        <td>{{ $clients->father_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Address</small></strong></td>
                                        <td>{{ $clients->address }}</td>
                                        <td><strong><small class="text-danger">District </small></strong></td>
                                        <td>{{ $clients->district }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">State</small></strong></td>
                                        <td>{{ $clients->state }}</td>
                                        <td><strong><small class="text-danger">Pincode</small></strong></td>
                                        <td>{{ $clients->pincode }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Nationality</small></strong></td>
                                        <td colspan="3">{{ $clients->nationality }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Pan</small></strong></td>
                                        <td colspan="3">{{ $clients->pan }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Date Of Birth</small></strong></td>
                                        <td colspan="3">{{ $clients->dob }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Occupation</small></strong></td>
                                        <td colspan="3">{{ $clients->occupation }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong><small class="text-danger">Photo</small></strong></td>
                                        <td colspan="3">{{ $clients->photo }}</td>
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