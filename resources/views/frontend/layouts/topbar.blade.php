<div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="tb_left pull-left">
                                    <p>Welcome to our online store !</p>
                                </div>
                                <div class="tb_center pull-left">
                                    <ul>
                                        <li><i class="fa fa-phone"></i> Hotline: <a href="#">(+800) 2307 2509 8988</a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="#">online support@smile.com</a></li>
                                    </ul>
                                </div>
                                <div class="tb_right pull-right">
                                    <ul>
                                        <li>
                                            <div class="tbr-info">
                                                <span>Account <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="my-account.html">My Account</a>
                                                    <a href="#">My Wishlist</a>
                                                    <a href="#">Checkout</a>
                                                    @if(Auth::user())
                                                    <a href="{{route('userlogout')}}">Logout</a>

                                                    @else
                                                    <a href="{{route('redirect')}}">Login</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span><img src="{{asset('frontend/images/basic/flag1.png')}}" alt=""/>&nbsp;English <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="#"><img src="{{asset('frontend/images/basic/flag1.png')}}" alt=""/>English</a>
                                                    <a href="#"><img src="{{asset('frontend/images/basic/flag2.png')}}" alt=""/>French</a>
                                                    <a href="#"><img src="{{asset('frontend/images/basic/flag3.png')}}" alt=""/>German</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span>US Dollar <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="#">&euro; Euro</a>
                                                    <a href="#">&pound; Pound</a>
                                                    <a href="#">&yen; Yen</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>