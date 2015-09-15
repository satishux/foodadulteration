@extends('layouts.master')

@section('content')

@stop

@section('footer')
    <div class="container padding-100 sm-padding-80">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="widget widget-contact-info widget-contact-info-style1">
                            <h6 class="widget-title heading-alt-style8 short-underline">Contact Info</h6>
                            <address>
                                <p class="clearfix">
                                    <i class="icon icon-knight-365"></i><span>EMAIL: <a href="mailto:info@foodadulteratrion.in">info@foodadulteration.in</a></span>
                                </p>
                                <p class="clearfix">
                                    <i class="icon large-icon icon-knight-283"></i><span>WEB: <a class="underline" href="http://foodadulteration.in">www.foodadulteration.in</a></span>
                                </p>
                            </address>
                        </div><!-- /widget-contact-info -->
                    </div><!-- /col-sm-6 -->
                </div><!-- /row -->
            </div><!-- /col-md-3 -->
            <div class="sm-empty-space35"></div>
            <div class="col-md-8 col-md-offset-1">
                <div class="widget widget-contact-form widget-contact-form-style1">
                    <h6 class="widget-title heading-alt-style8 short-underline">Contact Form</h6>
                    <form action="php/contact.php" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="contact-form-name" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="contact-form-email" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="contact-form-subject" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-md-12">
                                <textarea class="contact-form-message" name="message" cols="90" rows="10" placeholder="Content" required></textarea>
                            </div>
                            <input type="submit" class="red-bg form-submit" name="form-submit" value="Submit">
                        </div><!-- /row -->
                    </form>
                    <div class="contact-form-message"></div>
                </div><!-- /widget-contact-form -->
            </div><!-- /col-md-8 -->
        </div><!-- /row -->
    </div><!-- /container -->
@stop