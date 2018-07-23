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
                        <button class="btn btn-primary" data-target="#exampleModal1" data-toggle="modal" type="button">
                            Add Photo
                        </button>
                        <a href="{{ url('properties') }}" class="btn btn-success" >Back</a>
                    </h5>

                    <div class="table-responsive">
                        <div class="panel-body">
                            <h5>Feature Photo</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            @if(isset($photos->feature_photo))
                                            <td colspan="3"><img src="{{ url($photos->feature_photo) }}"/></td>

                                            </td>
                                                @endif
                                        </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog"
         tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Upload Photo
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true"> &times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('properties-feature-photo/'.$property_id) }}" id="formValidate" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label for="">Upload Picture</label>
                            <input class="form-control" required="required" type="file" name="photo">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                    <button class="btn btn-primary" type="submit"> Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@stop