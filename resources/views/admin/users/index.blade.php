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
                                    <th data-tablesaw-priority="2">User ID</th>
                                    <th data-tablesaw-priority="persist">User Name</th>
                                    <th data-tablesaw-priority="3">User Email</th>
                                    <th data-tablesaw-priority="1">Admin</th>
                                    <th data-tablesaw-priority="1">Created at</th>
                                    <th data-tablesaw-priority="3">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->privilege == 1)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-icon btn-primary" href="{{ route('admin.users.edit', $user->id) }}">
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
                                {!! $users->render() !!}
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