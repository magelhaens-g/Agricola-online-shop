<?php

namespace App\Http\Controllers;

use Carbon;
use Illuminate\Http\Request;
use App\Product;
use App\History;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function product() {
        return view('product');
    }

    public function contact() {
        return view('contact');
    }

    public function search(Request $request) {
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->input('search');

        $products = Product::where('title', 'like', "%$search%")->orWhere('category', 'like', "%$search%")->paginate(12);

        return view('search-results')->with('product', $products);
        
    }

    public function checkout(Product $product, Request $request) {
        $quantity = $request->input('quantity');
        $date = Carbon\Carbon::now()->format('l, d F Y');
        return view('checkout')->with(['product' => $product, 'date' => $date, 'quantity' => $quantity]);
    }

    public function thanks(Product $product, Request $request) {
        // History::create([
        //     'user_id' => auth()->id(),
        //     'product_id' => $product->id,            
        // ]);
        $quantity = $request->input('quantity');

        $user = auth()->user();

        $user->buy()->attach($product);
        $product->decrement('stock', $quantity);
        return view('thanks');
    }

    public function seed() {
        $products = Product::where('category', 'like', "seed")->paginate(20);
        return view('seed')->with('product', $products);
    }

    public function fertilizer() {
        $products = Product::where('category', 'like', "fertilizer")->paginate(20);
        return view('fertilizer')->with('product', $products);
    }

    public function tool() {
        $products = Product::where('category', 'like', "tool")->paginate(20);
        return view('tool')->with('product', $products);
    }
}
