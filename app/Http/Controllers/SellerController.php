<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function index()
    {
        return view('seller.index');
    }
    public function create()
    {
        $categ = Category::all();
        return view('seller.product.create',  ['category' => $categ]);
    }
    public function store(Request $request){
        $user = Auth::user()->id;
        $slug = Str::slug($request->name);
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|max:5000',
            'description' => 'required',
            'price' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-image', 'public');
        }
        $validatedData['user_id'] = $user;
        $validatedData['slug'] = $slug;

        // dd($validatedData);
        Product::create($validatedData);
        Session::flash('status', 'success');
        Session::flash('message', 'Barang Ditambahkan');
        return redirect()->route('product-user');
    }
    public function product()
    {
        $id = Auth::user()->id;
        $product = Product::all()->where('user_id',$id);
        // dd($product);
        return view('seller.product.index', ['product' => $product]);
    }
    public function destroyProduct(Product $product)
    {
        // dd($product);
        if ($product->image != null) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);
        Session::flash('status', 'success');
        Session::flash('message', 'Barang Dihapus');
        return redirect()->route('product-user');
    }
}
