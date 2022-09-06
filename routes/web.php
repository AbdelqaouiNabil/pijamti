<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;











Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/produit/{id}', [HomeController::class,'VoirProduit'])->name('VoirProduit');
Route::get('/pijamti/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/pijamti/shop',[HomeController::class,'shop'])->name('shop');

Route::post('/promo',[HomeController::class,'applyPromoCode'])->name('promo');

Route::post('/pijamti/commande/confirme',[HomeController::class,'confirme'])->name('confirme');
Route::post('/pijamti/commander',[HomeController::class,'storeCart'])->name('storeCart');


Route::get('/pijamti/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/pijamti/contact/envoyer',[HomeController::class,'contactSend'])->name('contactSend');



Route::post('/produit/add', [HomeController::class,'ajouterAuCart'])->name('ajouterAuCart');
Route::get('/menu/deleteItemFromCart/{id}',[HomeController::class,'deleteItemFromCart'])->name('deleteItemFromCart');
Route::get('/menu/deleteAllItemsFromCart',[HomeController::class,'deleteAllItemFromCart'])->name('deleteAllItemFromCart');

// FAVORIS
Route::get('/produit/favoris/{id}', [HomeController::class,'addToWishlist'])->name('addToWishlist');
Route::get('/produit/fav/Voir', [HomeController::class,'VoirWishlist'])->name('VoirWishlist');

Route::get('/menu/deleteItemFromFavoris/{id}',[HomeController::class,'deleteItemFromFavoris'])->name('deleteItemFromFavoris');
Route::get('/menu/deleteAllItemsFromFavoris',[HomeController::class,'deleteAllItemFromFavoris'])->name('deleteAllItemFromFavoris');

// filter routes

Route::get('/pijamti/shop/filter/{id}',[HomeController::class,'filterByCategorie'])->name('filterByCategorie');
Route::post('/pijamti/shop/filterByPrice',[HomeController::class,'filterByPriceRange'])->name('filterByPriceRange');


Route::post('/pijamti/shop/filterBySize',[HomeController::class,'filterBySize'])->name('filterBySize');
Route::post('/pijamti/shop/filterByColor',[HomeController::class,'filterByColor'])->name('filterByColor');


Route::get('/auth/login', [HomeController::class,'login'])->name('login');
Route::post('/auth/check',[HomeController::class,'check'])->name('auth.check');
Route::post('/auth/logout',[HomeController::class,'logout'])->name('auth.logout');



Route::group(['middleware' => 'AuthCheck'],function(){

Route::get('/admin/dashboard',[AdminController::class,'index'])->name('dashboard');
Route::post('admin/delete',[AdminController::class,'del'] )->name('del');



// ajouter banner
Route::get('admin/slider/form',[AdminController::class,'addSliderForm'] )->name('addSliderForm');
Route::post('admin/slider/ajouter',[AdminController::class,'addSlider'] )->name('addSlider');
Route::get('admin/slider/voir',[AdminController::class,'showSliders'] )->name('showSliders');
Route::post('admin/slider/supprimer',[AdminController::class,'delBanners'] )->name('delBanners');

Route::get('admin/pijama/{id}',[AdminController::class,'editPijama'] )->name('editPijama');
Route::post('admin/pijama/edit/{id}',[AdminController::class,'edit'] )->name('edit');

Route::get('admin/pijama/EditPriceForm/{id}',[AdminController::class,'editPijamaPrice'] )->name('editPijamaPrice');
Route::post('admin/pijama/editPrice/{id}',[AdminController::class,'editPrice'] )->name('editPrice');


Route::get('/admin/product/add',[AdminController::class,'addProductForm'])->name('addProductForm');
Route::post('/admin/product/add/submit',[AdminController::class,'addProduct'])->name('addProduct');

Route::get('/admin/categorie/ajouter',[AdminController::class,'addCategorieForm'])->name('addCategorieForm');
Route::post('/admin/categorie/ajouter/submit',[AdminController::class,'addCategorie'])->name('addCategorie');

Route::get('/admin/pijama/categorie/{id}',[AdminController::class,'pijama'])->name('pijama');

Route::get('/admin/listeDesCommandes',[AdminController::class,'orders'])->name('Orders');
Route::get('admin/order/remove/{id}',[AdminController::class,'removeOrder'])->name('removeorder');
Route::post('admin/order/remove/Multiple',[AdminController::class,'delMultipleOrder'])->name('delMultipleOrder');


Route::post('admin/change',[AdminController::class,'changeAdminInfo'])->name('changeAdminInfo');
Route::get('admin/changeAdminInfo/form',[AdminController::class,'changeAdminInfoForm'])->name('changeAdminInfoForm');


Route::get('admin/contact/message',[AdminController::class,'contactTable'])->name('contactTable');
Route::post('admin/contact/message/supprimer',[AdminController::class,'delMessage'])->name('delMessage');



// add promo code 
Route::get('/admin/promocode/form','AdminController@addCouponCode')->name('addCouponCode');
Route::post('/admin/promocode/add','AdminController@addPromo')->name('addPromo');


Route::get('/admin/listeDesCodesPromo',[AdminController::class,'promoCodes'])->name('promoCodes');
Route::get('admin/promo/remove/{id}',[AdminController::class,'deletePromo'])->name('deletePromo');

});