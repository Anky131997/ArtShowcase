@extends('layouts.app')

@section('title') Admin Panel @endsection

@section('content')

   
     @include('includes.sidebar')

    <div class="col-md-8 text-center">
        <h1>Welcome back {{ Auth::User()->name }}</h1>
    </div>

@endsection