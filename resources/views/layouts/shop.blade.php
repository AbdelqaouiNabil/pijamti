<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/shop-grid-4.html   11 Nov 2019 12:39:07 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> Pijamti - Tout les pijamas</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<script src="https://kit.fontawesome.com/1a35748197.js" crossorigin="anonymous"></script>

</head>
<body class="template-collection belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="{{route('VoirWishlist')}}">Favoris</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.html">
                    	<img src="{{asset('images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                    <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="#">Acceuil <i class="anm anm-angle-down-l"></i></a>
                    
                            </li>
                            <li class="lvl1 parent megamenu"><a href="{{route('shop')}}">pyjama<i class="anm anm-angle-down-l"></i></a>
                            
                            </li>
                        	
                        </li>                      
                        <li class="lvl1 parent dropdown"><a href="#">Categories <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-left-sidebar.html" class="site-nav">Pyjama d'hiver</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Pyjama d'été </a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Vétement de nuit</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Nouvelle collection</a></li>
                            <li><a href="blog-article.html" class="site-nav">Promotion</a></li>
                          </ul>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">à propos <i class="anm anm-angle-down-l"></i></a>

                        <li class="lvl1"><a href="#"><b>Contactez nous</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="{{asset('/images/logo.svg')}}" alt="pijamti logo" title="pijamti logo" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                  <div class="site-cart ml-2">
                    <a href="{{route('VoirWishlist')}}" >
                      <i class="icon anm anm-heart-l" style="font-size: 16pt"></i>
                      <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->count()}}</span>
    
                    </a>
                      </div>
                	<div class="site-cart">
                    <a href="#;" class="site-header__cart" title="Cart">
                      <i class="icon anm anm-bag-l"></i>
                        {{-- cart counter --}}
                        <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content()->count()}}</span>
                    </a>
             
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                         
                          @if (Cart::content()->count()>0)
                          <ul class="mini-products-list">
                              @foreach ($cart as $cart)
                              <li class="item">
                                <a class="product-image" href="#">
                                    <img src="{{Storage::disk('local')->url('images/'.$cart->options->image)}}" alt="3/4 Sleeve Kimono Dress" title="" />
                                  </a>
                                  <div class="product-details">
                                    <a href="{{route('deleteItemFromCart',['id'=>$cart->rowId])}}" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                      <a class="pName" href="">{{$cart->name}}</a>
                                      <div class="variant-cart">Taille :&nbsp; {{$cart->options->size }}
                                         </div>
                                      <div class="variant-cart">Couleur :&nbsp;{{$cart->options->color }}
                                          
                                     </div>
                                     <div class="variant-cart">Quantité :&nbsp; {{$cart->qty }}
                                          
                                  </div>
                                      <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money" id="moneyId">Prix : {{$cart->price}} MAD</span>
                                          </div>
                                       </div>
                </div>
             
                              </li>
                                  
                              @endforeach
                           
                          </ul>
                          <div class="total">
                            <div class="total-in">
                                <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">{{Cart::priceTotal()}} MAD</span></span>
                              </div>
                               <div class="buttonSet text-center">
                                  <a href="{{route('cart')}}" class="btn btn-secondary btn--small">PANIER</a>
                                  <a href="" class="btn btn-secondary btn--small">PAIMENT</a>
                              </div>
                          </div>
                      
                       
                          @else
                          <ul class="mini-products-list">
                            
                              <li class="item">
                                <h3>Panier est vide</h3>
                              </li>
                                  
                          </ul>
                          @endif
                           
                           
                        </div>
                        <!--End Minicart Popup-->
                    </div>
                   
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="{{route('shop')}}">Shop </i></a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product </i></a>
          
        </li>
        	<li class="lvl1 parent megamenu"><a href="about-us.html">Pages </a>
          </li>
          	
			
        	<li class="lvl1 parent megamenu"><a href="">Categories <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.html" class="site-nav">Pijamas d'été</a></li>
            <li><a href="blog-right-sidebar.html" class="site-nav">Pijamas d'hiver</a></li>
            <li><a href="blog-fullwidth.html" class="site-nav">Pijamas de nuit</a></li>
   
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
    
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                  @foreach($categorie as $categorie)
                                  <li class="lvl-1"><a href="{{route('filterByCategorie',['id'=>$categorie->id])}}" class="site-nav">{{$categorie->name}}</a></li>

                                  @endforeach                             
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="{{route('filterByPriceRange')}}" method="post" class="price-filter">
                              @csrf
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin" ><input id="amount" type="text" name="filterPrice" style="width:200px;"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                        <!--Size Swatches-->
                        <div class="sidebar_widget filterBox filter-widget size-swacthes">
                            <div class="widget-title"><h2>Size</h2></div>
                            <form action="{{route('filterBySize')}}" method="POST">
                                @csrf
                            <div class="filter-color swacth-list">
                               
                            	<ul>
                                    <li><input type="radio" name="size" class="swacth-btn" value="S"> S</li>
                                    <li><input type="radio" name="size" class="swacth-btn" value="M"> M</li>
                                    <li><input type="radio" name="size" class="swacth-btn" value="L" >L</li>
                                    <li><input type="radio" name="size" class="swacth-btn" value="XL">XL</li>
                                    <li><input type="radio" name="size" class="swacth-btn" value="XXL">XXL</li>
                                    <li><input type="radio" name="size" class="swacth-btn" value="SATANDARE">SATANDARE</li>
                                    
                                </ul>
                            
                            
                            </div>
                            <div class="col-6 text-right margin-25px-top">
                                <button class="btn btn-secondary btn--small">filter</button>
                            </div>
                        </form>
                        </div>
                        <!--End Size Swatches-->
                     
                    
                       
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="assets/images/side-banner-2.jpg" alt="" />
                        </div>
                        <!--Banner-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Information</h2></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
             
                   
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->






                        <!--End Toolbar-->
                      @yield('body')












                    </div>            
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="templateshub.net">Templates Hub</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    <!--Quick View popup-->
    <div class="modal fade quick-view-popup" id="content_quickview">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	<div class="modal-body">
                    <div id="ProductSection-product-template" class="product-template__container prstyle1">
                <div class="product-single">
                <!-- Start model close -->
                <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                <!-- End model close -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">
                            <div class="pl-20">
                                <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h2 class="product-single__title">Product Quick View Popup</h2>
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                    </span>
                                </p>
                                <div class="product-single__description rte">
                                    Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                </div>
                                
                            <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                    <div class="product-form__item">
                                      <label class="header">Color: <span class="slVariant">Red</span></label>
                                      <div data-value="Red" class="swatch-element color red available">
                                        <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                      </div>
                                      <div data-value="Blue" class="swatch-element color blue available">
                                        <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                      </div>
                                      <div data-value="Green" class="swatch-element color green available">
                                        <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                      </div>
                                      <div data-value="Gray" class="swatch-element color gray available">
                                        <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                      </div>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                      <label class="header">Size: <span class="slVariant">XS</span></label>
                                      <div data-value="XS" class="swatch-element xs available">
                                        <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                      </div>
                                      <div data-value="S" class="swatch-element s available">
                                        <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                      </div>
                                      <div data-value="M" class="swatch-element m available">
                                        <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                      </div>
                                      <div data-value="L" class="swatch-element l available">
                                        <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                      </div>
                                    </div>
                                </div>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit">
                                        <button type="button" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <div class="display-table shareRow">
                                    <div class="display-table-cell">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
                <!--End-product-single-->
                </div>
            </div>
        		</div>
        	</div>
        </div>
    </div>
    <!--End Quick View popup-->
    
     <!-- Including Jquery -->
     <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/plugins.js')}}"></script>
     <script src="{{asset('js/popper.min.js')}}"></script>
     <script src="{{asset('js/lazysizes.js')}}"></script>
     <script src="{{asset('js/main.js')}}"></script>
</div>
</body>

<!-- belle/shop-grid-4.html   11 Nov 2019 12:39:07 GMT -->
</html>