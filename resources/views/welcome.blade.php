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

@include('includes.banner')

@endsection

@section('content')
     
    <div class="col-md-12 mt-5 mb-4 text-center">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-4">
                <h4>Fun facts about us</h4>
            </div>
            <div class="col-4 mb-2">  
                <i class="fas fa-hands-helping fa-lg"></i>
                <h2>3500+</h2>
                <p><strong>Customers Served</strong></p>
            </div>
            <div class="col-4 mb-2">  
                <i class="fas fa-dragon fa-lg"></i>
                <h2>
                    @if(count($allTattoos)>0)
                        {{ count($allTattoos) }}
                    @else
                        0
                    @endif
                </h2>
                <p><strong>Tattoos Available</strong></p>
            </div>
            <div class="col-4 mb-2">  
                <i class="fab fa-instagram fa-lg"></i>
                <p><strong>People are Following</strong></p>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5 mb-4 text-center">
        <h4>Presenting you a Showcase of some of our Work</h4>
    </div>                    
    @if(count($tattoos)>0)
        @foreach($tattoos as $tattoo)
            <div class="col-md-4">
                <div class="card my-3 mx-3">
                    <img src="{{ asset('storage/'.$tattoo->image) }}" class="card-img-top" width=100% height=auto alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <strong>{{ $tattoo->name }}</strong>
                            <span class="badge badge-pill badge-dark"> {{ $tattoo->type->name }} </span>
                            <span class="badge badge-pill badge-dark"> {{ $tattoo->color }} </span>
                        </h4>
                        <a href="{{ route('tattoo', $tattoo->id )}}" style="width:100%; background-color:#546e7a;" class="btn float-right text-white"> <i class="far fa-eye"></i> See More</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
                        
    
@endsection