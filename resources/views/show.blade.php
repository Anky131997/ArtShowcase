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

        <div class="col-md-4 mt-3">
            <img src="{{ asset('storage/'. $tattoo->image) }}" style="border-radius:15px;" width=90% height=auto class="img-fluid shadow" alt="">
        </div>
        <div class="col-md-5 mt-4 mb-5">
            <div class="float-right" id="content_card">
                <div class="row">
                    <div class="col-md-12"><h1 class="float-left pb-3" style="color:#37474f"><strong> {{ $tattoo->name }} </strong></h1></div>
                    <div class="col-md-12 pt-2">
                        <a href="{{ route('profile') }}" ><img src="{{ asset('storage/'. $artist->image) }}" id="imgborder" class="float-left" width=35px height=35px style="border-radius:50%" alt=""> <h5 class="pl-5 pt-2" style="color:#37474f">{{ $artist->name }}</h5> </a>
                    </div>
                    <div class="col-md-12 pt-5" style="color:#37474f;">
                        <h5>{{ $tattoo->description }}</h5>
                    </div>
                    <div class="col-md-12 pt-4">
                        <p style="color:#37474f">Do you want to contact with the Author?</p>
                    </div>
                    <div class="col-md-2 pt-1">
                        <a href="https://wa.me/{{ $artist->number }}" style="color: #25D366;"><i class="fab fa-whatsapp fa-3x"></i></a>
                    </div>
                    @if($artist->insta != null)
                        <div class="col-md-2 pt-1">
                            <a href="https://www.instagram.com/{{ $artist->insta }}" style="color: #bc2a8d ;"><i class="fab fa-instagram fa-3x"></i></a>
                        </div>
                    @endif
                    @if($artist->youtube != null)
                        <div class="col-md-2 pt-1">
                            <a href="https://www.youtube.com/{{ $artist->youtube }}" style="color: #FF0000 ;"><i class="fab fa-youtube fa-3x"></i></a>
                        </div>
                    @endif
                    @if($artist->facebook != null)
                    <div class="col-md-2 pt-1">
                        <a href="https://www.facebook.com/{{ $artist->facebook }}" style="color: #4267B2 ;"><i class="fab fa-facebook fa-3x"></i></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

@endsection

@section('footer')

@include('includes.footer')

@endsection