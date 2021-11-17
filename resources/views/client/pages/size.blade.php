@extends('client.index')
@section('title', 'SIZE - SWE (STREETWEAREAZY)')
@section('content')
    <style>
        .wrapperPage {
            padding: 50px 10px 50px 10px;
            background: #fff;
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
                                <h1 class="titlet">SIZE CHART</h1>
                            </div>
                            <div class="content-page">
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/tee-sizechart-2021_f82e616fd1aa4a24bc2dd6490468685c_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/ls-tee-sizechart_89d55273a4b74ea4815450cf6994d6fd_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/nylon-pants-sizechart_913ceb06c49b473f93f0498e76d006c1_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/cargo-shorts-sizechart_9a46df4fdf96477b852a5b97b8875eb3_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/nylon-shorts-sizechart_183d279008304c62a11f0c2bb58f0217_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/hoodie-sizechart-1_57e97fa6fc31436eaeb15e17bcaa9cb2_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/hoodie-sizechart-2_49e4a7cf745e4d83b90fcc873e29c6f0_grande.jpg">
                                </p>
                                <p style="text-align: center"><img
                                        src="//file.hstatic.net/1000344185/file/sizechart-mono-jacket_5d4a1623bbd44fc78198edbc2d378c7b_grande.jpg">
                                </p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
