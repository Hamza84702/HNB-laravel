@extends('frontend.layouts.main1')
@section('content')

       
                           

            <!-- PAGE HEADER -->
            <div class="page_header">
                <div class="container">
                    <div class="page_header_info text-center">
                        <div class="page_header_info_inner">
                            <h2>New Arrivals</h2>
                            <p>Nunc tincidunt consequat elit vitae placerat. Sed id ex vel tortor ultrices accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                            <div class="ph_btn">
                                <a href="#">Shop Men</a>
                                <a href="#">Shop Women</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>New Arrivals</li>
                    </ul>
                </div>
            </div>

            <!-- SHOP CONTENT -->
            <div class="shop-content">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-3 col-sm-4">
                            <div class="side-widget space50">
                                <form role="form" class="search-widget">
                                    <input class="form-control" type="text">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="side-widget">
                                <h3><span>Shop by</span></h3>
                                <h5>Categories</h5>
                                <ul class="cat-list">
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Handbag</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                                <div class="clearfix space20"></div>
                                <h5>Price Slider</h5>
                                <div id="slider-container"></div>
                                <p>
                                    <a href="#" class="btn-black pull-left">Filter Now</a>
                                    <span class="pull-right sc-range">
                                        <label class="range-label" for="amount">Price:</label>
                                        <input type="text" id="amount" style="border: 0; color: #333333; font-weight: bold;" />
                                    </span>
                                </p>
                                <div class="clearfix space30"></div>
                                <h5>Manufactures</h5>
                                <ul class="brand-list">
                                    <li><a href="#">Amani</a></li>
                                    <li><a href="#">Just Cavalli</a></li>
                                    <li><a href="#">D&amp;G</a></li>
                                    <li><a href="#">Chanel</a></li>
                                    <li><a href="#">Gucci</a></li>
                                    <li><a href="#">H&amp;M</a></li>
                                    <li><a href="#">Louis Vutton</a></li>
                                </ul>
                                <div class="clearfix space20"></div>
                                <h5>Color Options</h5>
                                <ul class="color-list">
                                    <li><a href="#"><span class="black"></span>Black</a></li>
                                    <li><a href="#"><span class="darkgrey"></span>Grey</a></li>
                                    <li><a href="#"><span class="red"></span>Red</a></li>
                                    <li><a href="#"><span class="liteblue"></span>Blue</a></li>
                                    <li><a href="#"><span class="yellow"></span>Yellow</a></li>
                                    <li><a href="#"><span class="brown"></span>Brown</a></li>
                                </ul>
                                <div class="clearfix space20"></div>
                                <h5>Size Options</h5>
                                <ul class="size-list">
                                    <li><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                            <div class="clearfix space30"></div>
                            <div class="side-widget">
                                <h3><span>Community Polls</span></h3>
                                <form class="poll">
                                    <p>What is your favourite fashion style ?</p>
                                    <div class="space20"></div>
                                    <input type="radio" name="radio_poll" id="radio1" class="css-checkbox" /><label for="radio1" class="css-label radGroup1">Classic Style</label><br>
                                    <input type="radio" name="radio_poll" id="radio2" class="css-checkbox" checked="checked"/><label for="radio2" class="css-label radGroup1">Bohrmian Style</label><br>
                                    <input type="radio" name="radio_poll" id="radio3" class="css-checkbox" /><label for="radio3" class="css-label radGroup1">Sreet Style</label><br>
                                    <input type="radio" name="radio_poll" id="radio4" class="css-checkbox" /><label for="radio4" class="css-label radGroup1">elegant Style</label><br>
                                    <button type="submit">Vote</button>
                                </form>
                            </div>
                            <div class="space30"></div>
                            <div class="side-widget">
                                <h3><span>Compare Products</span></h3>
                                <div class="compare-wrap">
                                    <p>You have no item(s) to compare</p>
                                </div>
                            </div>
                        </aside>
                        <div class="col-md-9 col-sm-8">
                            <div class="filter-wrap">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        View as: <span><a class="active">Grid</a> / <a href="./categories-list.html">List</a></span>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        Sort by:
                                        <select>
                                            <option>Default</option>
                                            <option>Newest</option>
                                            <option>Popular</option>
                                            <option>Recently Sold</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <span class="pull-right">
                                            Show:
                                            <select>
                                                <option>9 items</option>
                                                <option>18 items</option>
                                                <option>27 items</option>
                                                <option>50 items</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pagenav-wrap">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        Results: <span>1 - 9 of 86 items</span>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="pull-right">
                                            <em>Page:</em>
                                            <ul class="page_nav">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space50"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <span class="badge new">New</span>
                                            <img src="{{asset('frontend/images/products/fashion/4.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="litebrown"></a>
                                                <a href="#" class="white"></a>
                                                <a href="#" class="red"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/5.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="yellow"></a>
                                                <a href="#" class="litebrown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <span class="badge offer">-50%</span>
                                            <img src="{{asset('frontend/images/products/fashion/6.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="darkgrey"></a>
                                                <a href="#" class="red"></a>
                                                <a href="#" class="brown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/7.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target=""></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="litebrown"></a>
                                                <a href="#" class="red"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/8.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="liteblue"></a>
                                                <a href="#" class="white"></a>
                                                <a href="#" class="litebrown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/9.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="red"></a>
                                                <a href="#" class="litebrown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/10.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="darkgrey"></a>
                                                <a href="#" class="yellow"></a>
                                                <a href="#" class="litebrown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/11.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="red"></a>
                                                <a href="#" class="black"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{asset('frontend/images/products/fashion/12.jpg')}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html">Product fashion</a></h4>
                                            <span class="product-price">$99.00 <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="litebrown"></a>
                                                <a href="#" class="cream"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagenav-wrap">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        Results: <span>1 - 9 of 86 items</span>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="pull-right">
                                            <em>Page:</em>
                                            <ul class="page_nav">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space50"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="related-posts">
                                <h5>Recently Viewed</h5>
                                <ul>
                                    <li><a href="./single-product.html"><img src="{{asset('frontend/images/products/fashion/1.jpg')}}" class="img-responsive" alt=""/></a></li>
                                    <li><a href="./single-product.html"><img src="{{asset('frontend/images/products/fashion/2.jpg')}}" class="img-responsive" alt=""/></a></li>
                                    <li><a href="./single-product.html"><img src="{{asset('frontend/images/products/fashion/3.jpg')}}" class="img-responsive" alt=""/></a></li>
                                    <li><a href="./single-product.html"><img src="{{asset('frontend/images/products/fashion/4.jpg')}}" class="img-responsive" alt=""/></a></li>
                                    <li><a href="./single-product.html"><img src="{{asset('frontend/images/products/fashion/5.jpg')}}" class="img-responsive" alt=""/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>

           

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <div class="owl-carousel sync1">
                                <div class="item"> <img src="{{asset('frontend/images/products/single/1-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/2-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/3-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/4-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/1-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/2-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/3-small.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/4-small.jpg')}}" alt=""> </div>
                            </div>

                            <div class="owl-carousel sync2">
                                <div class="item"> <img src="{{asset('frontend/images/products/single/1.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/2.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/3.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/4.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/1.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/2.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/3.jpg')}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('frontend/images/products/single/4.jpg')}}" alt=""> </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="product-single">
                                <div class="ps-header">
                                    <span class="badge offer">-50%</span>
                                    <h3>Product fashion</h3>
                                    <div class="ratings-wrap">
                                        <div class="ratings">
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                        </div>
                                        <em>(6 reviews)</em>
                                    </div>
                                    <div class="ps-price"><span>$ 200.00</span> $ 99.00</div>
                                </div>

                                <div class="ps-stock">
                                    Available: <a href="#">In Stock</a>
                                </div>
                                <div class="sep"></div>
                                <div class="ps-color">
                                    <p>Color<span>*</span></p>
                                    <a class="black" href="#" onclick="return false;"></a>
                                    <a class="red" href="#" onclick="return false;"></a>
                                    <a class="yellow" href="#" onclick="return false;"></a>
                                    <a class="darkgrey" href="#" onclick="return false;"></a>
                                    <a class="litebrown" href="#" onclick="return false;"></a>
                                </div>
                                <div class="space10"></div>
                                <div class="row select-wraps">
                                    <div class="col-md-7 col-sm-7">
                                        <p>Size<span>*</span></p>
                                        <select>
                                            <option>XL</option>
                                            <option>XXL</option>
                                            <option>XXXL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <p>Quantity<span>*</span></p>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="space20"></div>
                                <div class="share">
                                    <span>
                                        <a href="#" class="fa fa-heart-o" onclick="return false;"></a>
                                        <a href="#" class="fa fa-signal" onclick="return false;"></a>
                                        <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>
                                    </span>
                                    <div class="addthis_native_toolbox"></div>
                                </div>
                                <div class="space20"></div>
                                <div class="sep"></div>
                                <a class="btn-color" href="#">Add to Bag</a>
                                <a class="btn-black" href="#">Go to Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



		<!-- Javascript -->
@endsection