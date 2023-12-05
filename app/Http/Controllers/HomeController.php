<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\brand;
use App\Models\product;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }
            elseif($usertype=='admin'){
                return view('admin.dashboard');
            }
        }
    }
    function addbrand(){
        return view('admin.addbrand');
    }
    function addproduct(){
        $data=brand::all();
        return view('admin.addproduct',compact('data'));
    }
    function addbranddata(Request $request){
        $data = new brand();
        $data->name=$request->input('name');
        $data->description=$request->input('desc');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('images',$image_name);
            $data->image=$image_name;
        }
        $data->save();
        return back();

    }
    function inserproduct(Request $request){
        $data=new product();
        $number=mt_rand(1000000000,9999999999);
        $barcode=$request['barcode']=$number;
        if($this->barcodeexist($number)){
            $number=mt_rand(1000000000,999999999);
        }
        $data->barcode=$barcode;
        $data->name=$request->input('name');
        $data->price=$request->input('price');
        $data->brand_id=$request->input('brand');
        $data->description=$request->input('desc');
        //image
        if($request->hasFile('image')){
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('images',$image_name);
            $data->image=$image_name;
        }
        $data->save();
        return back();


    }
    public function barcodeexist($number){
        return product::wherebarcode($number)->exists();
    }
    function viewproduct(Request $request){
       $search=$request->input('search');
       $query=product::query();
       if($search){
        $query->where('name','like','%'.$search.'%');
       }
        $data = $query->paginate(2);
        return view('admin.viewproduct', compact('data'));
    }
    function viewbrand(){
        $data=brand::all();
        return view('admin.viewbrand',compact('data'));
    }
    function deleteproduct(string $id){
        $data=product::destroy($id);
        return back();
    }
    function updateproduct($id){
        $product=product::find($id);
        $brand=brand::all();
        return view('admin.updateproduct',compact('product','brand'));
    }
    function insertupdateddata(Request $request,$id){
        $data=product::find($id);
        $data->barcode=$data->barcode;
        $data->name=$request->input('name');
        $data->price=$request->input('price');
        $data->brand_id=$request->input('brand');
        $data->description=$request->input('desc');
        //image
        if($request->hasFile('image')){
            $destination='images/'.$data->image;
            if(File::exists($destination)){
                File::delete();
            }
            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $image_name=time().".".$ext;
            $image->move('images',$image_name);
            $data->image=$image_name;
        }
        $data->save();
        return redirect('viewproduct');
    }
}
