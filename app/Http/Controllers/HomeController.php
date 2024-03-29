<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Admin;
use App\Models\Promo;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Home;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use App\Notifications\CommandeNotification;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
 


public function index(){
       $products = Product::orderBy('id', 'DESC')->take(8)->get();
       $special = Product::where('special',1)->take(6)->get();
       $categorie = Categorie::all();
       $slider = Home::all();
       $cart = Cart::instance('shopping')->content();
       return view('home',['products'=>$products,'cart'=>$cart,'categorie'=>$categorie,'special'=>$special,'slider'=>$slider]);
   }
   public function shop(){
    $products = Product::orderBy('id', 'DESC')->take(8)->get();
    $categorie = Categorie::all();
    $cart = Cart::instance('shopping')->content();
    return view('shopAll',['products'=>$products,'cart'=>$cart,'categorie'=>$categorie]);

   }

   public function contact(){
    $categorie = Categorie::all();
    $cart = Cart::instance('shopping')->content();

    return view('contact',compact('categorie','cart'));
   }
   public function contactSend(Request $request){
     $request->validate([
          'name'=>'required',
          'email'=>'required|email',
          'phone'=>['required','regex:/^0[5687]/','numeric','digits:10'],
          'subject'=>'required',
          'message'=>'required|min:20'
     ]);
     $admin = Admin::find(1);
     $mytime = Carbon::now();
     $contact = new Contact();
     $contact->nom = $request->input('name');
     $contact->tel = $request->input('phone');
     $contact->email = $request->input('email');
     $contact->subject = $request->input('subject');
     $contact->message = $request->input('message');
     $contact->created_at = $mytime->toDateTimeString();
       
    $contact->save();
    return redirect()->back()->with('sucess','Merci de nous avoir contactez');
    
   }
  //  filter by categorie
  public function filterByCategorie($id){
    $products = DB::table('products')->where('categorie_id',$id)->get();
    $categorie = Categorie::all();
    $cart = Cart::instance('shopping')->content();
    return view('shopAll',['products'=>$products,'cart'=>$cart,'categorie'=>$categorie]);
  }




  public function filterByPriceRange(Request $request){
    $categorie = Categorie::all();
    $cart = Cart::instance('shopping')->content();
    $price = str_replace("$", "", $request->input('filterPrice'));
    $explode_id = explode("-", $price);
    $products = DB::table('products')->whereBetween('price', $explode_id)->get();
    return view('shopAll',['products'=>$products,'cart'=>$cart,'categorie'=>$categorie]);

  }

  


public function filterBySize(Request $request){
  $pro = Product::all();
  $productsArray = array();
  foreach($pro as $product){
    if(in_array($request->input('size'),$product->size)){
      array_push($productsArray,$product);
      
  }
 
}

$categorie = Categorie::all();
$cart = Cart::instance('shopping')->content();
return view('shopAll', ['products'=> $productsArray,'cart'=>$cart,'categorie'=>$categorie]);
}


public function filterByColor(Request $request){
  return $request->input('color');
}







   public function login(){
      return view('login');
   }





   function check(Request $request){
      $request->validate([
          'username'=>'required',
          'password'=>'required|min:5|max:20'
      ]);
      $userInfo = Admin::where('userName','=',$request->username)->first();
        if(!$userInfo){
            return back()->with('fail','Nous ne reconnaissans pas votre email');
        }else{
               if($request->password == $userInfo->password){
                   $request->session()->put('loggedUser',$userInfo->id);
                   return redirect('admin/dashboard');

               }else{
                   return back()->with('fail','Mot de passe incorrect');
               }
        }


   }



   public function logout(){
      if(session()->has('loggedUser')){
          session()->pull('loggedUser');
          return redirect('/auth/login');
      }
 }





 public function VoirProduit($id){
    $cart = Cart::instance('shopping')->content();
    $product = Product::find($id);
    $categorie = Categorie::all();
     return view('productPage',['product'=>$product,'cart'=>$cart,'categorie'=>$categorie]);
 }






 public function ajouterAuCart(Request $request){
    //dd($request);
    $request->validate([
      'size'=>'required',
      'color'=>'required'
  ]);
    $product = Product::findOrFail($request->input('product_id'));
    $img = $product->image;
    $size = $request->input('size');
    $color = $request->input('color');
    $cart= Cart::instance('shopping')->add($product->id,$product->name,$request->input('quantity'),$product->price,0,['image' => $img ,'desc'=>$product->description,'size'=>$size,'color'=>$color,'shipping'=>0]);
    return redirect()->route('cart')->with('sucess','Produit bien ajouter au cart ');
 }




// add to wishlist
 public function addToWishlist($id)
{ 
  $product = Product::find($id);
  $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
    return $cartItem->id === $id;
});

if (!$duplicates->isEmpty()) {
    return redirect()->back()->with('sucess','Pijama déja ajouter à wishlist!');
}

Cart::instance('wishlist')->add($product->id, $product->name, 1, $product->price,0,['image' => $product->image ,'desc'=>$product->description,'size'=>$product->size,'color'=>$product->color])
                          ->associate('App\Product');

return redirect()->back()->with('sucess','Pijama bien ajouter à wishlist!');
} 



