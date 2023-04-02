@include('header')
@section('title', 'Bevis | Product')
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                            @foreach ($product as $products)
                                <div class="single-product-wrapper">
                                    <div class="product-img">
                                        <a href=""><img src="{{ asset('images/product/' . $products->images) }}"
                                                alt=""></a>
                                        <a href=""><img class="hover-img" src="" alt=""></a>
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <a href="single-product-details.html">
                                            <h6>{{ $products->productname }}</h6>
                                        </a>                 
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

