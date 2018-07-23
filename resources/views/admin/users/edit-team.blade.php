@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Agent                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('team-update/'.$team->id) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Team Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $team->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Multiselect</label>
                                            <select class="form-control select2" multiple="true" name="member[]">
                                                @if($users)
                                                    @foreach($users as $value)
                                                        <option value="{{ $value->id }}"
                                                        @foreach($team_member as $team)
                                                            @if($value->id == $team->user_id)
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endforeach
                                                        >
                                                            {{ $value->first_name }}{{ $value->last_name }}
                                                        </option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="{{ url('team') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop