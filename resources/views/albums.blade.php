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
                                        <input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search videos..." id="keyword">
                                        
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
           
            @foreach($audio as $audio)
                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{ $audio->Image }}">
                           
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>{{$audio->amount}}</p>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>{{ $audio->name_product }}</h5>
                            </a>

                            <audio preload="auto" controls>
                                <source src="{{ $audio->link }}">
                            </audio>
                            
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="{{ asset('shoping')}}">
                                <fieldset>
                                
                                    
                                    <input type="submit" name="submit" value="Add to cart" class="button btn"   />
                                    
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            

                 
                 <!-- ##### Buy Now Area End ##### -->

                 <!-- ##### Add Area Start ##### -->
                 <div class="add-area mb-100">
                     <div class="container">
                         <div class="row">
                             <div class="col-12">
                                 <div class="adds">
                                     <a href="#"><img src="Image/anh/12.jpg" alt=""></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- ##### Add Area End ##### --> 

                 <!-- ##### Song Area Start ##### -->
                 <div class="one-music-songs-area mb-70">
                     <div class="container">
                         <div class="row">

                             <!-- Single Song Area -->
                             <div class="col-12">
                                 <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                                     <div class="song-thumbnail">
                                         <img src="Image/anh/4.jpg" alt="">
                                     </div>
                                     <div class="song-play-area">
                                         <div class="song-name">
                                             <p>01. Ccao Nguyen </p>
                                         </div>
                                         <audio preload="auto" controls>
                                             <source src="audio/1.mp3">
                                         </audio>
                                     </div>
                                 </div>
                             </div>

                             <!-- Single Song Area -->
                             <div class="col-12">
                                 <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                                     <div class="song-thumbnail">
                                         <img src="Image/anh/11.jpg" alt="">
                                     </div>
                                     <div class="song-play-area">
                                         <div class="song-name">
                                             <p>02. Duc Phuc</p>
                                         </div>
                                         <audio preload="auto" controls>
                                             <source src="audio/2.mp3">
                                         </audio>
                                     </div>
                                 </div>
                             </div>

                             <!-- Single Song Area -->
                             <div class="col-12">
                                 <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                                     <div class="song-thumbnail">
                                         <img src="Image/anh/48.jpg" alt="">
                                     </div>
                                     <div class="song-play-area">
                                         <div class="song-name">
                                             <p>03. Jack </p>
                                         </div>
                                         <audio preload="auto" controls>
                                             <source src="audio/18.mp3">
                                         </audio>
                                     </div>
                                 </div>
                             </div>

                             <!-- Single Song Area -->
                             <div class="col-12">
                                 <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                                     <div class="song-thumbnail">
                                         <img src="Image/anh/30.jpg" alt="">
                                     </div>
                                     <div class="song-play-area">
                                         <div class="song-name">
                                             <p>04.Son Tung MTP</p>
                                         </div>
                                         <audio preload="auto" controls>
                                             <source src="audio/4.mp3">
                                         </audio>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
                 <!-- ##### Song Area End ##### -->






                 </body>

                 </html>
