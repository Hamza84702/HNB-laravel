
</style>
    <div class="product-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h5 class="heading2 space40"><span>New Arrivals</span></h5>
                            <div class="product-carousel">
                                @foreach($products as $product)
                                <div class="pc-wrap">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{url('uploads/products/'.$product->image1)}}"  class="img-responsive equal-image" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html"><b>{{$product->name}}</b></a></h4>
                                            <h3 class="product-title"><a href="./single-product.html">{{$product->title}}</a></h3>

                                            <span class="product-price">${{$product->price}} <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="litebrown"></a>
                                                <a href="#" class="darkgrey"></a>
                                                <a href="#" class="red"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h5 class="heading2 space40"><span>Random Products</span></h5>
                            <div class="product-carousel2">
                                @foreach ($randproducts as $random)
                                <div class="pc-wrap">
                                    <div class="product-item">
                                        <div class="item-thumb">
                                            <img src="{{url('uploads/products/'.$random->image1)}}" class="img-responsive" alt=""/>
                                            <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                            <div class="product-overlay">
                                                <a href="#" class="addcart fa fa-shopping-cart"></a>
                                                <a href="#" class="compare fa fa-signal"></a>
                                                <a href="#" class="likeitem fa fa-heart-o"></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="./single-product.html"><b>{{$random->name}}</b></a></h4>
                                            <h3 class="product-title"><a href="./single-product.html">{{$random->title}}</a></h3>
                                            <span class="product-price">${{$random->price}} <em>- Pre order</em></span>
                                            <div class="item-colors">
                                                <a href="#" class="brown"></a>
                                                <a href="#" class="white"></a>
                                                <a href="#" class="litebrown"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>