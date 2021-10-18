<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function getCart(){
    //     return view('pages.order.cart');
    // }

    public function Cart(Request $request){
        $product = Product::find($request->id);
        $cart = new Cart();
        $cart->products_id = $request->id;
        $cart->quantity = $request->quantity;
        $cart->total_price = $request->total_price;
        $cart->total = $request->total;
        $cart->save();

        return redirect('/products');
    }

    public function index(){
        $carts = Cart::all();
        return view('pages.order.cart', ['carts' => $carts]);
        
    }
}