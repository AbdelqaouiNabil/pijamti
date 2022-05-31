<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    public function index(){
        $chart_options = [
            'chart_title' => 'Commandes par mois',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Order',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);
        $chart_options = [
            'chart_title' => 'Commandes par jour',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Order',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
            'chart_color' => '80, 79, 145',
            
        ];

        $chart2= new LaravelChart($chart_options);

       
        $chart_options = [
            'chart_title' => 'Apport quotidien',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\OrderItem',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'total',
            'chart_type' => 'bar',
            'chart_color' => '80, 79, 145',
            
        ];
       




        $chart3= new LaravelChart($chart_options);


         
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $categories = Categorie::all();
        $categoriesCount = Categorie::all()->count();
        $productCount = Product::all()->count();
        $orderCount = Order::all()->count();
        $amount = OrderItem::all()->sum('total');;
        $admin = Admin::find(1);
        return view('admin.dashboard',['categories'=>$categories,'admin'=>$admin,'chart1'=>$chart1,'chart2'=>$chart2,'chart3'=>$chart3,'categoriesCount'=>$categoriesCount,'productCount'=> $productCount,'orderCount'=>$orderCount,'amount'=>$amount],$data,);
    }
    
    public function pijama($id){
        $admin = Admin::find(1);
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $pijama = DB::table('products')->where('categorie_id',$id)->get();
        $categories = Categorie::all();
        $cat = DB::table('categories')->where('id',$id)->get();
        if($pijama->count() > 0){
            return view('admin.pyjamas.vueProduct',['categories'=>$categories,'pijama'=>$pijama,'cat'=>$cat,'admin'=>$admin],$data);
        }
        else{
            return redirect()->route('dashboard')->with('noProduct','Pas De pyjama  cette categorie');
        }
    }


      // edit product 
    public function editPijama($id){
        $admin = Admin::find(1);
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $colors =  DB::table('attribute_values')->where('attribute_id','1')->get();
        $sizes =  DB::table('attribute_values')->where('attribute_id','2')->get();
        $pijama = Product::find($id);
        $categories = Categorie::all();

        return view('admin.editProduct', ['categories'=>$categories,'colors'=> $colors,'sizes'=>$sizes,'pijama' => $pijama,'admin'=>$admin],$data);
    }

    public function edit(Request $request,$id){
        $name =$request->input('name');
        $description =$request->input('description'); 
        $categorie = $request->input('categorie');
        $price =str_replace("MAD"," ",$request->input('prix'));
        $BarredPrice =str_replace("MAD"," ",$request->input('PrixBarre'));
        $edit=array('name'=>$name,'description'=>$description,'price'=>$price,'BarredPrice'=>$BarredPrice,'color'=>$request->input('checkColor'),'size'=>$request->input('checkSize'),'categorie_id'=>$categorie,'special'=>$request->input('special'));
        DB::table('products')->where('id',$id)->update($edit);
        return redirect()->route('dashboard')->with('sucess','pijama bien modifier');
    }


     // edit product price
    public function editPijamaPrice($id){
        $admin = Admin::find(1);
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $categories = Categorie::all();
        $pijama = Product::find($id);
        return view('admin.editPrice', ['pijama' => $pijama,'categories'=>$categories,'admin'=>$admin],$data);
    }

    
    public function editPrice(Request $request,$id){
        $price =str_replace("MAD"," ",$request->input('prix'));
        $BarredPrice =str_replace("MAD"," ",$request->input('PrixBarre'));
        $edit=array('price'=>$price,'BarredPrice'=>$BarredPrice);
        DB::table('products')->where('id',$id)->update($edit);
        return redirect()->route('dashboard')->with('sucess','prix bien modifier');
    }


    // edit product Image


    public function del(Request $request){
        $del = $request->input('delid');
        
               Product::whereIn('id',$del)->delete();
              return redirect()->back();
    }
    public function addProductForm(){
        $admin = Admin::find(1);
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $categorie = Categorie::all();
        $colors =  DB::table('attribute_values')->where('attribute_id','1')->get();
        $sizes =  DB::table('attribute_values')->where('attribute_id','2')->get();
        return view('admin.addProductForm',['colors'=> $colors,'sizes'=>$sizes,'categories'=>$categorie,'admin'=>$admin],$data);
    }
    public function addProduct(Request $request){
        $request->validate([
            'nom'=>'required',
            'description' => 'required',
            'prix' => 'required',
            'PrixBarre' => 'required',
            'checkColor' => 'required',
            'checkSize' => 'required',
            'categorie' => 'required',
            'tags' => 'required',
        ]);

        $tags = explode(",", $request->tags);
        $name = $request->input('nom');
        $description = $request->input('description');
        $categorie = $request->input('categorie');
        $price =str_replace("$"," ",$request->input('prix'));
        $barredPrice =str_replace("$"," ",$request->input('PrixBarre'));
        // image principale
        Validator::make($request->all(),['image'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $ext = $request->file('image')->getClientOriginalExtension();
        $imageStringFormat = str_replace(" ","",$name);
        $imageName = $imageStringFormat."." .$ext;
        $file = $request->file('image');
        $img = \Image::make($file)->fit(535,750)->save(storage_path().'/app/public/images/'.$imageName);
        //    image hover
        Validator::make($request->all(),['imageHover'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $extHover = $request->file('image')->getClientOriginalExtension();
        $imageStringFormatHover = str_replace(" ","","$name-hover");
        $imageNameHover = $imageStringFormatHover."." .$extHover;
        $fileHover = $request->file('imageHover');
        $imgHover = \Image::make($fileHover)->fit(535,750)->save(storage_path().'/app/public/images/'.$imageNameHover);
        $newProduct =array('name'=> $name,'description'=> $description,'price'=> $price,'image'=>$imageName,'imageHover'=>$imageNameHover,'BarredPrice'=>$barredPrice,'color'=>$request->input('checkColor'),'size'=>$request->input('checkSize'),'categorie_id'=>$categorie,'special'=>$request->input('special'));
        $created = Product::create($newProduct);
        $created->tag($tags);
        if($created){
            return redirect()->back()->with('sucess','pijama bien ajouter');
        }else{
            return redirect()->back()->with('fail','ressayer plus tard');

        }
       
    }

    // add categorie form
    public function addCategorieForm(){
        $admin = Admin::find(1);
        $categories = Categorie::all();
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        return view('admin.addCategorieForm',['categories'=>$categories,'admin'=>$admin],$data);

    }


    public function addCategorie(Request $request){
        $request->validate([
            'nom'=>'required',
        ]);
       
        $name = $request->input('nom');
        // image principale
        Validator::make($request->all(),['image'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $ext = $request->file('image')->getClientOriginalExtension();
        $imageStringFormat = str_replace(" ","",$name);
        $imageName = $imageStringFormat."." .$ext;
        $file = $request->file('image');
        $img = \Image::make($file)->fit(400,511)->save(storage_path().'/app/public/images/categorie/'.$imageName);
        $newCategorie =array('name'=> $name,'image'=>$imageName);
        $created = DB::table('categories')->insert($newCategorie);
        if($created){
            return redirect()->back()->with('sucess','Categorie bien ajouter');
        }else{
            return redirect()->back()->with('fail','ressayer plus tard');

        }
       
    }

     // order
public function orders(){
    $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
    $admin = Admin::find(1);
    $orders = Order::orderBy('created_at', 'DESC')->get();
    $categorie = Categorie::all();
 
    
    $orderItems = DB::table('order_items')->get();
    foreach ($admin->unreadNotifications as $notification) {
                $notification->markAsRead();
    }
    return view('admin.pyjamas.vueOrders',['categories'=>$categorie,'orders'=>$orders,'items'=>$orderItems,'admin'=>$admin],$data);
   
   

}

public function removeOrder($id){
    $orders = DB::table('orders')->where('id', $id)->delete();
    $order_items = DB::table('order_items')->where('orderId', $id)->delete();
    return redirect()->back()->with('alert',"Commande bien supprimer");
}

public function delMultipleOrder(Request $request){
    $del = $request->input('delid');
    $orders = DB::table('orders')->whereIn('id', $del)->delete();
    $order_items = DB::table('order_items')->whereIn('orderId', $del)->delete();
          
    return redirect()->back();
}

public function changeAdminInfoForm(){
    $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
    $categories = Categorie::all();
    $admin = Admin::find(1);
    return view('admin.changeAdminInfo',['categories'=>$categories,'admin'=>$admin],$data);
  
}

public function changeAdminInfo(Request $request){
    $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
    $request->validate([
        'username'=>'required|max:50',
        'password'=>'required|min:6|max:13',
        'image'=>'required',
    ]);
    Validator::make($request->all(),['image'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
    $ext = $request->file('image')->getClientOriginalExtension();
    $imageStringFormat = str_replace(" ","",$request->input('username'));
    $imageName = $imageStringFormat."." .$ext;
    $file = $request->file('image');
    $img = \Image::make($file)->fit(50,50)->save(storage_path().'/app/public/images/adminProfile/'.$imageName);
    $admin = Admin::find($data['loggedUserInfo']->id);
 
   $admin->userName = $request->input('username');
   $admin->password = Hash::make($request->input('password'));
   $admin->profileImage = $imageName;
   $admin->save();

    session()->pull('loggedUser');
    return redirect('/auth/login');


}

}
