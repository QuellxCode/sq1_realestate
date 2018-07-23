@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Blog
                        </h6>
                        @include('shared.errors')
                        <div class="element-box">
                            <form action="{{ url('blog-config') }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="title">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for=""> Category</label>
                                            <select class="form-control select2"  name="category[]" multiple="true">
                                                @foreach($category as $value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                                {{--<option selected="true">--}}
                                                    {{--California--}}
                                                {{--</option>--}}
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                    <div class="form-group">

                                            <label for="">Post</label>
                                            <textarea class="form-control" required="required"
                                                      name="post"></textarea>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Video</label>
                                            <input class="form-control" type="file" name="video">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>

                                    </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="">Author</label>
                                            <input class="form-control" required="required" type="text" name="author">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                    <div class="form-group">
                                            <label for="">Feature Image</label>
                                            <input class="form-control" required="required" type="file" name="feature_image">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                    </div>
                                    <div class="form-buttons-w">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="{{ url('blog-config') }}" class="btn btn-danger">Close</a>
                                    </div>

                                </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop