@extends('client.index')
@section('title', 'ACCESSORIES - SWE (STREETWEAREAZY)')
@section('content')
    <section id="register_smb">

        <form action="{{ route('client.login') }}" method="POST">
            @csrf
            <div class="wrapper_smb">
                <div class="gird_smb">
                    <div class="grid__item_smb">
                        <div class="logins">
                            <div class="logins_title">
                                <h2>
                                    Đăng nhập
                                </h2>

                                <!-- <p class="logins_error">* Đăng nhập thất bại, vui lòng thử lại</p> -->
                            </div>
                            @if (session()->has('noti'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ session('noti') }}</strong>
                                </div>
                            @endif
                            <div class="logins_main">

                                <div class="login_col login_col_phone">
                                    <div class="login_main">
                                        <label>Email</label>
                                        <!-- <span>*Số điện thoại không đúng định dạng</span> -->
                                        <input name="email" id="email" type="email" placeholder="Nhập email của bạn ....">
                                        <br>
                                        <label>Password</label>
                                        <input id="password" name="password" type="password">
                                    </div>

                                    <!-- <div id="recaptcha_container">
                                        <div>
                                            <div style="width: 304px; height: 78px;">
                                                <div><iframe title="reCAPTCHA"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcMZR0UAAAAALgPMcgHwga7gY5p8QMg1Hj-bmUv&amp;co=aHR0cHM6Ly9zd2Uudm46NDQz&amp;hl=vi&amp;type=image&amp;v=yZguKF1TiDm6F3yJWVhmOKQ9&amp;theme=light&amp;size=normal&amp;cb=w8ybteso4f5d"
                                                        width="304" height="78" role="presentation"
                                                        name="a-hu8kwtelxdu1" frameborder="0" scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                </div><textarea id="g-recaptcha-response"
                                                    name="g-recaptcha-response" class="g-recaptcha-response"
                                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                            </div><iframe style="display: none;"></iframe>
                                        </div>
                                    </div> -->

                                    <button type="submit" class="verify_next" id="login_submit_phone">

                                        <span>Tiếp tục</span>

                                        {{-- <img src="https://file.hstatic.net/1000187248/file/spinner_6dbec68bd28a42718f17704bf42d58e7.gif"
                                        alt="image loading"> --}}
                                    </button>
                                </div>

                                <!-- <div class="login_col login_col_code">
                                    <div class="login_main">
                                        <label>Mã code đã được gửi đến điện thoại của bạn, vui lòng kiểm tra</label>
                                        <span>*Mã code phải có 6 ký tự</span>
                                        <input id="code" type="text" placeholder="Vui lòng nhập mã code">
                                        <button type="submit" class="verify_next" id="login_submit_code">
                                            <span>Tiếp tục</span>
                                            <img src="https://file.hstatic.net/1000187248/file/spinner_6dbec68bd28a42718f17704bf42d58e7.gif"
                                                alt="image loading">
                                        </button>

                                        <button type="submit" class="verify_prev" id="login_submit_rolback">
                                            <span>Quay lại</span>
                                        </button>

                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </section>
@endsection
