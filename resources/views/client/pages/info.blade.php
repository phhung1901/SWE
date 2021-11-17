@extends('client.index')
@section('title', 'INFO - SWE (STREETWEAREAZY)')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <section class="smb_section">
        <div class="wrapper_smb">
            <div class="gird_smb">
                <div class="grid__item_smb grid__item_smb_25">

                    <div class="AccountSidebar">
                        <div class="title_account">
                            <div class="title_account_img">
                                <span id="logo_user"
                                    style="background-image: url(&quot;https://static.smb.foolab.tech/images/c93396df92884cf49d1c605d4256b0ac.jpg&quot;);"></span>
                            </div>
                            <div class="content_account">
                                <h2 class="name_account"> </h2>
                                <p>
                                    Phạm Hưng
                                </p>
                            </div>

                        </div>

                        <div class="AccountContent">
                            <div class="AccountList">
                                <ul class="list-unstyled">
                                    <li class="current">
                                        <a href="/account?view=account_info.smb">
                                            <span>
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span>
                                                Hồ sơ của tôi
                                            </span>
                                        </a>

                                    </li>

                                    <li>
                                        <a href="/account/?view=order.smb">
                                            <span>
                                                <i class="fas fa-file-invoice"></i>
                                            </span>
                                            <span>
                                                Đơn hàng của tôi
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account?view=addresses.smb">
                                            <span> <i class="fas fa-map-marker-alt"></i></span>
                                            <span> Sổ địa chỉ</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=membership.smb">
                                            <span> <i class="fas fa-crown"></i></span>
                                            <span> Hạng thành viên</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=quests.smb">
                                            <span> <i class="fas fa-bars"></i></span>
                                            <span> Nhiệm vụ của tôi</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=vouchers.smb">
                                            <span> <i class="fas fa-tags"></i></span>
                                            <span> Vouchers</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=reviews.smb">
                                            <span><i class="fas fa-lock"></i></span>
                                            <span> Nhận xét của tôi</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=wishlist.smb">
                                            <span><i class="fas fa-heart"></i></span>
                                            <span>Sản phẩm yêu thích</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=notification.smb">
                                            <span><i class="fas fa-bell"></i></span>
                                            <span> Thông báo của tôi</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/?view=reset_password.smb">
                                            <span><i class="fas fa-lock"></i></span>
                                            <span>Đổi mật khẩu</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="grid__item_smb grid__item_smb_75">
                    <div class="accounts">
                        <div class="accounts_title">
                            <h2>
                                Hồ sơ của tôi
                            </h2>
                            <p class="update_info_err">
                                * Cập nhật thông tin lỗi, vui lòng thử lại
                            </p>
                            <p class="data_error">* Có lỗi vui lòng thử lại, hoặc đăng nhập lại</p>
                        </div>
                        <div class="accounts_main">
                            <div class="account">
                                <div class="image_loading" style="display: none;">
                                    <img src="https://file.hstatic.net/1000187248/file/spinner_6dbec68bd28a42718f17704bf42d58e7.gif"
                                        alt="image loading">
                                </div>
                                <div class="account_col">
                                    <div class="account_main">
                                        <label>Họ và tên</label>
                                        <span class="error_input">* Họ và tên quá dài</span>
                                        <input id="fullName" type="text" name="edit" placeholder="Nhập tên đầy đủ của bạn">
                                    </div>
                                </div>

                                <div class="account_col">
                                    <div class="account_main">
                                        <label>Email</label>
                                        <span class="error_input">* Email không hợp lệ</span>
                                        <input id="email" type="text" placeholder="Nhập Email của bạn">
                                    </div>
                                </div>

                                <div class="account_col">
                                    <div class="account_main">
                                        <label>Số điện thoại</label>
                                        <span class="error_input"></span>
                                        <input id="phoneNumber" name="edit" type="text"
                                            placeholder="Nhập số điện thoại của bạn">
                                    </div>
                                </div>
                                <div class="account_col account_col_seeq">
                                    <div class="account_main">
                                        <label>Ngày sinh</label>
                                        <span class="error_input">* Ngày sinh không hợp lệ</span>
                                        <input id="dob" type="text" name="edit" placeholder="Nhập ngày sinh của bạn">

                                    </div>
                                    <div class="account_main">
                                        <label>Giới tính</label>
                                        <div class="genders">
                                            <div class="gender">
                                                <input id="gender_m" type="radio" name="gender" value="m">
                                                <label for="gender_m">
                                                    <span class="sp_input"></span>
                                                    <span class="sp_lable">Nam</span>
                                                </label>
                                            </div>

                                            <div class="gender">
                                                <input id="gender_f" type="radio" name="gender" value="f">
                                                <label for="gender_f">
                                                    <span class="sp_input"></span>
                                                    <span class="sp_lable">Nữ</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account_col">
                                    <div class="account_main">
                                        <label>Ảnh đại diện</label>
                                        <span class="error_input"></span>

                                        <div class="account_avatar">
                                            <div class="avatar_img">
                                                <lable for="avatar">Chọn ảnh</lable>

                                                <input id="avatar" type="file">

                                            </div>

                                            <div id="imgTest" style="display: none;"></div>

                                        </div>

                                    </div>
                                </div>
                                <div class="account_col ">
                                    <div class="account_main col_main_submit">


                                        <button id="cancel_info">
                                            <span>
                                                Huỷ bỏ
                                            </span>
                                            <img src="https://file.hstatic.net/1000187248/file/spinner_6dbec68bd28a42718f17704bf42d58e7.gif"
                                                alt="image loading">
                                        </button>

                                        <button id="submit_info">
                                            <span>
                                                Xác nhận
                                            </span>
                                            <img src="https://file.hstatic.net/1000187248/file/spinner_6dbec68bd28a42718f17704bf42d58e7.gif"
                                                alt="image loading">
                                        </button>


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
