<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/product/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'pict1' => 'required|file|image',
            'pict2' => 'required|file|image',
            'pict3' => 'required|file|image',
            'desc' => 'required|min:20',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        if ($request->hasFile('pict1')) {
            $pict1 = $request->file('pict1')->store('/images/product-img/create');
        }
        if ($request->hasFile('pict2')) {
            $pict2 = $request->file('pict2')->store('/images/product-img/create');
        }
        if ($request->hasFile('pict3')) {
            $pict3 = $request->file('pict3')->store('/images/product-img/create');
        }

        Product::create([
            'title' => $request->title,
            'pict1' => $pict1,
            'pict2' => $pict2,
            'pict3' => $pict3,
            'desc' => $request->desc,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return redirect()->route('admin.product.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'title' => 'required',
            'pict1' => 'file|image',
            'pict2' => 'file|image',
            'pict3' => 'file|image',
            'desc' => 'required|min:20',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        $pict1 = $product->pict1;
        $pict2 = $product->pict2;
        $pict3 = $product->pict3;

        if ($request->hasFile('pict1')) {
            Storage::delete($product->pict1);
            $pict1 = $request->file('pict1')->store('/images/product-img/create');
        }
        if ($request->hasFile('pict2')) {
            Storage::delete($product->pict2);
            $pict2 = $request->file('pict2')->store('/images/product-img/create');
        }
        if ($request->hasFile('pict3')) {
            Storage::delete($product->pict3);
            $pict3 = $request->file('pict3')->store('/images/product-img/create');
        }

        $product->update([
            'title' => $request->title,
            'pict1' => $pict1,
            'pict2' => $pict2,
            'pict3' => $pict3,
            'desc' => $request->desc,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
