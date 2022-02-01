@extends('layouts.master')

@section('topbar')

@include('includes.topbar')

@endsection

@section('content')

    <div class="col-md-12 mt-5 mb-5">
        <div class="card">
            <div class="card-header text-center"> <h3 class="mt-2"><strong> {{ $tattoo->name }} </strong></h3>  </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('storage/'. $tattoo->image) }}" style="border-radius:4px;" width=100% height=auto class="img-fluid" alt="">
                    </div>
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