@extends('layouts.master')

@section('css')

    <style>
        @font-face{
        font-family:whoa;
        src:url({{ asset('fonts/whoa!.ttf') }})
        }
        @font-face{
            font-family:backToBack;
            src:url({{ asset('fonts/Back-to-Black-Bold-Demo.ttf') }})
        }
    </style>

@endsection

@section('topbar')

@include('includes.topbar')

@endsection

@section('content')


        <div class="col-md-8 mt-5 mb-5">
            <div class="shadow" id="content_card" style="background-image:url({{ asset('storage/'. $tattoo->image) }})">

            </div>
            <img src="{{ asset('storage/'. $tattoo->image) }}" style="border-radius:15px;" width=100% height=auto class="img-fluid shadow " alt="">
        </div>
        <div class="col-md-5 mt-5 mb-5">
            <div class="float-right shadow">
                <h3 class="mt-2 float-left"><strong> {{ $tattoo->name }} </strong></h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h5 class="my-3"><strong> {{ $tattoo->description }} </strong></h5>
                                </div>
                                <div class="col-md-12">
                                    <span class="badge badge-pill badge-dark"> {{ $tattoo->type->name }} </span>
                                    <span class="badge badge-pill badge-dark"> {{ $tattoo->color }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('footer')

@include('includes.footer')

@endsection