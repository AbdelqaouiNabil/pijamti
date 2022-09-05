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
@livewireStyles

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
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
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
                        <div class="text-center">
                            <p class="top-header_middle-text">Meillieure PIJAMAS</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
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
                            <img src="{{asset('/images/logo.svg')}}" alt="Belle Multipurpose Html Template"
                                title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="#">Acceuil <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="{{route('shop')}}">pyjama<i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>

                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Categories <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        @foreach ($categorie as $categorieDesktop)
                                        <li><a href="{{url('pijamti/shop/filter/'.$categorieDesktop->id)}}"
                                                class="site-nav">{{$categorieDesktop->name}}</a></li>

                                        @endforeach
                                    </ul>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">à propos <i
                                            class="anm anm-angle-down-l"></i></a>

                                <li class="lvl1"><a href="{{route('contact')}}"><b>Contactez nous</b> <i
                                            class="anm anm-angle-down-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('images/logo.svg')}}" alt="Belle Multipurpose Html Template"
                                    title="Belle Multipurpose Html Template" />
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

                <li class="lvl1 parent megamenu"><a href="{{route('shop')}}"> Categories <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        @foreach ($categorie as $categorieMobile)
                        <li><a href="{{url('pijamti/shop/filter/'.$categorieMobile->id)}}"
                                class="site-nav">{{$categorieMobile->name}}</a></li>


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
            <div class="page section-header text-center">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Confirmer Vos Information</h1>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer ">
                        <form action="{{route('storeCart')}}" method="POST" >
                            @csrf
                            <table class="table">
                                <tbody>
                                    <tr>

                                        <td><label for="username">Nom et Prénom :</label></td>
                                        <td><span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{$info['name']}}</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td> <label for="username">Téléphone :</label>
                                        </td>
                                        <td>
                                            <span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{$info['phone']}}</span>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td> <label for="username">Ville :</label>
                                        </td>
                                        <td>
                                            <span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{$info['city']}}</span>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td> <label for="username">Adresse :</label>

                                        </td>
                                        <td>
                                            <span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{$info['adress']}}</span>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td> <label for="username">Total des produits :</label>


                                        </td>
                                        <td>
                                            <span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{Cart::subtotal()}}</span>

                                    </tr>

                                    <tr>
                                        <td> <label for="username">Promotion :</label>
                                        </td>
                                        <td>
                                            @if (Session::get('discount'))
                                            <span class="ml-5 cart__meta small--text-left cart-flex-item">
                                                    - {{Session::get('discount')}} %
                                                </span>

                                                @else

                                                <span class="ml-5 cart__meta small--text-left cart-flex-item">
                                                        - 0 %
                                                    </span>
                                                    @endif
                                        </td>
                                    </tr>
                                    <tr>


                                        <td> <label for="username">Frais de livraison :</label>
                                        </td>
                                        <td> <span
                                                class="ml-5 cart__meta small--text-left cart-flex-item">{{$fraisLivraison}}
                                                MAD</span></td>
                                    </tr>

                                  
                                    <tr>

                                        <td><label for="username">Total à payer :</label></td>
                                        <td> @if (Session::get('total'))
                                            <span class="ml-5 cart__meta small--text-left cart-flex-itemml-5 cart__meta small--text-left cart-flex-item">
                                                    {{Session::get('total')}} MAD
                                                </span>
        
                                                @else
        
                                                <span class="ml-5 cart__meta small--text-left cart-flex-item">
                                                        {{Cart::subTotal()}} MAD
                                                    </span>
                                                    @endif</td>
                                    </tr>



                                       <tr>
                                           <td colspan="4" ><input type="submit" class="btn mb-3" value="Confirmer">
                                           </td>
                                       </tr>

                                       <tr>
                                        <td colspan="4" > <p> - Livraison Casa Mohamadia Gratuite<br> - Hors Casablanca 35 MAD</p>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                        </form>
                    </div>

                </div>







            </div>






        </div>
        <!--End Body Content-->


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