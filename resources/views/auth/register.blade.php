@extends('layout.master')
@section('title', 'Register')
@section('stylesheets')
    @parent
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="active" id="login-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" action="{{URL::to('/register')}}" method="post" role="form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="{{old('name')}}">
                                        @if($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="{{old('email')}}">
                                        @if($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="{{old('password')}}">
                                        @if($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('password')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                                        @if($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('password_confirmation')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <button type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                Already have an account ?
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <a href="{{URL::to('/register')}}" class="forgot-password" id="register-form-link"> Sign in Now</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    @parent
@endsection