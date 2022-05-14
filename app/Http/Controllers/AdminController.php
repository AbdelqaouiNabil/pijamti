<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];

        return view('admin.dashboard',$data);
    }
    public function addProductForm(){
        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        $categorie = Categorie::all();
        $colors =  DB::table('attribute_values')->where('attribute_id','1')->get();
        $sizes =  DB::table('attribute_values')->where('attribute_id','2')->get();
        return view('admin.addProductForm',['colors'=> $colors,'sizes'=>$sizes,'categorie'=>$categorie],$data);
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

        $data =['loggedUserInfo'=>Admin::where('id','=',session('loggedUser'))->first()];
        return view('admin.addCategorieForm',$data);

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
}
