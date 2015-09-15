@extends('layouts.master')

@section('content')
    <div class="page-title clearfix wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="container">
            <h4 class="pull-left">Foods List</h4>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span>All Foods</span>
                        </div>
                        <div class="panel-body">
                            <ul class="custom-list custom-list-style6">
                                @foreach($foods as $food)
                                    <li data-list-num="{{  $food->id }}"><a href="{{ route('foods.show', [$food->slug])  }}">{{$food->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop