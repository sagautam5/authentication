@extends('layout.master')
@section('title', 'Guest Dashboard')
@section('stylesheets')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            Guest Dashboard !
            <a href="{{URL::to('/logout')}}"> click here to logout</a>
        </div>
    </div>
@endsection

@section('javascripts')
    @parent
@endsection