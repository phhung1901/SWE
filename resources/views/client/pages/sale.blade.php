@extends('client.index')
@section('title', 'SALE - SWE (STREETWEAREAZY)')
@section('content')
    <style>
        .wrapperPage {
            padding: 50px 10px 50px 10px;
            /* background: #fff; */
            margin-top: 0px;
            border-radius: 3px;
        }

        .headingPage {
            margin-bottom: 15px;
        }

        .headingPage .titlet {
            font-size: 35px;
            text-transform: uppercase;
            color: #333333;
            /* padding: 10px 15px; */
            margin: 0px 0px 30px 0px;
            /* background: #dedede; */
            border-radius: 12px;
            /* font-family: 'PN'; */
            font-family: 'SVN-Veneer';
        }

        .content-page * {
            line-height: 1.3;
        }

        @media (max-width: 1023px) {
            .wrapperPage {
                padding: 30px 10px 30px 10px;

            }

        }

    </style>
    <section id="stPages">

        <div class="container">
            <div class="wrapperPage">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 information-entry">
                        <div class="information-blocks main_article bg_w">
                            <div class="headingPage">
                                <h1 class="titlet">SALE</h1>
                            </div>
                            <div class="content-page">
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-10">10%
                                                OFF</a></strong></span></p>
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-15">15%
                                                OFF</a></strong></span></p>
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-20">20%
                                                OFF</a></strong></span></p>
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-30">30%
                                                OFF</a></strong></span></p>
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-40">40%
                                                OFF</a></strong></span><br></p>
                                <p><span style="font-size: 20pt;"><strong><a href="https://swe.vn/collections/sale-50">50%
                                                OFF</a></strong></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
