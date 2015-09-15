@extends('layouts.master')


@section('content')
    <div class="page-title clearfix wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="container">
            <h4 class="pull-left">Food Information</h4>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6>Food Name : {{ $food->name }}</h6>
                        </div>

                        <div class="panel-body padding-lr-40">
                            <div class="padding-20">
                                <header class="section-title section-title-style1 margin-bottom20">
                                    <h4 class="padding-bottom10">Adulterant</h4>
                                </header>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <p>{!! $food->adulterant !!}</p>
                                    </div>
                                </div>
                            </div>

                           <div class="padding-2">
                               <header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Diseases</h4>
                                </header>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <p>{!! $food->diseases !!}</p>
                                    </div>
                                </div>
                           </div>

                         <div class="padding-20">
                             <header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Summaries</h4>
                            </header>
                            <div class="row">
                                <div class="col-md-12" >
                                    <p>{!! $food->summaries !!}</p>
                                </div>
                            </div>
                        </div>


                            <div class="padding-20"><header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Anatomical Context</h4>
                            </header>
                            <h6 class="heading-alt-style9"></h6>
                            <div class="row">
                                <div class="col-md-12" >
                                    <p>{!! $food->anatomical_context !!}</p>
                                </div>
                            </div></div>



                            <div class="padding-20"><header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Genes</h4>
                            </header>
                            <div class="row">
                                <div class="col-md-12" >
                                    <p>{!! $food->genes !!}</p>
                                </div>
                            </div></div>

                            <div class="padding-20"><header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Detection</h4>
                            </header>
                            <div class="row">
                                <div class="col-md-12" >
                                    <p>{!! $food->detection !!}</p>
                                </div>
                            </div></div>


                            <div class="padding-20"><header class="section-title section-title-style1 margin-bottom20">
                                <h4 class="padding-bottom10">Bibliography</h4>
                            </header>
                            <div class="row">
                                <div class="col-md-12" >
                                    <p>{!! $food->bibliography !!}</p>
                                </div>
                            </div></div>


                            <div class="padding-20">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <a class="btn btn-primary pull-left" href="{{ route('foods.show', $prevFood['slug']) }}"><span style="line-height : 2.5em"><i class="fa fa-arrow-left"></i> Previous Food</span></a>
                                        <a class="btn btn-primary pull-right" href="{{ route('foods.show', $nextFood['slug']) }}"><span style="line-height: 2.5em"> Next Food <i class="fa fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop