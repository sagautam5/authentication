@extends('layout.master')
@section('title', 'Admin Dashboard')
@section('stylesheets')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            Admin Dashboard !
            <a href="{{URL::to('/logout')}}"> click here to logout</a>
        </div>
    </div>
@endsection

@section('javascripts')
    @parent
@endsection