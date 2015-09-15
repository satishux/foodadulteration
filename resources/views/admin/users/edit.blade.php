@extends('admin.layouts.master')

@section('content')
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-sm-12">
                    {!! Form::open(['route'=>[ 'admin.users.update', $user->id], 'method'=>'put' ]) !!}
                    <div class="form-group">
                        <label class="control-label" for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" autocomplete="off" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="sulg">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div class="checkbox-custom checkbox-danger">
                            @if($user->privilege == 1)
                                <input checked type="checkbox" name="privilege" id="privilege">
                            @else
                                <input type="checkbox" name="privilege" id="privilege">
                            @endif
                            <label> Admin</label>
                        </div>
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