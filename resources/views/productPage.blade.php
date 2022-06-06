<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/product-layout-2.html   11 Nov 2019 12:42:26 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Detail sur {{$product->name}}</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('./images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('./css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<script src="https://kit.fontawesome.com/1a35748197.js" crossorigin="anonymous"></script>

</head>
<body class="template-product belle">
    <div id="pre-loader">
        <img src="{{asset('./images/loader.gif')}}" alt="Loading..." />
    </div>
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
                    <p class="phone-no"><i class="anm anm-phone-s"></i>+212627000635</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="wishlist.html">Wishlist</a></li>
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
                        <a href="{{route('home')}}">
                            <img src="{{asset('./images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
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
                    {{-- phone logo --}}
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('./images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    {{--end phone logo --}}
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                @if (Cart::instance('shopping')->content()->count()>0)
                                <ul class="mini-products-list">
                                    @foreach ($cart as $cart)
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="{{Storage::disk('local')->url('images/'.$cart->options->image)}}" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">{{$cart->name}}</a>
                                            <div class="variant-cart">Taille : {{$cart->options->size }}
                                               </div>
                                            <div class="variant-cart">Couleur :{{$cart->options->color }}
                                                
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
                                        <a href="{{route('cart')}}" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            
                             
                                @else
                                <ul class="mini-products-list">
                                  
                                    <li class="item">
                                        <h3>La cart est vide</h3>
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
                  <li><a href="{{url('pijamti/shop/filter/'.$categorieMobile->id)}}" class="site-nav">{{$categorieMobile->name}}</a></li>
    
                      
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
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="{{route('home')}}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>{{$product->name}}</span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                
                <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                    <!--#ProductSection-product-template-->
                    <div class="product-single product-single-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img product-single__photos bottom">
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="{{Storage::disk('local')->url('images/'.$product->image)}}" alt="" src="{{Storage::disk('local')->url('images/'.$product->image)}}" />               
                                        </div>
    
                                    </div>
                                    
        
                                </div>
                              
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">{{$product->name}}</h1>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">{{$product->BarredPrice}} MAD</span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">{{$product->price}} MAD</span></span>
                                        </span>
                                        <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                    
                                    </p>
                                <div class="product-single__description rte">
                                    <p>{{$product->description}}</p>
                                </div>
                                <form  action="{{route('ajouterAuCart')}}" method="post" class="product-form product-form-product-template hidedropdown">
                                    @csrf
                                    <input type="text" name="product_id" hidden value="{{$product->id}}">
                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                        <div class="product-form__item">
                                          <label class="header">Color: <span class="slVariant"></span></label>
                                          @foreach ($product->color as $item)
                                          <div data-value="{{$item}}" class="swatch-element color {{$item}} available">
                                      
                                     <input class="swatchInput" id="swatch-0-{{$item}}" type="radio" name="size" value="{{$item}}"><label class="swatchLbl color small" for="swatch-0-{{$item}}" style="background-color:{{$item}};" title="{{$item}}"></label>
                                        
                                                   </div>
                                          
                                                   @endforeach     
                                                   <span class="text-danger">@error('size'){{$message}} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                        <div class="product-form__item">
                                          <label class="header">Size:</label>
                                         @foreach ($product->size as $item)
                                         <div data-value="X-Small" class="swatch-element x-small available">
                                            <input class="swatchInput" id="{{$item}}" type="radio" name="color" value="{{$item}}"><label class="swatchLbl small rounded" for="{{$item}}" title="{{$item}}">{{$item}}</label>
                                          </div>
                                         @endforeach
                                         <span class="text-danger">@error('color'){{$message}} @enderror</span>

                                        </div>
                                    </div>
                            
                                    <p class="infolinks"> <a href="#productInquiry" class="emaillink btn">Vous Avez des Question sur se Produit</a></p>
                                   
                                    <!-- Product Action -->
                                    @if (Cart::instance('shopping')->content()->where('id',$product->id)->count())
                                    <div class="product-action clearfix">
                                    <div  class="btn product-form__cart-submit"> <i class="fa-solid fa-circle-check"></i> Déja Ajouter Au Panier </div>
                                    </div>
                                    @else
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
                                          
                                            <button type="submit" class="btn product-form__cart-submit">
                                             Ajouter Au Panier
                                            </button>
                                         
                                        </div>
                                        @endif
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <div class="product-form__item--submit">
                                    <h3 class="infolinks mt-5"> LES TAGES :</h3>

                                @foreach($product->tags as $tag)

                                  <span class="badge badge-warning" style="font-size:12pt;color:white">{{$tag->name}}</span>
            
                                 @endforeach
                                </div>
                                  <!--Product Feature-->
                                  <div class="prFeatures">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="{{asset('./images/credit-card.png')}}" alt="Safe Payment" title="Safe Payment" />
                                            <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="{{asset('./images/shield.png')}}" alt="Confidence" title="Confidence" />
                                            <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="{{asset('./images/worldwide.png')}}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                            <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                            <img src="{{asset('./images/phone-call.png')}}" alt="Hotline" title="Hotline" />
                                            <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Product Feature-->
                                <div class="display-table shareRow">
                                    @if (Cart::instance('wishlist')->content()->where('id',$product->id)->count())
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" style="pointer-events: none;" title="Add to Wishlist"> <i class="fas fa-heart" style="color: red"></i><span>déja ajouter aux Favoris</span></a>
                                        </div>
                                    </div>
                                    @else
                                    <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="{{route('addToWishlist',['id'=>$product->id])}}" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>ajouter aux Favoris</span></a>
                                        </div>
                                    </div>
                                    @endif
                                       

                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                             </div>
                                        </div>
                                    </div>
                            </div>
                          
                        	</div>
                    	</div>
                    <!--End-product-single-->
                    
                   
                    
                 
                    
                    </div>
                	<!--#ProductSection-product-template-->
            	</div>
            <!--MainContent-->
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
     <script src="{{asset('./js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('./js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('./js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('./js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('./js/bootstrap.min.js')}}"></script>
     <script src="{{asset('./js/plugins.js')}}"></script>
     <script src="{{asset('./js/popper.min.js')}}"></script>
     <script src="{{asset('./js/lazysizes.js')}}"></script>
     <script src="{{asset('./js/main.js')}}"></script>
     <!-- Photoswipe Gallery -->
     <script src="{{asset('./js/vendor/photoswipe.min.js')}}"></script>
     <script src="{{asset('./js/vendor/photoswipe-ui-default.min.js')}}"></script>
     <script>
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();
        
            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();
              
                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;
        
                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
        </script>
    </div>
    </div>

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>

</body>

<!-- belle/product-layout-2.html   11 Nov 2019 12:42:40 GMT -->
</html>