
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
                                        @php
                                        $catProducts=cartdata();
                                        @endphp 
                                       
                                        <small>You have <em class="highlight">{{$catProducts ? count($catProducts) : 0}} item(s)</em> in your shopping bag</small>
                                        @if($catProducts && count($catProducts)>0)
                                        @foreach($catProducts as $cart)
                                        <div class="ci-item">
                                            <img src="{{url('uploads/products/'.$cart->product->image1)}}" width="80" alt=""/>
                                            <div class="ci-item-info">
                                                <h5><a href="./single-product.html">{{$cart->product->name}}</a></h5>
                                                <p>{{$cart->qty}} x ${{calculatediscount($cart->product->price,$cart->product->discount)}}</p>
                                                <div class="ci-edit">
                                                    <a href="{{route('cartdetailpage')}}" class="edit fa fa-edit"></a>
                                                    <a href="#" class="edit destroy fa fa-trash" data-cart-id="{{$cart->id}}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="ci-total">Subtotal: ${{subtotal($catProducts)}}</div>
                                        <div class="cart-btn">
                                            <a href="{{route('cartdetailpage')}}">View Bag</a>
                                            <a href="{{route('stripe')}}">Checkout</a>
                                        </div>
                                        @else
                                        <div style="display:flex; justify-content:center; align-item:center;">
                                            <img src="{{url('frontend\images\emptycart.JPG')}}" alt="cart is empty" width="180px" height="200px">             
                                        </div>
                                        <div style="text-align:center; margin-top:10px;">
                                            <h5 style="color:#d6644a;">Your cart is empty.</h5>
                                            <p>Add something to make me happy:)</p>
                                        </div>
                                        @endif
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
                                <li><a href="{{route('home')}}">Home</a>
                                    <li class="dropdown mmenu">
                                        <a href="./categories-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Women</a>
                                        <ul class="mega-menu dropdown-menu" role="menu">
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                   
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
                                           
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Technology</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#">Nam ipsum est</a>
                                           
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu submenu" role="menu">                                         
                                            <li><a href="contact-1.html">Contact Style 1</a></li>
                                          
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        
            <script>
    $(document).ready(function() {
        attachDeleteHandlers();
    });


    function calculatediscount(price, discount) {
            return discount > 0 ? Math.floor(price - (price * (discount / 100))) : price;
        }

  
   
    function attachDeleteHandlers() {
    $('.destroy').off('click').on('click', function(e) {
        e.preventDefault();
        var cartitem = $(this).data('cart-id');
        console.log("cart id is: ", cartitem);
        $.ajax({
            url: '{{ route("deletecartitem") }}',
            method: "DELETE",
            data: {
                CartId: cartitem,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log("Item is deleted");
                updatedcartdata();
            },
            error: function(xhr) {
                console.error('Error deleting product from cart:', xhr.responseText);
            }
        });
    });
}
</script>
