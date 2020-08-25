<?php

namespace App\Http\Controllers;
use App\cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    function store(Request $request)
    {
        $status = $request->input('status');
        $cart = new cart();
        $cart->status = $status;
        
        $cart->save();
        return $cart;
    }
    public function update(Request $request, $id)
    {
        $cart = cart::findOrFail($id);
        $cart->update($request->all());

        return $cart;
    }
    function getcart(){
        $records = cart::all();
        return response()->json($records);
    }
    function delete(Request $request)
    {
        $id = $request->input('id');
        
        $record = DB::delete("delete from product where id='$id'");
        $response = array('id'=>$id);
        return $response;
    }
}
