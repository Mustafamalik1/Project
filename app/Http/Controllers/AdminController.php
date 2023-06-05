<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;

class AdminController extends Controller
{
    //
    public function view_category(){

        $data=Category::all();
        return view('admin.category' , compact('data'));
    }
    public function add_category(Request $req){
        $data=new category;
        $data->category_name=$req->Cname;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function view_product(){
        $category=category::all();
        return view('admin.product',compact('category'));
    }

    public function add_product(Request $req){
        
        $product=new product();
        $product->category=$req->category;
        $product->name=$req->name;
        $product->description=$req->description;
        $product->price=$req->price;
        $product->discount_price=$req->dis_price;
        $product->quantity=$req->quantity;
        $image=$req->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move(public_path('product') , $imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('message', 'Product Added Successfully');


    }

    public function show_product(){
            $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id){
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');

}
public function update_product($id){
    $product=product::find($id);
    $category=Category::all();
    return view('admin.update_product' ,compact('product','category'));

}
public function update_product_confirm(Request $req ,$id){
        $product=product::find($id);
        $product->name=$req->name;
        $product->description=$req->description;
        $product->price=$req->price;
        $product->discount_price=$req->dis_price;
        $product->quantity=$req->quantity;
        $product->category=$req->category;

        $image=$req->image;
        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $req->image->move('product',$imagename);
            $product->image=$imagename;
        }
    
       
        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');

}


}