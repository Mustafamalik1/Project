<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use App\Models\product;
use App\Models\Cart;
use App\Models\order;


class HomeController extends Controller
{ 

    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }
        $product=product::all();
        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home',compact('cart','product'));
        }
        else{
            $product=product::all();
        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home',compact('cart','product'));
        
        }   
    }


    public function index(){
        $product=product::all();
        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home',compact('cart','product'));
        }
        else{
            $product=product::all();
        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home',compact('cart','product'));
        
        }        
       

    
    }
    public function product1(){
        $product=product::paginate(100);
        

        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('product1',compact('cart','product'));
        }
        else{
        $product=product::paginate(100);
        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('product1',compact('cart','product'));
        
        }   
       
    }

    public function product_details($id){
        $product=product::find($id);

        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('product_details',compact('cart','product'));
        }
        else{
        $product=product::find($id);

        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('product_details',compact('cart','product'));
        
        }   
            }

    public function contact(){
        $product=product::all();
        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('contact',compact('cart','product'));
        }
        else{
            $product=product::all();
        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('contact',compact('cart','product'));
        
        }   
        

    }
    public function aboutus(){
        $product=product::all();
        if(Auth::check()){

        Auth::id();
        $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('aboutus',compact('cart','product'));
        }
        else{
            $product=product::all();
        
            $id=Auth::user();
            $cart=Cart::where('user_id','=',$id)->get();
            return view('aboutus',compact('cart','product'));
        
        }   
        

    }

    public function add_cart(Request $req,$id){
        if(Auth::id()){
            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_name=$product->name;
            if($product->discount_price!=null){

            $cart->price=$product->discount_price * $req->quantity;

            }
            else{
            $cart->price=$product->price * $req->quantity;

            }
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$req->quantity;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }

}
public function show_cart(){
    if(Auth::id()){

    $id=Auth::user()->id;
    $cart=Cart::where('user_id','=',$id)->get();
    return view('showcart',compact('cart'));
}
else{
    return redirect('login');
}
}
public function remove_cart($id){
    $cart=Cart::find($id);
    $cart->delete();
    return redirect()->back();
}

public function cash_order(){

    $user=Auth::user();
    $userid=$user->id;
    $data=Cart::where('user_id','=',$userid)->get();
    foreach($data as $data){

        $order=new order;
        $order->name=$data->name;
        $order->email=$data->email;
        $order->phone=$data->phone;
        $order->address=$data->address;
        $order->user_id=$data->user_id;
        $order->product_name=$data->product_name;
        $order->price=$data->price;
        $order->quantity=$data->quantity;
        $order->image=$data->image;
        $order->product_id=$data->product_id;

        $order->payment_status='Cash on delivery';
        $order->delivery_status='Tracking';
        $order->save();
        $cart_id=$data->id;
        $cart=Cart::find($cart_id);
        $cart->delete();
    }
    return redirect()->back()->with('message','Thank You For Ordering, We Will Contact You 
    Soon.'
); 
}



}