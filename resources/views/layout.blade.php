<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TuneSource- Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('Image/core-img/favicon.ico') }}"">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">


                        <!-- Menu -->
                        <div class="classy- TuneSource">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span>
                                    </div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <!-- Logo -->
                                        <a class="logogo" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                            <h1><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">
                                                    Ccao Nguyen <i class="fas fa-bars"
                                                        style="text-align: center"></i></span></h1>
                                        </a>
                                        <li><a  href="{{route('index')}}">Home</a></li>
           
                                        <li><a href="{{ asset('product') }}">Product</a></li>



                                        

                                        <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <div class="form-group">
                                                    <li><a href="index.html">Balad</a></li>
                                                    <li><a href="index.html">rock</a></li>
                                                    <li><a href="index.html">Country</a></li>
                                            </ul>

                                        </li>

                                        <li><a href="{{ asset('news') }}">News</a></li>






                                    </ul>
                         
                                        <!-- Login/Register & Cart Button -->
                                        <div class="login-register-cart-button d-flex align-items-center">
                                            <!-- Login/Register -->
                                            <div class="login-register-btn mr-50">
                                                <a href="{{ asset('login_url') }}" id="loginBtn">Login</a>
                                            </div>
                                            <div class="login-register-btn mr-50">
                                                <a href="{{ asset('register_url') }}" id="loginBtn"> Register</a>
                                            </div>
                                        </div>
                                      
                                        <div class="login-register-cart-button d-flex align-items-center">
                                            <div class="login-register-btn mr-50">
                                                <a href="{{ asset('logout') }}" id="loginBtn">Logout</a>
                                            </div>
                                        </div>








                                    <!-- ======= Search Form ======= -->


                                </div>
                            </div><!-- End Search Form -->
                        </div>
                        </ul>


                </div>
            </div>
            <!-- Nav End -->

        </div>
        </nav>
        </div>
        </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->









    @yield('content')

  

</body>

</html>
