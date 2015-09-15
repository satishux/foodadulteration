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
                                    <th data-tablesaw-priority="1">Food ID</th>
                                    <th data-tablesaw-priority="persist">Food Name</th>
                                    <th data-tablesaw-priority="3">Slug</th>
                                    <th data-tablesaw-priority="3">Created At</th>
                                    <th data-tablesaw-priority="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($foods as $food)
                                    <tr>
                                        <th>{{ $food->id }}</th>
                                        <td>{{ $food->name }}</td>
                                        <td>{{ $food->slug }}</td>
                                        <td>{{ $food->created_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-icon btn-primary" href="{{ route('admin.foods.edit', [$food->id]) }}">
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
                                {!! $foods->render() !!}
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