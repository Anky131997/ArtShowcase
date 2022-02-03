                    <div class="col-md-12 mb-5 pt-4 px-4" id="topbar">
                        <div class="float-left">
                            <div class="row">
                                <a id="sidebarCollapse" class="pl-4 pr-4"><i class="fas fa-bars fa-lg mt-2"></i></a>
                                <a href="{{ route('welcome') }}" class=""><h2 class="pt-1" style="font-family:backToBack; color:#EAE7DC;">Artgalore</h2></a>
                            </div>
                        </div>
                        
                        <a href="/"> <img src="{{ asset('storage/faceIcon2.png') }}" id="topLogo" width=7% height=auto alt="" class="img-fluid float-left "></a> 
                        <div class="float-right" role="group" aria-label="Basic example">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}" class="" style="color:#EAE7DC;"><i class="fas fa-home"></i> <strong>Home</strong> </a>
                                        <a href="{{ url('/upload') }}" class="mx-4" style="color:#EAE7DC;"><i class="fas fa-upload"></i> <strong>Upload</strong> </a>
                                        <a id="navbarDropdown" style="color:#EAE7DC;" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <img src="{{ asset('storage/'. Auth::user()->image) }}" width=40px; height=40px; id="imgborder" style="border-radius:50%;" alt="">
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
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
                                        <a href="{{ route('login') }}" class="text-white"><i class="fas fa-sign-in-alt"></i> <strong>Login</strong> </a>
                                        <a href="@if (Route::has('register')) {{ route('register') }} @else {{ url('/upload') }} @endif" class="text-white mx-4"><i class="fas fa-upload"></i> <strong>Upload</strong> </a>
                                    @endauth         
                                @endif
                        </div>
                    </div>