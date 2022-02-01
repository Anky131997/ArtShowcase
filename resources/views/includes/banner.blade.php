                <div class="col-md-12" style="background-image:url({{ asset('storage/banner.jpg') }}); background-repeat:no-repeat; background-size: cover; ">
                    <div class="row">
                        <div class="col-md-12 mb-5 pt-4 px-4">
                            <a id="sidebarCollapse" >
                                <i class="fas fa-bars fa-2x text-white"></i>
                            </a>
                            <a href="/"> <img src="{{ asset('storage/faceIcon.png') }}" id="topLogo" width=7% height=auto alt="" class="img-fluid float-left "></a>
                            <div class="float-right" role="group" aria-label="Basic example">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-white"><i class="fas fa-home"></i> <strong>Home</strong> </a>
                                        <a href="{{ url('/upload') }}" class="text-white mx-4"><i class="fas fa-upload"></i> <strong>Upload</strong> </a>
                                        <a id="navbarDropdown" class="text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>        
                                    @else
                                        <a href="{{ route('login') }}" class="text-white mx-4"><i class="fas fa-sign-in-alt"></i> <strong>Login</strong> </a>  
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="text-white"><i class="fas fa-paper-plane"></i> <strong>Register</strong></a>
                                        @endif
                                    @endauth         
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mt-2 text-center">
                            <h2 class="text-white" style="font-family:backToBack;">Artifice</h2>
                            <h5 class="text-white mt-3">Do Something Creative Everyday</h5>
                        </div>
                        <div class="col-md-12 mt-5 mb-5 text-center">
                            <a href="#showcase" class="btn text-white" style="background-color:#00838f;">Take a Look at Our Work</a>
                        </div>
                    </div>
                </div>