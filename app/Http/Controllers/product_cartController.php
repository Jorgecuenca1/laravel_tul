<?php

namespace App\Http\Controllers;
use App\product_cart;
use App\cart;
use Illuminate\Http\Request;

class product_cartController extends Controller
{
    //
    public function store(Request $request)
    {   
       
        $productcart = $request->input('product_cart');
        for ($i=0; $i< count($productcart);$i++){
            $product_id = $productcart[$i]['product_id'];
            $cart_id = $productcart[$i]['cart_id'];
            $quantity = $productcart[$i]['quantity'];
            $product_cart = new product_cart();
            $product_cart->product_id = $product_id;
            $product_cart->cart_id = $cart_id;
            $product_cart->quantity = $quantity;
            $product_cart->save();
            
            


        }
       
        
        
        
        return response()->json([
            'message' => 'add to product_cart table',
            
        ]);
       
       
        
    }
    function getproduct_cart(){
        $records = product_cart::all();
        return response()->json($records);
    }
}
