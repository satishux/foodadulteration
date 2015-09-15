@extends('admin.layouts.master')

@section('content')
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-body">
                            <table class="tablesaw table-striped" data-tablesaw-mode="swipe" data-tablesaw-mode-switch
                                   data-tablesaw-minimap>
                                <thead>
                                <tr>
                                    <th data-tablesaw-priority="1">Category ID</th>
                                    <th data-tablesaw-priority="persist">Category Name</th>
                                    <th data-tablesaw-priority="3">Slug</th>
                                    <th data-tablesaw-priority="3">Description</th>
                                    <th data-tablesaw-priority="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th>{{ $category->id }}</th>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-icon btn-primary" href="{{ route('admin.categories.edit', $category->id) }}">
                                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                                </a>
                                                <button type="button" class="btn btn-icon btn-danger">
                                                    <i class="icon wb-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pull-right">
                                {!! $categories->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/dashboard/vendor/filament-tablesaw/tablesaw.css">
@stop