public function VoirWishlist(){
  $cart =Cart::instance('wishlist')->content();
  $categorie=Categorie::all();
  return view('wishlist',['cart'=>$cart,'categorie'=>$categorie]);
}



//  delete item from cart 

public function deleteItemFromCart($id){
    $cart = Cart::instance('shopping')->content()->where('rowId',$id);
    
        $remove = Cart::instance('shopping')->remove($id);
          if($remove){

            return back()->with('fail','ressayer plut tard');
      
  }else{
    Session::pull('total', 'default');
    Session::pull('discount', 'default');
    Session::pull('livraison', 'default');

        return back()->with('sucess','le plat est bien supprimer');
  }

}

//  delete item from wishlist 

public function deleteItemFromFavoris($id){
  $cart = Cart::instance('wishlist')->content()->where('rowId',$id);
  
      $remove = Cart::instance('wishlist')->remove($id);
        if($remove){
          return back()->with('fail','ressayer plut tard');
    
}else{
  return back()->with('sucess','le plat est bien supprimer');
}

}


//  delete all items from cart 

public function deleteAllItemFromCart(){
   
    
        $remove = Cart::instance('shopping')->destroy();
          if($remove){
            return back()->with('fail','ressayer plut tard');
      
  }else{
    Session::pull('total', 'default');
    Session::pull('discount', 'default');
    Session::pull('livraison', 'default');
    return back()->with('sucess','Le panier est bien supprimer');
  }

}

//  delete all items from wishlist 

public function deleteAllItemFromFavoris(){
       
  $remove = Cart::instance('wishlist')->destroy();
    if($remove){
      return back()->with('fail','ressayer plut tard');

}else{
return back()->with('sucess','Le panier est bien supprimer');
}

}



 public function cart(Request $request){
         $cart = Cart::instance('shopping')->content();
         $categorie = Categorie::all();
         return view('cart',['cart'=>$cart,'categorie'=>$categorie]);
 }
 public function applyPromoCode(Request $request) {
  $request->validate([
    'promo'=>'required',
]);
        $promo = $request->input('promo');
        $couponCode = Promo::where('code',$promo)->first();
        if($couponCode == null){
          Session::put('discount', 0);
          return redirect()->back()->with('couponFail','votre code promo est Invalide');
        }else{
          Session::put('discount', $couponCode->value);
          return redirect()->back()->with('couponSucess','votre code promo est valide');
        }
}

public function confirme(Request $request){
  $cart = Cart::instance('shopping')->content();
  $fraisLivraison = 0;
  $categorie = Categorie::all();
  $admin = Admin::all();
  $request->validate([
    'name'=>'required',
    'phone' => ['required','regex:/^0[5687]/','numeric','digits:10'],
    'adress' => 'required',
    'city' => 'required',
]);
Session::put('name',$request->input('name'));
Session::put('phone',$request->input('phone'));
Session::put('adress',$request->input('adress'));
Session::put('city',$request->input('city'));

$cities = ['Casa','Mohamadia'];



  if(!in_array($request->input("city"), $cities) ){
    $fraisLivraison = 35;
    $total= ( str_replace(',', '', Cart::instance('shopping')->subtotal())- ( str_replace(',', '', Cart::instance('shopping')->subtotal()) * Session::get('discount')) / 100) + $fraisLivraison   ;
    Session::put('total', $total);
    Session::put('promo', Session::get('discount'));
    Session::put('livraison', $fraisLivraison);
  }else{
    $total= ( str_replace(',', '', Cart::instance('shopping')->subtotal()) - ( str_replace(',', '', Cart::instance('shopping')->subtotal()) * Session::get('discount')) / 100) ;
    Session::put('total', $total);
    Session::put('promo', Session::get('discount'));
    Session::put('livraison', $fraisLivraison);


  }

$info= ['name'=>$request->input('name'),'phone'=>$request->input('phone'),'adress'=>$request->input('adress'),'city'=>$request->input('city')];
return view('confirmeOrder',['cart'=>$cart,'categorie'=>$categorie,'info'=>$info,'fraisLivraison'=>$fraisLivraison]);

}

 public function storeCart(){
  $admin = Admin::all();
if(Cart::instance('shopping')->content()->count() > 0){
 $mytime = Carbon::now();
 $order = new Order();
 $order->nom = Session::get('name');
 $order->tel = Session::get('phone');
 $order->adress = Session::get('adress');
 $order->city = Session::get('city');
 $order->created_at = $mytime->toDateTimeString();
 $order->save();
 Notification::send($admin,new CommandeNotification(Session::get('name')));
 $order->id;
 $cartItems = Cart::instance('shopping')->content();
 foreach($cartItems as $item){
   OrderItem::create([
     'orderId'=> $order->id,
     'proId'=> $item->id,
     'productName'=> $item->name,
     'qty'=> $item->qty,
     'price'=> $item->price,
     'color'=> $item->options->color,
     'size'=> $item->options->size,
     'subtotal'=> $item->subtotal,
     'codepromo'=> Session::get('promo'),
     'livraison'=> Session::get('livraison'),
     'total'=> Session::get('total'),
   ]);
 }
 Cart::instance('shopping')->destroy();
 Session::flush();

 return redirect()->route('cart')->with('saved','Votre commande a été envoyée avec succès, nous vous contacterons pour la confirmer ');
}else{
  return back()->with('fail','votre cart est vide');
}

 
}
}
