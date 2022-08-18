<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Home;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
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



 public function cart(){
         $cart = Cart::instance('shopping')->content();
         $categorie = Categorie::all();
         return view('cart',['cart'=>$cart,'categorie'=>$categorie]);
 }

 public function applyPromoCode(Request $request) {
    if($request->ajax){
        $data = $request->all();
        $couponCode = Promo::where('code',$data['code']);
echo "<pre>";print_r($couponCode);die;
    }
}

 public function storeCart(Request $request){
  $admin = Admin::all();
  $request->validate([
    'name'=>'required',
    'phone' => ['required','regex:/^0[5687]/','numeric','digits:10'],
    'adress' => 'required',
    'city' => 'required',
]);
if(Cart::instance('shopping')->content()->count() > 0){
  $mytime = Carbon::now();
  $order = new Order();
  $order->nom = $request->input('name');
  $order->tel = $request->input('phone');
  $order->adress = $request->input('adress');
  $order->city = $request->input('city');
  $order->created_at = $mytime->toDateTimeString();
    
 $order->save();
 Notification::send($admin,new CommandeNotification($request->input('name')));

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
     'total'=> Cart::priceTotal(),
   ]);
 }
 Cart::instance('shopping')->destroy();

 return redirect()->route('cart')->with('saved','Votre commande a été envoyée avec succès, nous vous contacterons pour la confirmer ');
}else{
  return back()->with('fail','votre cart est vide');

}

 
}
}
