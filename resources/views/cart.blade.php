<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/cart-variant1.html   11 Nov 2019 12:44:31 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Pijamti cart shop</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('/css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
<script src="https://kit.fontawesome.com/1a35748197.js" crossorigin="anonymous"></script>
</head>
<body class="page-template belle cart-variant1">
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
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +212627000635</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text">Meillieure PIJAMAS</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="{{route('VoirWishlist')}}">FAVORIS</a></li>
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
                    	<img src="{{asset('/images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
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
                        <li class="lvl1 parent dropdown"><a href="{{url('pijamti/shop/filter/'.$cat->id)}}">Categories <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                              @foreach ($categorie as $categorieDesktop)
                              <li><a href="{{url('pijamti/shop/'.$categorieDesktop->id)}}" class="site-nav">{{$categorieDesktop->name}}</a></li>

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
                            <img src="{{asset('images/logo.svg')}}" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
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
    	<!--Page Title-->
        @if (Cart::instance('shopping')->content()->count()>0)
        <div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Votre Cart</h1></div>
      		</div>
		</div>
        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
    
                        </div>
                            
                        @endif
                        @if (Session::get('saved'))
                        <div class="alert alert-info">
                            {{Session::get('saved')}}
    
                        </div>
                            
                        @endif
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach ($cart as $cart)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="{{Storage::disk('local')->url('images/'.$cart->options->image)}}" alt="Elastic Waist Dress - Navy / Small"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">{{$cart->name}} </a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Color: {{$cart->options->color}}<br>Size: {{$cart->options->size}}<br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">{{$cart->price}} MAD</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <span >{{$cart->qty}} Piéce</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">{{$cart->subtotal}} MAD</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="{{route('deleteItemFromCart',['id'=>$cart->rowId])}}" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                                @endforeach
                                
                               
                                
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{route('shop')}}" class="btn btn-secondary btn--small cart-continue">Retour au shop</a></td>
                                    <td colspan="3" class="text-right">
	                                    <a href="{{route('deleteAllItemFromCart')}}" name="clear" class="btn btn-secondary btn--small  small--hide">Vider le panier</a>
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
                
                
                <div class="container ">
                    <div class="row">
                        
                       
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer ">
                            <div class="solid-border">	
                                <form method="post" action="{{route('storeCart')}}">
                                    @csrf
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money">{{Cart::subtotal()}} MAD</span></span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <div class="col-12 form-group">
                                    <label for="username">Nom et Prénom</label>
                                    <input type="text" name="name" placeholder="Nom et prénom" value="{{old('name')}}">
                                    <span class="text-danger">@error('name'){{$message}} @enderror</span>

                                </div>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <div class="col-12 form-group">
                                    <label for="username">Téléphone</label>
                                    <input type="text" name="phone" placeholder="Téléphone" value="{{old('phone')}}">
                               <span class="text-danger">@error('phone'){{$message}} @enderror</span>
                                </div>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <div class="col-12 form-group">
                                    <label for="username">Ville</label>
                                    <input type="text" name="city" placeholder="Ville" value="{{old('city')}}">
                                    <span class="text-danger">@error('city'){{$message}} @enderror</span>
                                </div>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <div class="col-12 form-group">
                                    <label for="username">Adresse</label>
                                    <input type="text" name="adress" placeholder="Adresse" value="{{old('adress')}}">
                                    <span class="text-danger">@error('adress'){{$message}} @enderror</span>
                                </div>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                
                                    <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn mb-3" value="Commander">    
                                    </div>
                                
                              </div>
                              <p>  - Livraison Casa Mohamadia Gratuite<br> -  Hors Casablanca 35 MAD</p>                            
                            </form>
                            </div>
        
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
        
        @else
        <div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Votre Cart est vide</h1></div>
      		</div>
		</div>
             
        <div class="container mt-5">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase text-center" role="alert">
						<i class="fa-solid fa-person-circle-exclamation"></i> &nbsp;<strong>retour au menu </strong> pour ajouter au cart 
					</div>                 
                </div>
                <div class="col-12 col-sm-12 col-md-12-col-lg-12 main-col">
                          <div class="w-100 text-center">
                            <a class="btn" href="{{route('home')}}"><i class="fa-solid fa-arrow-left"></i> MENU </a>

                          </div>
                   
                </div>
            </div>
        </div>
        @endif
    
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
     <script src="{{asset('/js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('/js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('/js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('/js/plugins.js')}}"></script>
     <script src="{{asset('/js/popper.min.js')}}"></script>
     <script src="{{asset('/js/lazysizes.js')}}"></script>
     <script src="{{asset('/js/main.js')}}"></script>
</div>
</body>

<!-- belle/cart-variant1.html   11 Nov 2019 12:44:32 GMT -->
</html>