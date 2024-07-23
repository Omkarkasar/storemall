<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;


class ProductController extends Controller
{
    function index()
    {
      $data=Product::all();
      return view('product',['products'=>$data]);
    }

    function detail($id)
    {
          $data=Product::find($id);
          return view('detail',['product'=>$data]);
    }

    // function search(Request $req)
    // {
    //       // return $req->input();
    //       return $data=Product::where('name','like','%'.$req->input('query').'%')->get();
    //       // return view('search',['products'=>$data]);
    // }
    public function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
{
    // Check if the session has the 'user' key
    if($req->session()->has('user'))
    {
        // Retrieve the user session data and check if it's an array
        $userSession = $req->session()->get('user');
        
        if(is_array($userSession) && isset($userSession['id']))
        {
            // Create a new Cart instance
            $cart = new Cart;
            $cart->user_id = $userSession['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            
            return redirect('/');
        }
        else
        {
            return redirect('/login')->withErrors('Invalid user session data.');
        }
    }
    else
    {
        return redirect('/login');
    }
}

    // function addToCart(Request $req)
    // {
    //   if($req->session()->has('user'))
    //   {
    //     $cart=new Cart;
    //     $cart->user_id=$req->session()->get('user')['id'];
    //     $cart->product_id=$req->product_id;
    //     $cart->save();
    //     return redirect('/');
    //   }
    //   else
    //   {
    //     return redirect('/login');
    //   }
    // }
   
//  static function cartItem()
//     {
//         $userId=Session::get('user')['id'];
//         return Cart::where('user_id','$userId')->count();
//     }
    
}
