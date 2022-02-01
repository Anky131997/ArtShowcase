<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artifice</title>
        <link rel = "icon" href ="{{ asset('storage/faceLogo.png') }}" type = "image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        @yield('css')
    </head>
    <body class="d-flex flex-column h-100">

    @include('includes.sidenav')
        
        <div id="content" class="container-fluid">
            <div class="row">
                @yield('topbar')
                <div class="col-md-12 mb-5" id="showcase" >
                    <div class="row justify-content-center">
                        @yield('content')    
                    </div>
                </div>
                <footer id="footer" class="footer " >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div id="address" class="col-md-6 pl-4 pt-3">
                                <h5 class="text-white mb-3">Artifice Tattoo Studio</h5>
                                <p class="text-white"> <i class="fas fa-map-marker-alt mr-2"></i> Anubhav Complex, Rahara Rd, beside Tara Stores, Rahara, Khardaha, West Bengal 700118</p>
                                <p class="text-white"> <i class="fab fa-whatsapp mr-2"></i> 8274898386 </p>
                                <p class="text-white"> <i class="fas fa-envelope-open mr-2"></i> art2artifice@gmail.com </p>
                            </div>
                            <div id="mobileFooter" class="col-md-6 text-center py-3">
                                <div class="row justify-content-center">
                                    <a id="sidenavCollapse" class="text-body "><i class="fas fa-bars fa-lg ml-1 mr-4"></i></a>
                                    <a href="https://www.youtube.com/channel/UCUaUBv-K1c_hVpoGJz6VU5w" class="text-body "><i class="fab fa-youtube fa-lg mx-4"></i></i></a>
                                    <a href="https://instagram.com/artificetattoostudio" class="text-body "><i class="fab fa-instagram fa-lg mx-4"></i></a>
                                    <a href="https://facebook.com/artificetattoostudio" class="text-body "><i class="fab fa-facebook fa-lg mx-4"></i></a>
                                    <a href="https://wa.me/919007007842" class="text-body "><i class="fab fa-whatsapp fa-lg ml-4 mr-1"></i></a>
                                </div>
                            </div>
                            <div id="pcFooter" style="margin-top:60px;" class="col-md-6 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 mb-3">
                                        <h5 class="text-white">Follow Us on :</h5> 
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https:3facebook.com/artificetattoostudio" class="text-body "><i class="fab fa-facebook fa-lg text-white"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https:3wa.me/919007007842" class="text-body "><i class="fab fa-whatsapp fa-lg text-white"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https:3instagram.com/artificetattoostudio" class="text-body "><i class="fab fa-instagram fa-lg text-white"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://www.youtube.com/channel/UCUaUBv-K1c_hVpoGJz6VU5w" class="text-body "><i class="fab fa-youtube fa-lg text-white"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
        </div>

        
        
        <script src="{{ asset('js/all.min.js') }}" defer></script>
        <script src="{{ asset('js/fontawesome.min.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        

        @yield('script')
    </body>
</html>