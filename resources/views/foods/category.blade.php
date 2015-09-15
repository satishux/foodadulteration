@extends('layouts.master')

@section('content')
    <div class="page-title clearfix wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="container">
            <h4 class="pull-left">Food by Category</h4>
        </div>
    </div>

    <section class="padding-bottom65">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span>Foods in {{ $category->title }}</span>
                        </div>
                        <div class="panel-body">
                            <ul class="custom-list custom-list-style4">
                                @if(count($foods) > 0)
                                    @foreach($foods as $food)
                                        <li><a href="{{ route('foods.show', [$food->slug])  }}">{{$food->name}}</a></li>
                                    @endforeach
                                @else
                                    <h4>No foods found in this category</h4>
                                    <a href="{{ route('pages.browse') }}">Go back to browse page</a>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop