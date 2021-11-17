@extends('client.index')
@section('title', 'ABOUT - SWE (STREETWEAREAZY)')
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
                                <h1 class="titlet">ABOUT US</h1>
                            </div>
                            <div class="content-page">
                                <p><span class="s1"><span>📍350 Điện Biên Phủ, Bình Thạnh</span></span></p>
                                <p><span class="s1"></span><span class="s1">📍123 Nguyễn Trãi, Bến
                                        Thành, Quận 1, HCMC</span></p>
                                <p><span class="s1">📍44A Trần Quang Diệu, Quận 3, HCMC</span><br></p>
                                <p><span class="s1">📍</span>26 Lý Tự Trọng, Quận 1, HCMC<br></p>
                                <p><span class="s1">📍<span>TNP Lê Lai (đối diện 90 Lê Lai), Quận 1,
                                            HCMC</span></span></p>
                                <p><span class="s1"><span>📍136 Nguyễn Hồng Đào, Tân Bình, HCMC</span></span>
                                </p>
                                <p>📍235 Phan Trung, Biên Hoà</p>
                                <p><span class="s1">📍</span>Vincom Bà Triệu, Hà Nội</p>
                                <p class="p1">FOUNDED IN 2016 BY 3 YOUNG KIDS ON A MISSION TO MAKE THEIR VISION
                                    OF STREETWEAR COME TO LIFE. SINCE THEN STREETWEAREAZY HAS BECOME A LIFESTYLE BRAND FOR
                                    ALL TO WEAR. AND WE’RE ONLY GETTING STARTED!</p>
                                <p><img src="//file.hstatic.net/1000343889/file/founders_grande.jpg"></p>
                                <p><br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
