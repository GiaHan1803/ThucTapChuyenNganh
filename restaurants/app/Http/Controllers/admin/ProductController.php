<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product-list', compact('products'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $product=Product::create(
            [
                'name'=>$request->name,
            ]
            );
        if($product)
            return redirect()->route('admin.product.index');
        else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $product=Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $product=Product::find($id);
        $product->update([
            'name'=>$request->name,

        ]);
        if($product)
            return redirect()->route('admin.product.index');
        else
            return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $product=Product::find($id);
        $product->delete();
        if($product)
            return redirect()->route('admin.product.index');
        else
            return back();
    }
}
