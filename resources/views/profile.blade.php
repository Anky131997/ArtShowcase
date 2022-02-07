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
        <div class="col-md-3">
            <div class="card shadow">
            <img src="{{ asset('storage/'. $user->image) }}" class="card-img-top" style="object-fit: cover;" width=100% height=300px alt="">
                <div class="card-body " id="profile_card">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <h3 class="float-left"><strong>{{ $user->name }}</strong></h3>
                            </div>
                            @if(count($arts)!=0)
                                <div class="col-md-12">
                                    <p class="float-left"> A proud creator of {{ count($arts) }} Artwork(s)</p>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <p class="float-left">No Artwork so far</p>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <p class="float-left"><strong> Email Address :</strong> <br> {{ $user->email }} </p>
                            </div>
                            <div class="col-md-12">
                                <p class="float-left"><strong> Age :</strong><br>{{ $user->age }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="float-left"><strong> Gender :</strong> <br> {{ $user->gender }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="float-left"><strong> Contact Number :</strong> <br> {{ $user->number }}</p>
                            </div>
                            <hr size="2" width="90%" color="#EAE7DC"> 
                            @if($user->insta != null)
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="https://www.instagram.com/{{ $user->insta }}" style="color: #bc2a8d ;"><i class="fab fa-instagram fa-2x"></i></a>
                                </div>
                            @else
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="#" style="color: grey ;"><i class="fab fa-instagram fa-2x"></i></a>
                                </div>
                            @endif
                            @if($user->youtube != null)
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="https://www.youtube.com/{{ $user->youtube }}" style="color: #FF0000 ;"><i class="fab fa-youtube fa-2x"></i></a>
                                </div>
                            @else
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="#" style="color: grey ;"><i class="fab fa-youtube fa-2x"></i></a>
                                </div>
                            @endif
                            @if($user->facebook != null)
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="https://www.facebook.com/{{ $user->facebook }}" style="color: #4267B2 ;"><i class="fab fa-facebook fa-2x"></i></a>
                                </div>
                            @else
                                <div class="col-md-4 pt-1 pb-2 text-center">
                                    <a href="#" style="color: grey ;"><i class="fab fa-facebook fa-2x"></i></a>
                                </div>
                            @endif  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white"> <h5 class="pt-2"><strong>Artworks</strong></h5> </div>
                <div class="card-body">
                    <div class="container-fluid table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Uploaded</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($arts as $art)
                                    <tr>
                                        <td><img src="{{ 'storage/'. $art->image }}" style="border-radius:6px; object-fit: cover;" width=70px height=50x alt=""></td>
                                        <td>{{ $art->type->name }}</td>
                                        <td> {{ today()->diffInDays($art->created_at->toDateString()) }} day(s) ago</td>
                                        <td><a href="{{ route('tattoo', $art->id )}}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i></a></td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
