<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
  public function cart(Request $request){
    $cart = new Cart();

    $cart->id = $request->id;
    $cart->product_id = $request->product_id;
    $cart->save();

    return response()->json($cart);
  }

  public function getCart(){
    $cart = Cart::get(['product_id']);
    return response()->json($cart);
  }


  public function getCartedProd(){
    $carts = Cart::get(['product_id']);
    $prods = [];
    foreach ($carts as $cart){
      $prod = Product::with('carts')->where('id', $cart->product_id)->get();
      array_push($prods, $prod);
    }
    return response()->json($prods);
    //hjkhjhg




  }



}
