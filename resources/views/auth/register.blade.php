@extends('layouts.master')

@section('content')
    <section class="main-contents padding-80">
        <div class="container">
            <div class="account-form-wrapper register-form-wrapper">
                <form action="{{ route('auth.post.register') }}" class="register-form row" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6">
                        <header class="section-title section-title-style2 wow fadeInDown">
                            <h6 class="heading-alt-style9">Your Personal Details</h6>
                            <div class="empty-space45"></div>
                        </header>

                        <div class="input-container clearfix wow fadeInDown" data-wow-delay="0.1s">
                            <label for="first-name" class="col-md-4 col-sm-3 col-xs-4">Name:*</label>
                            <input type="text" id="name" name="name" class="col-md-8 col-sm-9 col-xs-8" required>
                        </div><!-- /input-container -->

                        <div class="input-container clearfix wow fadeInDown" data-wow-delay="0.3s">
                            <label for="register-email" class="col-md-4 col-sm-3 col-xs-4">E-Mail:*</label>
                            <input type="email" id="email" name="email" class="col-md-8 col-sm-9 col-xs-8" required>
                        </div><!-- /input-container -->

                    </div><!-- /col-md-6 -->


                    <div class="clearfix"></div>
                    <div class="empty-space25"></div>
                    <hr>
                    <div class="empty-space50"></div>

                    <div class="col-md-6">
                        <header class="section-title section-title-style2 wow fadeInDown">
                            <h6 class="heading-alt-style9">Your Password</h6>
                            <div class="empty-space20"></div>
                        </header>

                        <div class="input-container clearfix wow fadeInDown" data-wow-delay="0.1s">
                            <label for="password" class="col-md-4 col-sm-3 col-xs-4">Password:*</label>
                            <input type="password" id="password" name="password" class="col-md-8 col-sm-9 col-xs-8" placeholder="Password" required>
                        </div><!-- /input-container -->

                        <div class="input-container clearfix wow fadeInDown" data-wow-delay="0.2s">
                            <label for="password-confirm" class="col-md-4 col-sm-3 col-xs-4">Password Confirm:*</label>
                            <input type="password" id="password-confirm" name="password-confirm" class="col-md-8 col-sm-9 col-xs-8" placeholder="Password" required>
                        </div><!-- /input-container -->

                    </div><!-- /col-md-6 -->
                    <div class="col-md-6">
                        <header class="section-title section-title-style2 wow fadeInDown">
                            <h6 class="heading-alt-style9">Newsletter</h6>
                            <div class="empty-space20"></div>
                        </header>

                        <p class="wow fadeInDown" data-wow-delay="0.1s">Subscribe:</p>
                        <div class="input-container clearfix wow fadeInDown" data-wow-delay="0.2s">
                            <p>
                                <input type="radio" name="newsletter" value="1" checked>
                                <span>Yes</span>
                            </p>
                            <p>
                                <input type="radio" name="newsletter" value="0">
                                <span>No</span>
                            </p>
                        </div><!-- /input-container -->

                    </div><!-- /col-md-6 -->

                    <div class="clearfix"></div>
                    <div class="empty-space15"></div>
                    <hr>
                    <div class="empty-space40"></div>

                    <div class="col-md-12">
                        <button type="submit" class="button dark-bg icon-button-style2 pull-right wow fadeInDown">
                            <i class="icon-knight-348"></i>
                            <span>Continue</span>
                        </button>
                    </div><!-- /col-md-3 -->
                </form>
            </div><!-- /account-form -->
        </div><!-- /container -->
    </section>
@stop