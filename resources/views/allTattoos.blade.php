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
        <div class="card-header bg-secondary text-white"><strong>{{ $artType->name }} Category Artworks</strong></div>
        <div class="card-body">
            <div class="tab-content">
                <div id="all" class="tab-pane fade show active">
                    <div class="row">
                        @foreach($arts as $art)
                            <div class="col-md-4">
                                <div class="card my-3 mx-3">
                                    <img src="{{ asset('storage/'.$art->image) }}" class="card-img-top" style="object-fit: cover;" width=100% height=300px alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><strong>{{ $art->name }}</strong></h4>
                                        <p class="card-text">{{ $art->description }}</p>
                                        <a href="{{ route('tattoo', $art->id )}}" class="btn btn-info float-right text-white"> <i class="far fa-eye"></i> See More</a>
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
