<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/produit/{id}', [HomeController::class,'VoirProduit'])->name('VoirProduit');
Route::get('/pijamti/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/pijamti/shop',[HomeController::class,'shop'])->name('shop');

Route::post('/produit/add', [HomeController::class,'ajouterAuCart'])->name('ajouterAuCart');
Route::get('/menu/deleteItemFromCart/{id}',[HomeController::class,'deleteItemFromCart'])->name('deleteItemFromCart');
Route::get('/menu/deleteAllItemsFromCart',[HomeController::class,'deleteAllItemFromCart'])->name('deleteAllItemFromCart');

// FAVORIS
Route::get('/produit/favoris/{id}', [HomeController::class,'addToWishlist'])->name('addToWishlist');
Route::get('/produit/fav/Voir', [HomeController::class,'VoirWishlist'])->name('VoirWishlist');

Route::get('/menu/deleteItemFromFavoris/{id}',[HomeController::class,'deleteItemFromFavoris'])->name('deleteItemFromFavoris');
Route::get('/menu/deleteAllItemsFromFavoris',[HomeController::class,'deleteAllItemFromFavoris'])->name('deleteAllItemFromFavoris');






Route::get('/auth/login', [HomeController::class,'login'])->name('login');
Route::post('/auth/check',[HomeController::class,'check'])->name('auth.check');
Route::post('/auth/logout',[HomeController::class,'logout'])->name('auth.logout');

Route::group(['middleware' => 'AuthCheck'],function(){

Route::get('/admin/dashboard',[AdminController::class,'index'])->name('dashboard');

Route::get('/admin/produit/ajouter',[AdminController::class,'addProductForm'])->name('addProductForm');
Route::post('/admin/produit/ajouter/submit',[AdminController::class,'addProduct'])->name('addProduct');

Route::get('/admin/categorie/ajouter',[AdminController::class,'addCategorieForm'])->name('addCategorieForm');
Route::post('/admin/categorie/ajouter/submit',[AdminController::class,'addCategorie'])->name('addCategorie');
});