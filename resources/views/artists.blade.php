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


  <div class="col-md-10 mt-5">
    <div class="card">
        <div class="card-header bg-secondary text-white"><strong>Our Prestigious Artists</strong></div>
        <div class="card-body">
            <div class="tab-content">
                <div id="all" class="tab-pane fade show active">
                    <div class="row">
                        @foreach($artists as $artist)
                            <div class="col-md-4">
                                <div class="card my-3 mx-3">
                                    <img src="{{ asset('storage/'.$artist->image) }}" class="card-img-top" style="object-fit: cover;" width=100% height=300px alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><strong>{{ $artist->name }}</strong></h4>
                                        <div class="row">
                                        @if($artist->insta != null)
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="https://www.instagram.com/{{ $artist->insta }}" style="color: #bc2a8d ;"><i class="fab fa-instagram fa-2x"></i></a>
                                            </div>
                                        @else
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="#" style="color: grey ;"><i class="fab fa-instagram fa-2x"></i></a>
                                            </div>
                                        @endif
                                        @if($artist->youtube != null)
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="https://www.youtube.com/{{ $artist->youtube }}" style="color: #FF0000 ;"><i class="fab fa-youtube fa-2x"></i></a>
                                            </div>
                                        @else
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="#" style="color: grey ;"><i class="fab fa-youtube fa-2x"></i></a>
                                            </div>
                                        @endif
                                        @if($artist->facebook != null)
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="https://www.facebook.com/{{ $artist->facebook }}" style="color: #4267B2 ;"><i class="fab fa-facebook fa-2x"></i></a>
                                            </div>
                                        @else
                                            <div class="col-md-4 pt-1 pb-2 text-center">
                                                <a href="#" style="color: grey ;"><i class="fab fa-facebook fa-2x"></i></a>
                                            </div>
                                        @endif
                                        </div>
                                        <a href="{{ route('artistProfile', $artist->id )}}" class="btn btn-info float-right text-white"> <i class="far fa-eye"></i> See More</a>
                                    </div>
                                </div>                         
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  

 
@endsection


@section('script')



<script>
$(document).ready(function(){
  $(".nav-pills a").click(function(){
    $(this).tab('show');
  });
});
</script>

@endsection
