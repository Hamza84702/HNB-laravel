<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HnB</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/js/vendors/isotope/isotope.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/js/vendors/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/js/vendors/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/js/vendors/select/jquery.selectBoxIt.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/subscribe-better.css')}}">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">     
        <link rel="stylesheet" href="{{asset('frontend/plugin/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/plugin/owl-carousel/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
    <body>
        <!-- PRELOADER -->
        
        <div id="loader"></div>
        
        <div class="body">
            <!-- TOPBAR -->
            @include('frontend.layouts.topbar')

            <!-- HEADER -->
            @include('frontend.layouts.header')

            <!-- SLIDER -->
            @include('frontend.layouts.slider')
            

            <!-- BLOCKS WRAP -->
            <div class="block-main container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="block-content">
                            <img src="{{asset('frontend/images/blocks/1.jpg')}}" class="img-responsive" alt=""/>
                            <div class="bs-text-down text-center hvr-outline-out">
                                Menswear<span>Intimates Fall/Winter 2015</span>				
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="block-content">
                            <img src="{{asset('frontend/images/blocks/2.jpg')}}" class="img-responsive" alt=""/>
                            <div class="bs-text-center text-center">
                                Accesories<span>Get a new look with Smile Collection</span>				
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="block-content">
                            <img src="{{asset('frontend/images/blocks/3.jpg')}}" class="img-responsive" alt=""/>
                            <div class="bs-text-down text-center">
                                Womenswear<span>Smile Collection new arrivals</span>				
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- FEATURED PRODUCTS -->
            @include('frontend.layouts.featureproducts')
            

            <!-- POLICY -->
            @include('frontend.layouts.policy')
            

            <!-- BLOG -->
            @include('frontend.layouts.blog')
           

            <!-- NEW ARRIVALS -->
            @include('frontend.layouts.newarrivals')

            

            <div class="space30 clearfix"></div>

            <!-- TESTIMONIAL -->
            @include('frontend.layouts.testimonial')
            

            <!-- LATEST PRODUCTS -->
            @include('frontend.layouts.latestproducts')

            

            <div class="space10 clearfix"></div>

            <!-- CLIENTS -->
            @include('frontend.layouts.clients')
            

            <!-- FOOTER WIDGETS -->
            @include('frontend.layouts.footerwidgets')
            
            <!-- FOOTER -->
            @include('frontend.layouts.footer')
          
        </div>
        
            @yield('content')
        
      <!-- Javascript -->
      <script src="{{asset('frontend/js/jquery.js')}}"></script>

<!-- ADDTHIS -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
<script type="text/javascript">
                                    // Call this function once the rest of the document is loaded
                                    function loadAddThis() {
                                        addthis.init()
                                    }
</script>

<!-- ADDTHIS -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
<script type="text/javascript">
                                    // Call this function once the rest of the document is loaded
                                    function loadAddThis() {
                                        addthis.init()
                                    }
</script>

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/plugin/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/bs-navbar.js')}}"></script>
<script src="{{asset('frontend/js/vendors/isotope/isotope.pkgd.js')}}"></script>
<script src="{{asset('frontend/js/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/vendors/tweets/tweecool.min.js')}}"></script>
<script src="{{asset('frontend/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
<script src="{{asset('frontend/js/jquery.subscribe-better.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{{asset('frontend/js/vendors/select/jquery.selectBoxIt.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>


</body>
</html>
