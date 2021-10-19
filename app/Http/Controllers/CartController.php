<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function Cart(Request $request){
        $product = Product::find($request->id);
        $cart = new Cart();
        $cart->products_id = $request->id;
        $cart->quantity = 1;
        $cart->total_price = $product->price * $request->quantity;
        $cart->total = 1;
        $cart->save();

        return redirect('/carts');
    }

    public function index(){
        $carts = Cart::all();
        return view('pages.order.cart', ['carts' => $carts]);
        
    }
}