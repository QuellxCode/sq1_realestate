@extends('admin.layout.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                             Categories
                        </h6>
                        @include('shared.errors')

                        <div class="element-box">
                            <form action="{{ url('category-update/'.{{ $category->id }}) }}" id="formValidate" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="name" value="{{ $category->name }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Short Name</label>

                                            <input class="form-control"  required="required" name="short_name"  type="text" value="{{ $category->short_name }}" >
                                            <div class="help-block form-text with-errors form-control-feedback"></div>


                                        </div>
                                        <div class="form-group">
                                            <label for="">Ordering</label>
                                            <input class="form-control" required="required" type="text"
                                                   name="ordering" value="{{ $category->ordering }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select class="form-control" required="required" name="type">
                                                <option value="">
                                                    Select Payment Type
                                                </option>
                                                <option value="Pro"
                                                @if($category->type == "Pro")
                                                    {{ 'selected' }}
                                                    @endif
                                                >
                                                    Project
                                                </option>
                                                <option value="Gal"
                                                @if($category->type == "Gal")
                                                    {{ 'selected' }}
                                                        @endif>
                                                    Gallery
                                                </option>
                                            </select>
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="{{ url('category-list') }}" class="btn btn-danger">Close</a>
                                        </div>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop