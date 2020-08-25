<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;


class productController extends Controller
{
    function add(Request $request)
    {
        $nombre = $request->input('nombre');
        $sku = $request->input('sku');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');

        $product = new product();
        $product->nombre = $nombre;
        $product->sku = $sku;
        $product->descripcion = $descripcion;
        $product->precio = $precio;
        $product->save();
        return $product;
    }
    function get(){
        $records = product::all();
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
