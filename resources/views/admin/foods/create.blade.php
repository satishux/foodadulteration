@extends('admin.layouts.master')

@section('content')
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-sm-12">
                     {!! Form::open(['route'=>[ 'admin.foods.store'], 'method'=>'post' ]) !!}
                        <div class="form-group">
                            <label class="control-label" for="name">Food Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Food Name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="sulg">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Food Slug" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adulterant">Adulterant</label>
                            <textarea class="form-control summernote" id="adulterant" name="adulterant"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="diseases">Diseases</label>
                            <textarea class="form-control summernote" id="diseases" name="diseases"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="summaries">Summaries</label>
                            <textarea class="form-control summernote" id="summaries" name="summaries"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="anatomical_context">Anotomical Context</label>
                            <textarea class="form-control summernote" id="anatomical_context" name="anatomical_context"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="genes">Genes</label>
                            <textarea class="form-control summernote" id="genes" name="genes"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="detection">Detection</label>
                            <textarea class="form-control summernote" id="detection" name="detection"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="bibliography">Bibliography</label>
                            <textarea class="form-control summernote" id="bibliography" name="bibliography"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add New Food</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/dashboard/vendor/summernote/summernote.min.css">
@stop

@section('scripts')
    <script type="text/javascript" src="/dashboard/vendor/summernote/summernote.min.js"></script>
    <script>
        (function() {
            $('.summernote').summernote({
                height : 150
            });

            $('.note-editable').on("blur", function(){
                var editor = $(this).closest('.note-editor').siblings('textarea.summernote');
                editor.html(editor.code());
            });
        })();
    </script>
@stop