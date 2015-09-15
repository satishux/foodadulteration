@extends('layouts.master')


@section('content')
    <section class="main-contents padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="account-form-wrapper login-form-wrapper">
                        <header class="section-title section-title-style2">
                            <h4>New User</h4>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        </header>
                        <div class="empty-space180"></div>
                        <hr>
                        <div class="empty-space40"></div>
                        <a href="{{ route('auth.register') }}" class="button red-bg icon-button-style2 pull-right">
                            <i class="icon-knight-348"></i>
                            <span>Register</span>
                        </a>
                    </div><!-- /account-form -->
                </div><!-- /col-md-6 -->
                <div class="sm-empty-space30"></div>
                <div class="col-md-6">
                    <div class="account-form-wrapper login-form-wrapper">
                        <header class="section-title section-title-style2">
                            <h4>Return User</h4>
                            <p>I am a returning user</p>
                        </header>
                        <form action="{{ route('auth.post.login') }}" class="login-form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="input-container clearfix">
                                <label for="username" class="col-md-4 col-sm4 col-xs-4">Email:*</label>
                                <input type="text" id="email" name="email" class="col-md-8 col-sm-8 col-xs-8" placeholder="Email" required>
                            </div><!-- /input-container -->
                            <div class="input-container clearfix">
                                <label for="password" class="col-md-4 col-sm4 col-xs-4">Password:*</label>
                                <input type="password" id="password" name="password" class="col-md-8 col-sm-8 col-xs-8" placeholder="Password" required>
                            </div><!-- /input-container -->
                            <div class="clearfix"></div>
                            <div class="empty-space22"></div>
                            <hr>
                            <div class="empty-space40"></div>
                            <button type="submit" class="button dark-bg icon-button-style2 pull-right">
                                <i class="icon2x icon-knight-645"></i>
                                <span>Login</span>
                            </button>
                        </form>
                    </div><!-- /account-form -->
                </div><!-- /col-md-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
@stop