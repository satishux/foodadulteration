@extends('layouts.master')

@section('content')
    <div class="page-title clearfix wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="container">
            <h4 class="pull-left">Browse</h4>
        </div>
    </div>

    <section class="padding-bottom65">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['route'=>[ 'foods.search'], 'method' => 'get']) !!}
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">
                                <select name="category" id="category" class="no-border-right bg-white">
                                    <option value="0">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_term" id="search_term" placeholder="Search for Food">
                                  <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><span class="fa fa-search"></span></button>
                                  </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    {!! Form::close() !!}

                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

    <section class="padding-bottom65">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="section-title section-title-style6">
                        <h5>Browse Food</h5>
                    </header>
                    <div>
                        <a href="{{ route("foods.index") }}">Complete foods list</a>

                        <h6 class="padding-top80">Browse by type</h6>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route('categories.show', [$category->id]) }}">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>

@stop