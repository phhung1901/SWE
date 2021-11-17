@extends('client.index')
@section('title', 'CART - SWE (STREETWEAREAZY)')
@section('content')
    <section id="stCart">

        <div class="cart-page mt-50 mb-50">

            <div class="container">
                <div class="process">
                    <h1>Giỏ hàng</h1>
                </div>
                <div class="page-content not-item text-center">
                    <div class="img text-center">
                        <img src="//theme.hstatic.net/1000344185/1000478812/14/empty_cart.png?v=465"
                            alt="Không có sản phẩm nào trong giỏ hàng của bạn" />
                    </div>
                    <p>
                        Không có sản phẩm nào trong giỏ hàng của bạn
                    </p>
                    <div class="ctnBuy button-action">
                        <a href="{{route('index')}}" class="btn btn-outline closeCartLine">Tiếp tục mua hàng </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
