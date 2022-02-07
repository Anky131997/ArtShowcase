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
        <h4>Presenting you a Showcase of some of our Work</h4>
    </div>                    
    @if(count($arts)>0)
        @foreach($arts as $art)
            <div class="col-md-4">
                <div class="card my-3 mx-3">
                    <img src="{{ asset('storage/'.$art->image) }}" class="card-img-top" style="object-fit: cover;" width=100% height=300px alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <strong>{{ $art->name }}</strong>
                            <span class="badge badge-pill badge-dark"> {{ $art->type->name }} </span>
                            <span class="badge badge-pill badge-dark"> {{ $art->color }} </span>
                        </h4>
                        <a href="{{ route('tattoo', $art->id )}}" style="width:100%; background-color:#546e7a;" class="btn float-right text-white"> <i class="far fa-eye"></i> See More</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
                        
    
@endsection

@section('footer')

@include('includes.footer')

@endsection