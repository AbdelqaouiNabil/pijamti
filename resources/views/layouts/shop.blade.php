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
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +212627000635</p>
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
                            <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Acceuil <i class="anm anm-angle-down-l"></i></a>
                    
                            </li>
                            <li class="lvl1 parent megamenu"><a href="{{route('shop')}}">pyjama<i class="anm anm-angle-down-l"></i></a>
                            
                            </li>
                        	
                        </li>                      
                        <li class="lvl1 parent dropdown"><a href="#">Categories <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            @foreach ($categorie as $cat)
                            <li><a href="{{url('pijamti/shop/filter/'.$cat->id)}}" class="site-nav">{{$cat->name}}</a></li>
                                
                            @endforeach
                          </ul>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">à propos <i class="anm anm-angle-down-l"></i></a>

                        <li class="lvl1"><a href="{{route('contact')}}"><b>Contactez nous</b> <i class="anm anm-angle-down-l"></i></a></li>
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
                                  <a href="{{route('cart')}}" class="btn btn-secondary btn--small">Voir panier</a>
                                 
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
        	<li class="lvl1 parent megamenu"><a href="{{route('home')}}"> Acceuil </a>
         
        </li>
        	<li class="lvl1 parent megamenu"><a href="{{route('shop')}}"> Pijamas </a>
          
        </li>
        
        	<li class="lvl1 parent megamenu"><a href="{{route('shop')}}"> Categories <i class="anm anm-plus-l"></i></a>
          <ul>
              @foreach ($categorie as $categorieMobile)
              <li><a href="{{url('pijamti/shop/filter/'.$cat->id)}}" class="site-nav">{{$categorieMobile->name}}</a></li>

                  
              @endforeach
           
          </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="">à propos </a>
          
        </li>
        	<li class="lvl1"><a href="{{route('contact')}}"><b>Contactez-nous</b></a>
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
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="https://WWW.DOTKOME.NET">ALL RIGHTS RESERVED</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer social media Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-facebook-square"></i></li>
                                <li><i class="fa-brands fa-youtube"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                               
                            </ul>
                        </div>
                        <!--End social media Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    
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