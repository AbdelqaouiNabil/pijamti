@extends('layouts.shop')
@section('body')
<div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
    <div class="productList">
        <!--Toolbar-->
        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
        <div class="toolbar">
            <div class="filters-toolbar-wrapper">
                <div class="row">
                    <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                        <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                            <img src="{{asset('images/grid.jpg')}}" alt="Grid" />
                        </a>
                        <a href="shop-listview.html" title="List View" class="change-view">
                            <img src="{{asset('images/list.jpg')}}" alt="List" />
                        </a>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                        <span class="filters-toolbar__product-count">Nombre de Produit:  {{$products->count()}}</span>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4 text-right">
                        <div class="filters-toolbar__item">
                              <label for="SortBy" class="hidden">Sort</label>
                              <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                <option value="title-ascending" selected="selected">Sort</option>
                                <option>Price, low to high</option>
                                <option>Price, high to low</option>
                                <option>Date, new to old</option>
                                <option>Date, old to new</option>
                              </select>
                              <input class="collection-header__default-sort" type="hidden" value="manual">
                        </div>
                    </div>

                </div>
            </div>
        </div>
<div class="grid-products grid--view-items">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
            <!-- start product image -->
            <div class="product-image">
                <!-- start product image -->
                <a href="/produit/{{$product->id}}">
                    <!-- image -->
                    <img class="primary blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$product->image)}}" src="{{Storage::disk('local')->url('images/'.$product->image)}}" alt="image" title="product">
                    <!-- End image -->
                    <!-- Hover image -->
                    <img class="hover blur-up lazyload" data-src="{{Storage::disk('local')->url('images/'.$product->imageHover)}}" src="{{Storage::disk('local')->url('images/'.$product->imageHover)}}" alt="image" title="product">
                    <!-- End hover image -->
                </a>
                <!-- end product image -->
                

                <!-- Start product button -->
                <a class="variants add" href="/produit/{{$product->id}}">
                    <button class="btn btn-addto-cart" type="button">Voir Produit</button>
                </a>
                <div class="button-set">
                  
                    <div class="wishlist-btn">
                        <a class="wishlist add-to-wishlist" href="/produit/favoris/{{$product->id}}" title="Add to Wishlist">
                            <i class="icon anm anm-heart-l"></i>
                        </a>
                    </div>
                    
                </div>
                <!-- end product button -->
            </div>
            <!-- end product image -->

            <!--start product details -->
            <div class="product-details text-center">
                <!-- product name -->
                <div class="product-name">
                    <a href="/produit/{{$product->id}}">{{$product->name}}</a>
                </div>
                <!-- End product name -->
                <div class="product-name">
                    <a href="/produit/{{$product->id}}">{{$product->description}}</a>
                </div>
                <!-- product price -->
                <div class="product-price">
                    <span class="old-price">{{$product->BarredPrice}}</span>
                    <span class="price">{{$product->price}}</span>
                </div>
                <!-- End product price -->
                
                <!-- End Variant -->
            </div>
            <!-- End product details -->
            
        </div>
        @endforeach
       
        
   
    </div>
</div>
@endsection