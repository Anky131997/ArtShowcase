        <div id="wrapper">
            <div id="sidebar" class="">
                <div class="container-fluid">
                    <div class="row">
                        <div id="closeButton" class="col-md-12">
                            <a id="sidebarClose" class="float-left mt-4 ml-3">
                                <i class="fas fa-times fa-2x"></i>
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <h3 class="mt-4 mb-3" style="font-family:backToBack;"><strong>Artgalore</strong></h3>
                        </div>
                        <div class="col-md-12 text-center">
                            <h6>Do Something Creative Everyday</h6>
                        </div>
                        <div class="col-md-12 mt-5 mb-2 text-center">
                            <a href="{{ route('welcome') }}" class="text-dark"><h6><strong>Home</strong></h6></a>
                        </div>
                        <div class="col-md-12 mt-2 mb-2 text-center">
                            <a href="{{ route('artists') }}" class="text-dark"><h6><strong>Artists</strong></h6></a>
                        </div>
                        <div class="col-md-12 mt-2 mb-2 text-center">
                            <a href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-dark"><h6><strong>Artworks</strong></h6></a>
                            <div class="collapse" id="collapseExample">
                                <div class="row">
                                    @foreach($types as $type)
                                        <div class="col-md-12 mt-2 mb-2"><a href="{{ route('artbytype', $type->id) }}" class="text-dark"><strong>{{ $type->name }}</strong></a></div>
                                    @endforeach
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 mb-2 text-center">
                            <a href="{{ route('contact') }}" class="text-dark"><h6><strong>Contact Us</strong></h6></a>
                        </div>
                        @auth
                            @if(Auth::user()->role == 'admin')
                                <div class="col-md-12 mt-2 mb-2 text-center">
                                    <a href="{{ route('admin-panel') }}" class="text-dark"><h6><strong>Admin Panel</strong></h6></a>
                                </div>
                            @endif
                        @endauth
                        <div class="col-md-12 mt-5 text-center">
                            <a href="#" class="text-body "><i class="fab fa-facebook fa-lg mx-3"></i></a>
                            <a href="#" class="text-body "><i class="fab fa-whatsapp fa-lg mx-3"></i></a>
                            <a href="#" class="text-body "><i class="fab fa-instagram fa-lg mx-3"></i></a>
                            <a href="#" class="text-body "><i class="fab fa-youtube fa-lg mx-3"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>