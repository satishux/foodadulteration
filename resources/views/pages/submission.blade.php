@extends('layouts.master')

@section('content')

    <div class="page-title clearfix wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="container">
            <h4 class="pull-left">Submission Form</h4>
        </div>
    </div>



    <section>
        <div class="container">

            <div class="col-md-8">

             {!! Form::open() !!}

                <div class="form-group">
                    <label class="control-label" for="field">Field</label>
                    <select class="form-control" id="field" name="field">
                        <option value="1">All Fields</option>
                        <option value="2">Food</option>
                        <option value="3">Disease</option>
                        <option value="4">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="journal">Journal</label>
                    <input type="text" class="form-control" id="journal" name="journal" autocomplete="off">
                </div>

                <div class="form-group">
                    <label class="control-label" for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label" for="details">Details</label>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label" for="volume">Volume</label>
                            <input type="text" class="form-control" id="volume" name="volume">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label" for="issue">Issue</label>
                            <input type="text" class="form-control" id="issue" name="issue">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label" for="details">First Page</label>
                            <input type="text" class="form-control" id="first_page" name="first_page">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="another_name">Another Name</label>
                    <input type="text" class="form-control" id="another_name" name="another_name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="title_words">Title Words</label>
                    <input type="text" class="form-control" id="title_words" name="title_words">
                </div>

                <div class="form-group">
                    <label class="control-label" for="pmid">PMID</label>
                    <input type="text" class="form-control" id="pmid" name="pmid">
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">Email ID</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label class="control-label" for="comments">Comments</label>
                    <textarea class="form-control" id="comments" name="comments"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div><!-- /container -->
    </section>

@stop