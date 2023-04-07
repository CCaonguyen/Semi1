@extends('layout')
@section('content')
<!-- Stylesheet -->
<link rel="stylesheet" href="{{asset('css/news.css')}}">

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(Image/anh/17.jpg);">
        <div class="bradcumbContent">
            
            <h2>News</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                     @foreach ( $news as $value )

                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        {{-- @foreach ( $news as $key => $value ) --}}
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <a href="#"><img src="{{asset('Image/anh/'.$value->images)}}" alt=""></a>
                            {{-- sua? lai link anh cho nay --}}
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>June ‘18</span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title">{{$value->heading}}</a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#">>{{$value->author}}</a></p>
                                <p class="tags">in<a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Comments</a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p>
                                {{$value->paraphase}}
                                </p>
                        </div>
                    </div>
                     @endforeach

                   

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                
                                
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="blog-sidebar-area">

                       

                       

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="Image/anh/23.jpg" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="single-widget-area mb-30">
                            <a href="#"><img src="Image/anh/11.jpg" alt=""></a>
                        </div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/1.jpg" alt=""></a>
</div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/5.jpg" alt=""></a>
</div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/7.jpg" alt=""></a>
</div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/21.jpg" alt=""></a>
</div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/26.jpg" alt=""></a>
</div>
 <!-- Widget Area -->
 <div class="single-widget-area mb-30">
    <a href="#"><img src="Image/anh/17.jpg" alt=""></a>
</div>
</div>
<!-- Widget Area -->
<div class="single-widget-area mb-30">
   <a href="#"><img src="Image/anh/28.jpg" alt=""></a>
</div>
<!-- Widget Area -->
<div class="single-widget-area mb-30">
   <a href="#"><img src="Image/anh/37.jpg" alt=""></a>
</div>
<!-- Widget Area -->
<div class="single-widget-area mb-30">
   <a href="#"><img src="Image/anh/45.jpg" alt=""></a>
</div>
<!-- Widget Area -->
<div class="single-widget-area mb-30">
   <a href="#"><img src="Image/anh/41.jpg" alt=""></a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
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


    
    
</body>

</html>