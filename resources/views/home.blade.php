<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>PYJAMTY - ACCEUIL</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('./css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('./css/style.css')}}">
<link rel="stylesheet" href="{{asset('./css/responsive.css')}}">

<script src="https://kit.fontawesome.com/1a35748197.js" crossorigin="anonymous"></script>
</head>
<body class="template-index belle template-index-belle">
<div id="pre-loader">
    <img src="{{asset('./images/loader.gif')}}" alt="Loading..." />
</div>
<div class="pageWrapper">
    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i>+212627000635</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Livraison Gratuite</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="{{route('VoirWishlist')}}">FAVORIS </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.html">
                    	<img src="{{asset('./images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" width="400px" />
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
                           @foreach ($categorie as $cat)
                           <li><a href="{{url('pijamti/shop/filter/'.$cat->id)}}" class="site-nav">{{$cat->name}}</a></li>
                               
                           @endforeach
                            
                          </ul>
                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">à propos<i class="anm anm-angle-down-l"></i></a>

                        <li class="lvl1"><a href="{{route('contact')}}"><b>Contactez nous</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="{{asset('./images/logo.svg')}}" alt="{{asset('./images/logo.svg')}}" title="pijamti logo" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">

                  {{-- favoris icon home --}}
                  <div class="site-cart ml-3">
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
                        <!--EndMinicart Popup-->
                    </div>
                   
                    
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
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
                @foreach ($slider as $slide)
                <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{Storage::disk('local')->url('images/slider'.$slide->slider)}}" src="{{Storage::disk('local')->url('images/slider'.$slide->slider)}}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">{{$slide->header}}</h2>
                                        <span class="mega-subtitle slideshow__subtitle">{{$slide->miniHeader}}</span>
                                        <a href="{{route('shop')}}" class="btn">Voir Nos Collection</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
               
            </div>
        </div>
        <!--End Home slider-->
        <!--Collection Tab slider-->
        <div class="tab-slider-product section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">NOUVELLES ARRIVÉES</h2>
                            <p>Parcourez la grande variété de nos produits</p>
                        </div>
                        <div class="tabs-listing">
                           
                            <div class="tab_container">
                                <div id="tab1" class="tab_content grid-products">
                                  @if (Session::get('sucess'))
                                  <div class="alert alert-info">
                                      {{Session::get('sucess')}}
              
                                  </div>
                                      
                                  @endif
                                    <div class="productSlider">
                                 
                                     
                                       
                                      @foreach ($products as $product)
                                      <div class="col-12 item">
                                        <!-- start product image -->
                                     
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="/produit/{{$product->id}}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$product->image)}}" src="{{Storage::disk('local')->url('images/'.$product->image)}}" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$product->imageHover)}}" src="{{Storage::disk('local')->url('images/'.$product->imageHover)}}" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels"><span class="lbl on-sale">Nouveau</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->
    
                                            <!-- Start product button -->
                                            <div class="variants add">
                                              
                                                <a class="btn btn-addto-cart" href="/produit/{{$product->id}}">Voir Produit</a>
                                            </div>
                                            <div class="button-set">
                                              @if (Cart::instance('wishlist')->content()->where('id',$product->id)->count())
                                              <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" style="pointer-events: none;">
                                                  <i class="fas fa-heart" style="color: red"></i>
                                                </a>
                                            </div>
                                              @else
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="/produit/favoris/{{$product->id}}">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
    
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">{{$product->name}}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">{{$product->price}} MAD</span><br>               
                                            </div>
                                            <!-- End product price -->
                                            
                        
                
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                          
                                      @endforeach



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section">
        	<div class="container-fluid">
                <div class="section-header text-center">
                    <h2 class="h2">Categorie</h2>
                    <p>Shop in the best categories</p>
                </div>
				<div class="collection-grid">
                    @foreach ($categorie as $categorie)
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="{{Storage::disk('local')->url('images/categorie/'.$categorie->image)}}" src="{{Storage::disk('local')->url('images/categorie/'.$categorie->image)}}" alt="Fashion" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">{{$categorie->name}}</h3>
                            </div>
                        </a>
                    </div>
                
                    @endforeach
                     
                    </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
       
        
        
        <!--Featured Product-->
        <div class="product-rows section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">Spécial Pijama</h2>
                            <p>Nos produits les plus populaires</p>
                        </div>
            		</div>
                </div>
                <div class="grid-products">
	                <div class="row">
                      @foreach ($special as $special)
                      <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                        
                        <div class="grid-view_image">
                            <!-- start product image -->
                            <a href="/produit/{{$special->id}}" class="grid-view-item__link">
                                <!-- image -->
                                <img class="grid-view-item__image primary blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$special->image)}}" src="{{Storage::disk('local')->url('images/'.$special->image)}}"  alt="{{Storage::disk('local')->url('images/'.$special->image)}}" >
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="grid-view-item__image hover blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$special->imageHover)}}" src="{{Storage::disk('local')->url('images/'.$special->imageHover)}}" alt="{{Storage::disk('local')->url('images/'.$special->imageHover)}}">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label1">Spécial</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details hoverDetails text-center mobile">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-accordion.html">{{$special->name}}</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">{{$special->BarredPrice}} MAD</span>
                                    <span class="price">{{$special->price}} MAD</span>
                                </div>
                                <!-- End product price -->
                                
                            </div>
                           
                            <!-- End product details -->
                        </div>
                    </form>
                    </div>
                          
                      @endforeach
                    
                	</div>
                </div>
           </div>
        </div>	
        <!--End Featured Product-->
        
        <!--Store Feature-->
        <div class="store-feature section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5>Livraison gratuite</h5>
                            	<span class="sub-text">livraison gratuite à casa et mohamadia</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Garantie monétaire</h5>
                                <span class="sub-text">Garantie de remboursement de 30 jours</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>support en ligne                                </h5>
                                <span class="sub-text">Nous soutenons en ligne 24/7 le jour</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>paiement à la livraison</h5>
                                <span class="sub-text">vous payez quand vous obtenez votre produit</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
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
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-facebook-square"></i></li>
                                <li><i class="fa-brands fa-youtube"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                               
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
    
  
    
   
    
     <!-- Including Jquery -->
     <script src="{{asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('/js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('/js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('/js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('/js/plugins.js')}}"></script>
     <script src="{{asset('/js/popper.min.js')}}"></script>
     <script src="{{asset('/js/lazysizes.js')}}"></script>
     <script src="{{asset('/js/main.js')}}"></script>
     <!--For Newsletter Popup-->
 
    <!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->
</html>