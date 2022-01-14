@extends('client.index')
@section('title', 'ALL - SWE (STREETWEAREAZY)')
@section('content')
    <section id="stProductPage" class="tamplateSection mt-70 no-js">
        <div class="container">
            <div class="row pro-content">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="slider-image">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <span>
                                        @if ($product_detail)
                                            @php
                                                $image = json_decode($product_detail[0]->image);
                                            @endphp
                                            <a class="fancybox-thumb" data-fancybox="group" data-fancybox-group="group"
                                                rel="group"
                                                href="//product.hstatic.net/1000344185/product/0656_4a7dcb91240c4daaa448d486a9a48b9b_master.jpg">
                                                <img class="product-image-feature"
                                                    src="{{ asset('assets/client/img/' . $image->image1) }}" alt="">
                                            </a>
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">


                            {{-- <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides"
                                    style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">


                                    <li class="product-thumb checked"
                                        style="width: 75px; margin-right: 10px; float: left; display: block;">
                                        <a href="#"
                                            data-image="//product.hstatic.net/1000344185/product/0656_4a7dcb91240c4daaa448d486a9a48b9b_master.jpg"
                                            data-zoom-image="//product.hstatic.net/1000344185/product/0656_4a7dcb91240c4daaa448d486a9a48b9b_master.jpg">
                                            <img src="//product.hstatic.net/1000344185/product/0656_4a7dcb91240c4daaa448d486a9a48b9b_master.jpg"
                                                data-image="//product.hstatic.net/1000344185/product/0656_4a7dcb91240c4daaa448d486a9a48b9b_master.jpg"
                                                alt="" draggable="false">
                                        </a>
                                    </li>


                                </ul>
                            </div> --}}
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#"
                                        tabindex="-1">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next flex-disabled" href="#"
                                        tabindex="-1">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="description-product">
                        <div class="info-desc">
                            <h2>{{ $product_detail[0]->product_name }}</h2>
                            <div class="price pdPrice"><span
                                    id="pro-price">{{ $product_detail[0]->price / 1000 . ',000' }}₫</span></div>
                        </div>
                        <div class="qty-cart">
                            <form id="form-pro" action="#" method="get" class="qty-number-cart">
                                <input type="button" value="-" class="qtyminus" field="quantity">
                                <input type="text" name="quantity" value="1" class="qty">
                                <input type="button" value="+" class="qtyplus" field="quantity">


                                <div class="select-swatch" style="display:table;clear:both">
                                    <div id="variant-swatch-0" class="swatch clearfix" data-option="option1"
                                        data-option-index="0">
                                        <div class="header-s">Kích thước</div>
                                        <div class="select-swap">
                                            @foreach ($product_detail as $item)
                                                <div class="n-sd swatch-element m ">
                                                    <input class="variant-0" id="swatch-0-m" type="radio"
                                                        name="option1">
                                                    <label for="swatch-0-m" class="">{{$item->size}}</label>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                            </form>
                            <div class="link-detail">
                                <a href="javascript:void(0)" class="add-to-c btnAddCart">Thêm vào giỏ</a>
                                <a href="javascript:void(0)" class="add-to-c btnSoldOut" style="display:none">Thêm vào
                                    giỏ</a>
                            </div>
                        </div>
                        <div class="list-pd-dt clearfix">
                            <div class="size-chart">
                                <u><a href="/pages/size-chart">HƯỚNG DẪN CHỌN SIZE</a></u>
                            </div>

                        </div>
                        <div class="description clearfix">
                            <ul>
                                {{$product_detail[0]->description}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="indoor-plant-area pt-50 mg-mb-10">
                        <div class="container">
                            <div class="row">
                                <!--Section Title Start-->
                                <div class="col-12">
                                </div>
                            </div>
                            <div class="indor-plant-product">
                                <div class="row">
                                    <div class="indoor-product-active">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
