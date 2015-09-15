@extends('admin.layouts.master')

@section('content')
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-sm-12">
                    {!! Form::open(['route'=>[ 'admin.categories.update', $category->id], 'method'=>'put' ]) !!}
                    <div class="form-group">
                        <label class="control-label" for="name">Category Name</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Category Name" autocomplete="off" value="{{ $category->title }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="sulg">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Food Slug" autocomplete="off" value="{{ $category->slug }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Edit</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop