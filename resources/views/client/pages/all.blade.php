@extends('client.index')
@section('title', 'ALL - SWE (STREETWEAREAZY)')
@section('content')
    <div class="shop-area mb-70 mt-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="shop-layout">
                        <!--Breadcrumb One Start-->

                        <!--Breadcrumb One End-->
                        <!--Grid & List View Start-->
                        <div class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                            <div class="grid-list-option">
                                <ul class="nav">
                                    <li id="tactive_1" class="active">
                                        <a data-toggle="tab" href="#grid"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li id="tactive_2">
                                        <a data-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                                    </li>
                                    <li class="filter-container text-xs-center">
                                        <a class="filter-count filter-by" href="">
                                            <span>
                                                Lọc
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!--Toolbar Short Area Start-->
                            <div class="toolbar-short-area d-md-flex align-items-center">
                                <div class="toolbar-shorter ">
                                    <label>Sắp xếp:</label>
                                    <!-- <select id="sort"
                                            class="wide sort-by custom-dropdown__select custom-dropdown__select--white"
                                            style="display: none;">
                                            <option value="manual">Sản phẩm nổi bật</option>
                                            <option value="price-ascending">Giá: Tăng dần</option>
                                            <option value="price-descending">Giá: Giảm dần</option>
                                            <option value="title-ascending">Tên: A-Z</option>
                                            <option value="title-descending">Tên: Z-A</option>
                                            <option value="created-ascending">Cũ nhất</option>
                                            <option value="created-descending">Mới nhất</option>
                                            <option value="best-selling">Bán chạy nhất</option>
                                        </select> -->
                                    <div class="nice-select wide sort-by custom-dropdown__select custom-dropdown__select--white"
                                        tabindex="0"><span class="current">Sản phẩm nổi bật</span>
                                        <ul class="list">
                                            <li data-value="manual" class="option selected">Sản phẩm nổi bật</li>
                                            <li data-value="price-ascending" class="option">Giá: Tăng dần</li>
                                            <li data-value="price-descending" class="option">Giá: Giảm dần</li>
                                            <li data-value="title-ascending" class="option">Tên: A-Z</li>
                                            <li data-value="title-descending" class="option">Tên: Z-A</li>
                                            <li data-value="created-ascending" class="option">Cũ nhất</li>
                                            <li data-value="created-descending" class="option">Mới nhất</li>
                                            <li data-value="best-selling" class="option">Bán chạy nhất</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Toolbar Short Area End-->
                        </div>
                        <!--Grid & List View End-->
                        <!--Shop Product Start-->
                        <div class="shop-product">
                            <div id="myTabContent-2" class="tab-content">
                                <div id="grid" class="tab-pane fade show active">
                                    <div class="product-grid-view">
                                        <div class="row">
                                            @if ($all_product)
                                                @foreach ($all_product as $item)
                                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                                        <div class="single-product mb-10">
                                                            <div class="product-img img-full">
                                                                <a href="/products/skeleton-tee-washed-black">

                                                                    {{-- <img class="visible-xs lazyload"
                                                                    src="//product.hstatic.net/1000344185/product/7701_ee8c7b2bf2de40c7bfe40825d0efd112_medium.jpg"
                                                                    data-src="//product.hstatic.net/1000344185/product/7701_ee8c7b2bf2de40c7bfe40825d0efd112_medium.jpg"
                                                                    alt=""> --}}
                                                                    @php
                                                                        $image = json_decode($item['image']);
                                                                    @endphp
                                                                    <img class="hidden-xs lazyload"
                                                                        src="{{ asset('assets/client/img/' . $image->image1) }}"
                                                                        alt="">
                                                                    <img class="pro-img2 hidden-xs"
                                                                        src="{{ asset('assets/client/img/' . $image->image2) }}"
                                                                        alt="">
                                                                </a>

                                                                <span class="onsale">-10%</span>

                                                                <a href="#" class="product-action btn-quickview-1"
                                                                    data-handle="/products/skeleton-tee-washed-black">
                                                                    <ul>
                                                                        <li>XEM NHANH</li>

                                                                    </ul>
                                                                </a>
                                                            </div>
                                                            <div class="product-content">
                                                                <h2><a
                                                                        href="/products/skeleton-tee-washed-black">{{ $item['product_name'] }}</a>
                                                                </h2>
                                                                <div class="product-price">
                                                                    @if ($item['discount'] > 0)
                                                                        <span
                                                                            class="price">{{ $item['price'] / 1000 . ',000' }}₫</span>
                                                                        <span
                                                                            class="regular-price">{{ ($item['price'] * (1 - $item['discount'])) / 1000 . ',000' }}₫</span>
                                                                    @else
                                                                        <span
                                                                            class="regular-price">{{ $item['price'] / 1000 . ',000' }}₫</span>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            {{-- <div class="size-avai clearfix">
                                                            <span class="title">Kích thướt: </span>
                                                            <span class="size-variant ">
                                                                S</span>
                                                            <span class="size-variant ">
                                                                M</span>
                                                            <span class="size-variant ">
                                                                L</span>
                                                            <span class="size-variant ">
                                                                XL</span>
    
                                                        </div> --}}

                                                        </div>

                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>


                                    </div>
                                </div>
                                <!--Pagination Start-->
                                <div class="product-pagination">


                                    <ul id="pagination" class="">

                                        <li class="pagination_next hidden"><span><i
                                                    class="fa fa-angle-double-left"></i></span></li>







                                        <li class="active"><span>1</span></li>




                                        <li>
                                            <a href="/collections/tops?page=2" title="">2</a>
                                        </li>




                                        <li><a href="/collections/tops?page=2" title="Next »"><i
                                                    class="fa fa-angle-double-right"></i></a></li>


                                    </ul>




                                </div>
                                <!--Pagination End-->
                            </div>
                        </div>
                        <!--Shop Product End-->
                    </div>
                </div>
            </div>
        </div>

        <div class="visible-md visible-lg visible-xs visible-sm" style="">

            <div id="filters-dialog" class="container-dialog filters-open hide cus_mb_col">


                <a href="javascript:void(0)" class="" id="xxxf">
                    <i class="icon icon-close-modal icon-right " itx-filters-clean-colors=""></i>
                </a>
                <div class="filters-content">
                    <div class="content">
                        <ul class="filter-sections filter-byt  filter-by-hide">




                            <li class="section ">
                                <a href="javascript:void(0)">
                                    <span>
                                    </span>
                                    <span class="toggler">+</span>
                                </a>
                                <!-- ngIf: filtersCtrl.isActive('characteristics') -->
                                <div class="filter view_grid">

                                    <div class="layered-content filter-price">

                                        <ul class="check-box-list notStyle " id="ttt">
                                            <li>
                                                <input type="checkbox" id="p1" name="cc" data-price="(price:product<=)">
                                                <label for="p1">
                                                    <span class="button icon icon-check"></span>

                                                    <span class="button"></span>
                                                    Nhỏ hơn 0₫
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="p2" name="cc"
                                                    data-price="((price:product>)&amp;&amp;(price:product<=))">
                                                <label for="p2">
                                                    <span class="button icon icon-check"></span>

                                                    <span class="button"></span>
                                                    0₫ - 0₫
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="p3" name="cc"
                                                    data-price="((price:product>)&amp;&amp;(price:product<=))">
                                                <label for="p3">
                                                    <span class="button icon icon-check"></span>

                                                    <span class="button"></span>
                                                    0₫ - 0₫
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="p4" name="cc"
                                                    data-price="((price:product>)&amp;&amp;(price:product<=))">
                                                <label for="p4">
                                                    <span class="button icon icon-check"></span>

                                                    <span class="button"></span>
                                                    0₫ - 0₫
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="p5" name="cc" data-price="(price:product>=)">
                                                <label for="p5">
                                                    <span class="button icon icon-check"></span>

                                                    <span class="button"></span>
                                                    Lớn hơn 0₫
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end ngIf: filtersCtrl.isActive('characteristics') -->
                            </li>





                        </ul>

                        <div class="filter-actions ">
                            <div class="col-xs-12 text-md-right">
                                <button id="clear_final" class="btn btn-default btn-sm ng-binding">XÓA LỌC</button>
                                <button id="submit_final" class="btn btn-primary btn-sm ">LỌC</button>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
