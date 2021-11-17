<header class="no-index">
    <div class="container">
        <div class="row row-ibl mid">
            <!-- <a class="cart-head visible-xs" href="/cart" style="position:relative;">
                <img src="https://theme.hstatic.net/1000319111/1000411564/14/cart-icon.png?v=1032" alt="" title="">
                <span class="hd-cart-count">1</span>
            </a> -->
            <div class="col-md-2 col-xs-12 centermb">
                <a class="logo" href="{{route('index')}}" title="">
                    <img
                        src="https://file.hstatic.net/1000344185/file/uoemj1xih2cluupbe1vw-kvjkaw1umbarw_b4167849b7b34a4687658886e20ddd0e.gif">
                </a>
            </div>
            <div class="col-md-10 col-xs-12 text-right hidden-xs hidden-sm">
                <nav class="main-nav abc">
                    <ul id="menu-main-menu" class="">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="{{route('index')}}">HOME</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="{{route('top')}}">TOPS</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/outerwear">OUTERWEAR</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/bottoms">BOTTOMS</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/accessories">ACCESSORIES</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="{{route('sale')}}">SALE</a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-10">10% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-15">15% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-20">20% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-30">30% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-40">40% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-50">50% OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-60">60%OFF</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="{{route('size')}}">SIZE CHART</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="{{route('about')}}">ABOUT US</a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/pages/chinh-sach-doi-tra">CHÍNH SÁCH ĐỔI TRẢ</a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="li_logout">
                            <a href="{{route('info')}}">chào, </a>
                            <div class="logout_header"> <a href="/account/logout">Đăng xuất</a> </div>
                        </li>
                    </ul>
                </nav>
                <div class="search" id="sea">
                    <button type="button" data-show="#search" id="search-des">
                        <img src="{{asset('/assets/client/img/pic-search.png')}}" alt="" title="">
                    </button>
                    <div class="ct" id="search">


                        <form class="search-fr" action="/search">
                            <div class="form-input">
                                <input name="q" id="search" placeholder="Tìm kiếm..." value="" type="text"
                                    required="required">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="search">
                    <a class="cart-head" href="{{route('cart')}}" style="position:relative;">
                        <img src="https://theme.hstatic.net/1000319111/1000411564/14/cart-icon.png?v=1032" alt=""
                            title="">
                        <span class="hd-cart-count">1</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="sub-head">
        <button class="snav-btn">
            <i></i>
            <i></i>
            <i></i>
        </button>
        <div class="main">
            <div class="bar">
                <a class="nv-logo" href="/" title="">
                    <img style="max-width: 90px;" src="//theme.hstatic.net/1000344185/1000478812/14/logo.png?v=465" alt="">
                </a>
                <form class="search-fr" action="/search">
                    <input name="q" id="search" placeholder="Tìm kiếm..." value="" type="text" required="required">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>		
                </form>
                <nav>
                    <ul id="menu-main-menu" class="">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/new-arrivals">HOME</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/tops">TOPS</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/outerwear">OUTERWEAR</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/bottoms">BOTTOMS</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/collections/accessories">ACCESSORIES</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><button type="button" class="nav-drop"></button>
                            <a href="/pages/sale">SALE</a>
                            <ul class="sub-menu">
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-10">10% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-15">15% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-20">20% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-30">30% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-40">40% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-50">50% OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/collections/sale-60">60%OFF</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                





                            </ul>
                        </li>
                        

                        
                        
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">
                            <a href="/pages/size-chart">SIZE CHART</a>
                        </li>

                        

                        
                        
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><button type="button" class="nav-drop"></button>
                            <a href="/pages/about-us">ABOUT US</a>
                            <ul class="sub-menu">
                                
                                
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="/pages/chinh-sach-doi-tra">CHÍNH SÁCH ĐỔI TRẢ</a>
                                    <ul class="sub-menu">
                                        

                                    </ul>

                                </li>
                                
                                





                            </ul>
                        </li>
                        

                        

                        
                        
                        
                        <li> <a href="/account?view=account_info.smb">Chào,  </a> </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page ">  <a href="/account/logout">Đăng xuất</a> </li>
                        
                        
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div> -->
</header>