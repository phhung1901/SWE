@extends('client.index')
@section('title', '- SWE (STREETWEAREAZY)')
@section('content')
    <div id="fullpage">
        <section class="section">
            <div id="slider2" class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage"></div>
                </div>
            </div>
        </section>
    </div>

    <div class="indoor-plant-area pt-50 mg-mb-10">
        <div class="container">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12">
                    <div class="section-title text-center mb-50">
                        <h3>NEW ARRIVALS</h3>
                    </div>
                </div>
            </div>

            <div class="indor-plant-product">
                <div class="row">
                    <div class="indoor-product-active">
                        <!--Single Product Start-->
                        @if ($new_product)
                            @foreach ($new_product as $item)
                                <div class="col-xs-6 col-md-4">

                                    <div class="single-product mb-10">
                                        <div class="product-img img-full">
                                            <a href="{{route('product_detail', [$item->id])}}">

                                                <!-- <img class="visible-xs lazyload" src="./img/01.jpg" data-src="//product.hstatic.net/1000344185/product/9888_c736f97d18dc458396dd464eca6b8fa5_medium.jpg" alt=""> -->
                                                @php
                                                    $image = json_decode($item['image']);
                                                @endphp
                                                <img class="hidden-xs lazyload" src="{{asset('assets/client/img/'.$image->image1)}}">
                                                <img class="pro-img2 hidden-xs" src="{{asset('assets/client/img/'.$image->image2)}}">

                                            </a>

                                            <span class="onsale">-20%</span>

                                            <a href="#" class="product-action btn-quickview-1"
                                                data-handle="/products/checkered-jacket-black">
                                                <ul>
                                                    <li>ADD TO CART</li>

                                                </ul>
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="/products/checkered-jacket-black">{{$item->product_name}}</a></h2>
                                            <div class="product-price">
                                                <div class="price-box">
                                                    @if ($item['discount'] > 0)
                                                        <span class="price">{{($item['price']/1000).",000"}}₫</span>
                                                        <span class="regular-price">{{($item['price'] * (1-$item['discount'])/1000).",000"}}₫</span>
                                                    @else
                                                        <span class="regular-price">{{($item['price']/1000).",000"}}₫</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                        <!--Single Product End-->
                    </div>

                    <center class="view-all-product">
                        <a href="{{ route('all') }}">View all</a>
                    </center>

                </div>
            </div>
        </div>

    </div>
@endsection
