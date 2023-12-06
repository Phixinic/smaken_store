<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function index()
    {
        return view('seller.index');
    }
    public function addProduct()
    {
        return view('seller.product.create');
    }
    public function product()
    {
        $id = Auth::user()->id;
        $product = Product::all()->where('user_id',$id);
        // dd($product);
        return view('seller.product.index', ['product' => $product]);
    }
}
