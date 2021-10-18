<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\History;

class DataController extends Controller
{
    public function products() {
        $products = Product::orderBy('title', 'ASC');
        return datatables()->of($products)
        ->editColumn('pict1', function(Product $model) {
            return '<img src="'. $model->getCover() .'" height="100px" >';
        })
        ->addColumn('action', 'admin.product.action')
        ->addIndexColumn()
        ->rawColumns(['pict1', 'action'])
        ->toJson();
    }

    public function buys() {
        $buys = History::latest();
        return datatables()->of($buys)
        ->addColumn('user', function(History $model) {
            return $model->user->name;
        })
        ->addColumn('product', function(History $model) {
            return $model->product->title;
        })
        //->addColumn('action', 'admin.product.action')
        ->addIndexColumn()
        //->rawColumns(['action'])
        ->toJson();
    }
}
