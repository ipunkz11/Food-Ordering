<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return response()->json(
            [
                $product
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return response()->json(
            [
                'Message' => "Success",
                'Data' => $product
            ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Product::where("id", $id)->first();
        return response()->json(
            [
                $admin
            ]    
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id)->update($request->all());

        return response()->json(
            [
                'Message' => "Updated",
                'Data' => $product
            ]
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy("id", $id);

        return response()->json(
            [
                $product
            ]
            );
    }
}
