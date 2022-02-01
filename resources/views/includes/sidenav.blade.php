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
                            <img src="{{ asset('storage/facelogo.png') }}" id="sidenavImage" alt="" class="img-fluid mt-3">
                        </div>
                        <div class="col-md-12 text-center">
                            <h5 class="mb-3"><strong>Artifice</strong></h5>
                            <p>Do Something Creative Everyday</p>
                        </div>
                        <div class="col-md-12 mt-5 mb-2 text-center">
                            <a href="{{ url('/') }}" class="text-dark"><h6><strong>Home</strong></h6></a>
                        </div>
                        <div class="col-md-12 mt-2 mb-2 text-center">
                            <a href="#collapseExample" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-dark"><h6><strong>Tattoos</strong> <i class="fas fa-angle-down float-right"></i></h6></a>
                            <div class="collapse" id="collapseExample">
                                <div class="row">
                                    <div class="col-md-12 mt-2 mb-2"><a href="{{ route('bigTattoos') }}" class="text-dark"><strong>Big Tattoo</strong></a></div>
                                    <div class="col-md-12 mt-2 mb-2"><a href="{{ route('smallTattoos') }}" class="text-dark"><strong>Small Tattoo</strong></a></div>
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
                            <a href="https:3facebook.com/artificetattoostudio" class="text-body "><i class="fab fa-facebook fa-lg mx-3"></i></a>
                            <a href="https:3wa.me/919007007842" class="text-body "><i class="fab fa-whatsapp fa-lg mx-3"></i></a>
                            <a href="https:3instagram.com/artificetattoostudio" class="text-body "><i class="fab fa-instagram fa-lg mx-3"></i></a>
                            <a href="https://www.youtube.com/channel/UCUaUBv-K1c_hVpoGJz6VU5w" class="text-body "><i class="fab fa-youtube fa-lg mx-3"></i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>