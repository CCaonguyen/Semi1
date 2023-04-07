@extends('layout')
 @section('content')
 
     <!-- Stylesheet -->
     <link rel="stylesheet" href="{{ asset('css/albums.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shoping.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chao.css') }}">
 

     <!-- ##### Breadcumb Area Start ##### -->
     <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(Image/anh/17.jpg);">
         <div class="bradcumbContent">
             <h2>Latest Albums</h2>
         </div>
     </section>
     <!-- ##### Breadcumb Area End ##### -->

     <!-- ##### Album Catagory Area Start ##### -->
     <section class="album-catagory section-padding-100-0">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <div class="col-10 agileits_search">
                                <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search image..." id="keyword">
                                        
                                                <button class="btn my-2 my-sm-0" type="submit">Search</button>
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                         </div>
                         <div class="mx-auto pull-right" style="position:absolute; right:246px"> 
                                                        
                             @if (session('sucmessage'))
                                 <span >
                                    <strong>{{ session('sucmessage') }}</strong></span>
                             @endif
                             
                         </div>

                     </div>
                 </div>

                 

                   
     <!-- ##### Album Catagory Area End ##### -->
     
     <!-- ##### Buy Now Area Start ##### -->
     <div class="oneMusic-buy-now-area mb-100">
         <div class="container">
             <div class="row">
                                    @foreach ( $product as $value )
                                    <div class="col-xl-3">
                                        {{-- @foreach ( $product as $key => $value ) --}}
                                            <div class="single--item--product">
                                                <div class="img-single-item">
                                                    <img src="BevisSneaker/{{$value ->images}}" style="width: 100%; border-radius: 5px;" >
                                                </div>
                                                <a class="btnBuy" style="text-align: center" href={{"detail/".$value['productid']}}>BUY NOW</a>
                                                <hr style="border: 1px dashed white;">
                                                <h4 style="text-align: center;"><a href={{"detail/".$value['productid']}}>{{$value->productname}}</a></h4>
                                                <hr style="border: 1px dashed white;">
                                                <h5 style="text-align: center; color: #ff5f17;">${{$value ->price}}</h5>
                                            </div>

                                            {{-- JS --}}
                                            {{-- <script>
                                                function buynow()
                                                {
                                                    location.assign("detail")
                                                }
                                            </script> --}}
                                            {{-- JS --}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </div>

        <footer class="footer-area">
            <div class="container">
                <div class="row d-flex flex-wrap align-items-center">
                    <div class="col-12 col-md-6">
                        <a href="#"><img src="{{ asset('BevisSneaker/images/logo.png') }}" alt=""></a>
    
                        <p class="copywrite-text"><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <a>Ccao Nguyen</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
    
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <ul>
                                <li><a href="{{ asset('') }}">Home</a></li>
                                <li><a href="{{ asset('albums') }}">Albums</a></li>
                                <li><a href="{{ asset('news') }}">News</a></li>
    
                                <li><a href="{{ asset('shoping') }}">Shoping</a></li>
                                <li> <a href="{{ asset('login_url') }}" id="loginBtn">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area Start ##### -->
    
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('js/plugins/plugins.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('js/active.js') }}"></script>
    
    </body>
    
    </html>
    
