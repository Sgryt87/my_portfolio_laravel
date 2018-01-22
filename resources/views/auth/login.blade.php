@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" style="margin-top: 300px;">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                                Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--fix--}}
    {{--<section id="contact">--}}
    {{--<div class="container">--}}
        {{--<h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>--}}
        {{--<hr class="star-dark mb-5">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
                {{--<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->--}}
                {{--<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->--}}
                {{--<form name="sentMessage" id="contactForm" novalidate="novalidate">--}}
                    {{--<div class="control-group">--}}
                        {{--<div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
                            {{--<label>Name</label>--}}
                            {{--<input class="form-control" id="name" type="text" placeholder="Name" required="required"--}}
                                   {{--data-validation-required-message="Please enter your name.">--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group">--}}
                        {{--<div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
                            {{--<label>Email Address</label>--}}
                            {{--<input class="form-control" id="email" type="email" placeholder="Email Address"--}}
                                   {{--required="required"--}}
                                   {{--data-validation-required-message="Please enter your email address.">--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group">--}}
                        {{--<div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
                            {{--<label>Phone Number</label>--}}
                            {{--<input class="form-control" id="phone" type="tel" placeholder="Phone Number"--}}
                                   {{--required="required"--}}
                                   {{--data-validation-required-message="Please enter your phone number.">--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="control-group">--}}
                        {{--<div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
                            {{--<label>Message</label>--}}
                            {{--<textarea class="form-control" id="message" rows="5" placeholder="Message"--}}
                                      {{--required="required"--}}
                                      {{--data-validation-required-message="Please enter a message."></textarea>--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<div id="success"></div>--}}
                    {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection
