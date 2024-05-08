
@extends('frontend.layouts.main')
@section('content')

        <!-- PRELOADER -->
        

        

        <!-- Newsletter -->
        <div class="subscribe-me">
            <a href="#close" class="sb-close-btn">x</a>
            <div id="popup-newsletter">
                <div class="block-content">
                    <div class="form-subscribe-header">
                        <label>Join Our Email Letter</label>
                    </div>
                    <div class="clearfix space30"></div>
                    <span class="promo-panel-sale">TAKE 25% OFF YOUR NEXT PURCHASE !</span>
                    <div class="clearfix space30"></div>
                    <span class="promo-panel-text"></span>
                    <div class="clearfix space30"></div>
                    <div class="input-box">
                        <input name="email" id="pnewsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" type="text">
                    </div>
                    <div class="actions">
                        <button type="submit" title="JOIN NOW !" class="button"><span><span>JOIN NOW !</span></span></button>
                    </div>
                    <span class="promo-panel-text1">No Thank ! I'm not interested in this promotion </span><br>
                    <span class="promo-panel-text2">Entering your email also subscribe you to the latest Sunshine furniture news and offers *</span>
                    <label class="subscribe-bottom"><input type="checkbox"><span>Don't show this popup again</span></label>
                </div>
            </div>
        </div>

        <!-- Modal -->
        @foreach($products as $product)
        <div class="modal fade" id="productModal{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <div class="owl-carousel sync1">
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image1)}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image2)}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image3)}}" alt=""> </div>
                            </div>

                            <div class="owl-carousel sync2">
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image1)}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image2)}}" alt=""> </div>
                                <div class="item"> <img src="{{asset('/uploads/products/'.$product->image3)}}" alt=""> </div> 
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="product-single">
                                <div class="ps-header">
                                    @if($product->discount > 0)
                                    <span class="badge offer">-{{$product->discount}}%</span>
                                    @endif
                                    <h2>{{$product->name}}</h2>
                                    <h3>{{$product->title}}</h3>
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
                                    <div class="ps-price"> <span>
                                    @if($product->discount > 0)${{$product->price}}@endif
                                    </span> 
                                    ${{ calculatediscount($product->price, $product->discount > 0 && $product->discount != null ? $product->discount : 0) }}</div>
                                </div>

                                <div class="ps-stock">
                                    Available: {{$product->qty}} <a href="#">In Stock</a>
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
        @endforeach
        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>
        @endsection



      