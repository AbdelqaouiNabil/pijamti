<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Account &ndash; Belle Multipurpose Bootstrap 4 Template</title>
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
<body class="page-template belle">
<div class="pageWrapper">
    
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
 
    
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
            <div class="page-title">
        		<div class="wrapper mt-5"><a href="{{route('home')}}" class="btn page-width" style="font-size:bold"><i class="fa-solid fa-house pr-3"></i>HOME</a></div>
            </div>
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">ESPACE ADMIN CONNEXION</h1></div>
            </div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="POST" action="{{route('auth.check')}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
    
                        </div>
                            
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="username">Utilisateur</label>
                                    <input type="text" name="username" placeholder="Nom d'Utilisateur" value="{{old('username')}}">
                                    <span class="text-danger">@error('username'){{$message}} @enderror</span>

                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Mot de passe</label>
                                    <input type="password" value="" name="password" placeholder="Mot de passe" id="CustomerPassword" class="">                        	
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>

                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Connexion">    
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

<!-- belle/login.html   11 Nov 2019 12:22:27 GMT -->
</html>