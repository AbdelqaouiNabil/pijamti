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
                            <li class="lvl1 parent megamenu"><a href="{{route('home')}}">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-angle-down-l"></i></a>
                            </li>
                        <li class="lvl1 parent megamenu"><a href="#">Product <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                          
                        </li>
                        <li class="lvl1 parent dropdown"><a href="#">Blog <i class="anm anm-angle-down-l"></i></a>
                          <ul class="dropdown">
                            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                            <li><a href="blog-article.html" class="site-nav">Article</a></li>
                          </ul>
                        </li>
                        <li class="lvl1"><a href="#"><b>Buy Now!</b></a></li>
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
            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span></a></li>
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
    	<!--Page Title-->
        @if (Cart::content()->count()>0)
        <div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Votre Cart</h1></div>
      		</div>
		</div>
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
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                                    <a href="{{route('deleteAllItemFromCart')}}" name="clear" class="btn btn-secondary btn--small  small--hide">Vider le panier</a>
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
                
                
                <div class="container mt-4">
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Estimate Shipping and Tax</h5>
							<form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_country">Country</label>
                                    <select id="address_country" name="address[country]" data-default="United States"><option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="---" data-provinces="[]">---</option>
                                        <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                        <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                        <option value="Albania" data-provinces="[]">Albania</option>
                                        <option value="Algeria" data-provinces="[]">Algeria</option>
                                        <option value="Andorra" data-provinces="[]">Andorra</option>
                                        <option value="Angola" data-provinces="[]">Angola</option>
                                        <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                        <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                        <option value="Armenia" data-provinces="[]">Armenia</option>
                                        <option value="Aruba" data-provinces="[]">Aruba</option>
                                        <option value="Austria" data-provinces="[]">Austria</option>
                                        <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                        <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                        <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                        <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                        <option value="Barbados" data-provinces="[]">Barbados</option>
                                        <option value="Belarus" data-provinces="[]">Belarus</option>
                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="Belize" data-provinces="[]">Belize</option>
                                        <option value="Benin" data-provinces="[]">Benin</option>
                                        <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                        <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                        <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                        <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana" data-provinces="[]">Botswana</option>
                                        <option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
                                        <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                        <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                        <option value="Brunei" data-provinces="[]">Brunei</option>
                                        <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                        <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                        <option value="Burundi" data-provinces="[]">Burundi</option>
                                        <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                        <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                        <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                        <option value="Bonaire, Sint Eustatius and Saba" data-provinces="[]">Caribbean Netherlands</option>
                                        <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                        <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                        <option value="Chad" data-provinces="[]">Chad</option>
                                        <option value="Chile" data-provinces="[]">Chile</option>
                                        <option value="Comoros" data-provinces="[]">Comoros</option>
                                        <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                        <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                        <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                        <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                        <option value="Croatia" data-provinces="[]">Croatia</option>
                                        <option value="Cuba" data-provinces="[]">Cuba</option>
                                        <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                        <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                        <option value="Czech Republic" data-provinces="[]">Czech Republic</option>
                                        <option value="Côte d'Ivoire" data-provinces="[]">Côte d'Ivoire</option>
                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                        <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                        <option value="Dominica" data-provinces="[]">Dominica</option>
                                        <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                        <option value="Finland" data-provinces="[]">Finland</option>
                                        <option value="France" data-provinces="[]">France</option>
                                        <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                        <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                        <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                        <option value="Gabon" data-provinces="[]">Gabon</option>
                                        <option value="Gambia" data-provinces="[]">Gambia</option>
                                        <option value="Georgia" data-provinces="[]">Georgia</option>
                                        <option value="Germany" data-provinces="[]">Germany</option>
                                        <option value="Ghana" data-provinces="[]">Ghana</option>
                                        <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                        <option value="Greece" data-provinces="[]">Greece</option>
                                        <option value="Greenland" data-provinces="[]">Greenland</option>
                                        <option value="Jersey" data-provinces="[]">Jersey</option>
                                        <option value="Jordan" data-provinces="[]">Jordan</option>
                                        <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                        <option value="Kenya" data-provinces="[]">Kenya</option>
                                        <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                        <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                        <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                        <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                        <option value="Latvia" data-provinces="[]">Latvia</option>
                                        <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                        <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                        <option value="Liberia" data-provinces="[]">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                        <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                        <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                        <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                        <option value="Macao" data-provinces="[]">Macau SAR China</option>
                                        <option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
                                        <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                        <option value="Malawi" data-provinces="[]">Malawi</option>
                                        <option value="Monaco" data-provinces="[]">Monaco</option>
                                        <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                        <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                        <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                        <option value="Morocco" data-provinces="[]">Morocco</option>
                                        <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                        <option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
                                        <option value="Namibia" data-provinces="[]">Namibia</option>
                                        <option value="Nauru" data-provinces="[]">Nauru</option>
                                        <option value="Nepal" data-provinces="[]">Nepal</option>
                                        <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                        <option value="Samoa" data-provinces="[]">Samoa</option>
                                        <option value="San Marino" data-provinces="[]">San Marino</option>
                                        <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                        <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                        <option value="Senegal" data-provinces="[]">Senegal</option>
                                        <option value="Serbia" data-provinces="[]">Serbia</option>
                                        <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                        <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                        <option value="Singapore" data-provinces="[]">Singapore</option>
                                        <option value="Sint Maarten" data-provinces="[]">Sint Marteen</option>
                                        <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                        <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                        <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                        <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                        <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                        <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                        <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                        <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                        <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                        <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                        <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                        <option value="Sudan" data-provinces="[]">Sudan</option>
                                        <option value="Suriname" data-provinces="[]">Suriname</option>
                                        <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                        <option value="Swaziland" data-provinces="[]">Swaziland</option>
                                        <option value="Sweden" data-provinces="[]">Sweden</option>
                                        <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                        <option value="Syria" data-provinces="[]">Syria</option>
                                        <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                        <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                        <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                        <option value="Togo" data-provinces="[]">Togo</option>
                                        <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                        <option value="Tonga" data-provinces="[]">Tonga</option>
                                        <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                        <option value="Turkey" data-provinces="[]">Turkey</option>
                                        <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                        <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                        <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                        <option value="Uganda" data-provinces="[]">Uganda</option>
                                        <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                        <option value="United Arab Emirates" >United Arab Emirates</option>
                                        <option value="United Kingdom" data-provinces="[]">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                        <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                        <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                        <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                        <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                        <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                        <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                        <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                        <option value="Yemen" data-provinces="[]">Yemen</option>
                                        <option value="Zambia" data-provinces="[]">Zambia</option>
                                        <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option></select>
                                </div>
    
                                <div class="form-group">
                                    <label>State</label>
                                    <select id="address_province" name="address[province]" data-default="">
                                      <option value="Alabama">Alabama</option>
                                      <option value="Alaska">Alaska</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Arizona">Arizona</option>
                                      <option value="Arkansas">Arkansas</option>
                                      <option value="California">California</option>
                                      <option value="Colorado">Colorado</option>
                                      <option value="Connecticut">Connecticut</option>
                                      <option value="Delaware">Delaware</option>
                                      <option value="District of Columbia">District of Columbia</option>
                                      <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                      <option value="Florida">Florida</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Hawaii">Hawaii</option>
                                      <option value="Idaho">Idaho</option>
                                      <option value="Illinois">Illinois</option>
                                      <option value="Indiana">Indiana</option>
                                      <option value="Iowa">Iowa</option>
                                      <option value="Kansas">Kansas</option>
                                      <option value="Kentucky">Kentucky</option>
                                      <option value="Louisiana">Louisiana</option>
                                      <option value="Maine">Maine</option>
                                      <option value="Marshall Islands">Marshall Islands</option>
                                      <option value="Maryland">Maryland</option>
                                      <option value="Massachusetts">Massachusetts</option>
                                      <option value="Michigan">Michigan</option>
                                      <option value="Minnesota">Minnesota</option>
                                      <option value="Mississippi">Mississippi</option>
                                      <option value="Missouri">Missouri</option>
                                      <option value="Montana">Montana</option>
                                      <option value="Nebraska">Nebraska</option>
                                      <option value="Nevada">Nevada</option>
                                      <option value="New Hampshire">New Hampshire</option>
                                      <option value="New Jersey">New Jersey</option>
                                      <option value="New Mexico">New Mexico</option>
                                      <option value="New York">New York</option>
                                      <option value="North Carolina">North Carolina</option>
                                      <option value="North Dakota">North Dakota</option>
                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                      <option value="Ohio">Ohio</option>
                                      <option value="Oklahoma">Oklahoma</option>
                                      <option value="Oregon">Oregon</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Pennsylvania">Pennsylvania</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Rhode Island">Rhode Island</option>
                                      <option value="South Carolina">South Carolina</option>
                                      <option value="South Dakota">South Dakota</option>
                                      <option value="Tennessee">Tennessee</option>
                                      <option value="Texas">Texas</option>
                                      <option value="Utah">Utah</option>
                                      <option value="Vermont">Vermont</option>
                                      <option value="Virgin Islands">Virgin Islands</option>
                                      <option value="Virginia">Virginia</option>
                                      <option value="Washington">Washington</option>
                                      <option value="West Virginia">West Virginia</option>
                                      <option value="Wisconsin">Wisconsin</option>
                                      <option value="Wyoming">Wyoming</option>
                                      <option value="Armed Forces Americas">Armed Forces Americas</option>
                                      <option value="Armed Forces Europe">Armed Forces Europe</option>
                                      <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address_zip">Postal/Zip Code</label>
                                    <input type="text" id="address_zip" name="address[zip]">
                                </div>
    
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Calculate shipping"></div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">	
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money">$735.00</span></span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>
                                <span class="col-12 col-sm-6 text-right">$10.00</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                <span class="col-12 col-sm-6 text-right">Free shipping</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">$1001.00</span></span>
                              </div>
                              <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                              <p class="cart_tearm">
                                <label>
                                  <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="">
                                  I agree with the terms and conditions
								</label>
                              </p>
                              <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Proceed To Checkout" disabled="disabled">
                              <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                              <p><a href="#;">Checkout with Multiple Addresses</a></p>
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