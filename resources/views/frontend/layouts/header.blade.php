
<header>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="./index.html"><img src="{{asset('frontend/images/basic/logo.png')}}" class="img-responsive" alt=""/></a>
                            </div>
                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topcart">
                                    <span><i class="fa fa-shopping-cart"></i></span>
                                    <div class="cart-info">
                                        <small>You have <em class="highlight">3 item(s)</em> in your shopping bag</small>
                                        @foreach($catProducts as $cart)
                                        <div class="ci-item">
                                            <img src="{{url('uploads/products/'.$cart->product->image1)}}" width="80" alt=""/>
                                            <div class="ci-item-info">
                                                <h5><a href="./single-product.html">{{$cart->product->name}}</a></h5>
                                                <p>{{$cart->qty}} x ${{calculatediscount($cart->product->price,$cart->product->discount)}}</p>
                                                <div class="ci-edit">
                                                    <a href="#" class="edit fa fa-edit"></a>
                                                    <a href="#" class="edit destroy fa fa-trash" data-cart-id="{{$cart->id}}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="ci-total">Subtotal: $750.00</div>
                                        <div class="cart-btn">
                                            <a href="#">View Bag</a>
                                            <a href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="topsearch">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <form class="searchtop">
                                        <input type="text" placeholder="Search entire store here.">
                                    </form>
                                </div>
                            </div>
                            <!-- Navmenu -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="./index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./index.html">Home - Style 1</a>
                                            <li><a href="./index2.html">Home - Style 2</a>
                                            <li><a href="./index3.html">Home - Style 3</a>
                                            <li><a href="./index4.html">Home - Style 4</a>
                                            <li><a href="./index5.html">Home - Style 5</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown mmenu">
                                        <a href="./categories-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Women</a>
                                        <ul class="mega-menu dropdown-menu" role="menu">
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget <span class="mm-badge-sale">Sale</span></a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus <span class="mm-badge-new">New</span></a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget</a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus</a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget</a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus</a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('shop')}}"  role="button" aria-expanded="false">Shop</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./blog.html">Blog Posts</a>
                                            <li><a href="./blog-single.html">Blog Single</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Get inspired</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#">Nam ipsum est</a>
                                            <li><a href="#">Volutpat</a>
                                            <li><a href="#">In efficitur in</a></li>
                                            <li><a href="#">Accumsan eget</a></li>
                                            <li><a href="#">Odio</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                            <li><a href="#">Phasellus</a></li>
                                            <li><a href="#">Dapibus elit</a></li>
                                            <li><a href="#">Nurna ullamcorper</a></li>
                                            <li><a href="#">Lobortis</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Technology</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#">Nam ipsum est</a>
                                            <li><a href="#">Volutpat</a>
                                            <li><a href="#">In efficitur in</a></li>
                                            <li><a href="#">Accumsan eget</a></li>
                                            <li><a href="#">Odio</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                            <li><a href="#">Phasellus</a></li>
                                            <li><a href="#">Dapibus elit</a></li>
                                            <li><a href="#">Nurna ullamcorper</a></li>
                                            <li><a href="#">Lobortis</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu submenu" role="menu">                                         
                                            <li><a href="contact-1.html">Contact Style 1</a></li>
                                            <li><a href="contact-2.html">Contact Style 2</a></li>
                                            <li><a href="account-information.html"> Account Information </a></li>
                                            <li><a href="my-account.html">My Account</a></li>                                        
                                            <li><a href="cng-pw.html">Change Password</a></li>
                                            <li><a href="address-book.html">Address Books</a></li>
                                            <li><a href="order-history.html">Order History</a></li>
                                            <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                            <li><a href="return.html">Returns Requests</a></li>
                                            <li><a href="newsletter.html">Newsletter</a></li>
                                            <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            @push('script')
                <script>
                    $('.destroy').click(function(e){
                      
                        e.preventDefault();
                        
                        var cartitem=$(this).data('cart-id')
                         console.log("cart id is: ",cartitem);
                        $.ajax({
                            url:'{{route("deletecartitem")}}',
                            method:"delete",
                            data:{
                                CartId:cartitem,
                                _token:'{{ csrf_token() }}'
                            },
                            success:function(response){
                                console.log("item is deleted")
                                location.reload();
                            },
                            error:function(xhr){
                                console.error('Error adding product to cart:', xhr.responseText);
                            }


                        });
                    })
                </script>
            @endpush