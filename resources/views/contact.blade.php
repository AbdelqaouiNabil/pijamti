<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Pijamty &ndash; Contactez Nous</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body class="contact-template page-template belle">
<div class="pageWrapper">

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

                        <li class="lvl1"><a href="#"><b>Contactez nous</b> <i class="anm anm-angle-down-l"></i></a></li>
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
                                    <a href="{{route('cart')}}" class="btn btn-secondary btn--small">Voir panier</a>
                                    
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
   
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="index.html" title="Back to the home page">Acceuil</a><span aria-hidden="true">›</span><span>Contactez Nous</span>
            </div>
        </div>
        @if (Session::get('sucess'))
        <div class="alert alert-info">
            {{Session::get('sucess')}}

        </div>
            
        @endif
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-12 m-auto">
                	<h2>Écrivez-nous</h2>
                    <p>Vos messages et avis nous intéressent</p>
                	<div class="formFeilds contact-form form-vertical">
                      <form action="{{route('contactSend')}}" method="POST"  id="contact_form" class="contact-form">	
                      @csrf
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                          	<input type="text" id="ContactFormName" name="name" placeholder="Nom et Prenom"  >
                              <span class="text-danger">@error('name'){{$message}} @enderror</span>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
							<input type="email" id="ContactFormEmail" name="email" placeholder="Email"  > 
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                       	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="ContactFormPhone" name="phone"  placeholder="Numero de Téléphone" >
                            <span class="text-danger">@error('phone'){{$message}} @enderror</span>

                        </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="ContactSubject" name="subject" placeholder="Message" >
                            <span class="text-danger">@error('subject'){{$message}} @enderror</span>

                        </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea  rows="10" id="ContactFormMessage" name="message" placeholder="Votre Message"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn" value="Envoyer le Message">
                        </div>
                     </div>
                     </form>
                    </div>
                </div>
                
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
     <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/plugins.js')}}"></script>
     <script src="{{asset('js/popper.min.js')}}"></script>
     <script src="{{asset('js/lazysizes.js')}}"></script>
     <script src="{{asset('js/main.js')}}"></script>
</div>
</body>

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->
</html>