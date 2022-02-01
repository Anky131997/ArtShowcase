@extends('layouts.master')

@section('topbar')

@include('includes.topbar')

@endsection

@section('content')


  <div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills text-center">
                <li class="active"><a href="#all" class="btn btn-light mx-2">All</a></li>
                <li><a href="#colored" class="btn btn-light mx-2">Colored</a></li>
                <li><a href="#blandwh" class="btn btn-light mx-2">Black & White</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div id="all" class="tab-pane fade show active">
                    <div class="row">
                        @foreach($tattoos as $tattoo)
                            <div class="col-md-4">
                                <div class="card my-3 mx-3">
                                    <img src="{{ asset('storage/'.$tattoo->image) }}" class="card-img-top" width=100% height=auto alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><strong>{{ $tattoo->name }}</strong></h4>
                                        <p class="card-text">{{ $tattoo->description }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('tattoo', $tattoo->id )}}" class="btn btn-info float-right text-white"> <i class="far fa-eye"></i> See More</a>
                                    </div>
                                </div>                         
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="colored" class="tab-pane fade">
                    <div class="row">
                        @foreach($tattoos as $tattoo)
                            @if($tattoo->color == 'colored')
                                <div class="col-md-4">
                                    <div class="card my-3 mx-3">
                                        <img src="{{ asset('storage/'.$tattoo->image) }}" class="card-img-top" width=100% height=auto alt="">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><strong>{{ $tattoo->name }}</strong></h4>
                                            <p class="card-text">{{ $tattoo->description }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('tattoo', $tattoo->id )}}" class="btn btn-info float-right text-white"> <i class="far fa-eye"></i> See More</a>
                                        </div>
                                    </div>                      
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div id="blandwh" class="tab-pane fade">
                    <div class="row">
                        @foreach($tattoos as $tattoo)
                            @if($tattoo->color == 'b&w')
                                <div class="col-md-4">
                                    <div class="card my-3 mx-3">
                                        <img src="{{ asset('storage/'.$tattoo->image) }}" class="card-img-top" width=100% height=auto alt="">
                                        <div class="card-body">
                                            <h4 class="card-title text-center"><strong>{{ $tattoo->name }}</strong></h4>
                                            <p class="card-text">{{ $tattoo->description }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('tattoo', $tattoo->id )}}" class="btn btn-info float-right text-white"> <i class="far fa-eye"></i> See More</a>
                                        </div>
                                    </div>                      
                                </div>
                            @endif
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
