<div class="container padding40">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h5 class="heading space40"><span>Latest Products</span></h5>
                        <div class="product-carousel3">
                            @foreach($latestproducts as $latest)  
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <img src="{{url('uploads/products/'.$latest->image1)}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#productModal{{$latest->id}}"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="./single-product.html">{{$latest->name}}</a></h4>
                                        <span class="product-price">${{$latest->price}} <em>- Pre order</em></span>
                                        <!-- <div class="item-colors">
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="white"></a>
                                            <a href="#" class="litebrown"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>