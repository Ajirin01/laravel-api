<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart_model as cart;

class cart_controller extends Controller
{

    public function index()
    {
        //
        $all_items = cart::all();
        return response()->json(['cart_items' => $all_items, 'status' => 200]);
 

    }

    public function store(Request $request)
    {
        //
        $cart = new cart;
       $cart::create($request->all());
        $msg = "your item has been added to cart";
        return response()->json(['msg' => $msg, 'status' => 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cart_single_item = cart::find($id);
        return response()->json(['cart_item' => $cart_single_item, 'status' => 200]);
    }

    public function update(Request $request, $id)
    {
        //
        $item_to_edit = cart::find($id);
        $item_to_edit->update($request->all());
        $msg = "your record has been updated!";
        return response()->json(['msg' => $msg, 'status' => 200]);

    }

    public function destroy($id)
    {
        $cart_item_to_delete = cart::find($id);
        $cart_item_to_delete->delete();
        $msg = "your record has been deleted!";
        return response()->json(['msg' => $msg, 'status'=> 200]);
    }
}
