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
                    
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
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
        	<li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="index.html" class="site-nav">Home 1 - Classic</a></li>
                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                <li><a href="#" class="site-nav">Age Varification </a></li>
                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                <li><a href="#" class="site-nav last">Auto Currency</a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>

                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left Thumbs</a></li>
                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right Thumbs</a></li>
                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom Thumbs</a></li>
              </ul>
            </li>
            <li><a href="short-description.html" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity Message</a></li>
                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold Count </a></li>
                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox </a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping Message</a></li>
                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
          <ul>
          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                 </ul>
            </li>
            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                 </ul>
            </li>
			<li><a href="checkout.html" class="site-nav">Checkout</a></li>
            <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
              </ul>
            </li>
            <li><a href="404.html" class="site-nav">404</a></li>
            <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
            <li><a href="blog-article.html" class="site-nav">Article</a></li>
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
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
        
        <div class="container">
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-12 m-auto">
                	<h2>Écrivez-nous</h2>
                    <p>Vos messages et avis nous intéressent</p>
                	<div class="formFeilds contact-form form-vertical">
                      <form action="" method="post"  id="contact_form" class="contact-form">	
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
                          	<input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        	<div class="form-group">
							<input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="" required="">                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          	<div class="form-group">
                            <input required="" type="text" id="ContactSubject" name="subject" placeholder="Subject" value="">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                            <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn" value="Send Message">
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
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-12 copyright "><span></span> <a href="https://dotkome.net/ar">All Rights reserved</a></div>
                        <!--End Footer Copyright-->
                        
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