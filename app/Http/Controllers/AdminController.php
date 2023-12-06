<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $user_pending = User::where('status', 'pending')->count();
        $products = Product::count();
        $products_pending = Product::where('status', 'pending')->count();
        return view('admin.index', ['user_count' => $user_count , 'user_pending' => $user_pending, 'products' => $products, 'products_pending' => $products_pending]);
    }
    public function users()
    {
        $user = User::all();
        return view('admin.users.index',['user' => $user]);
    }
    public function category()
    {
        $categ = Category::all();
        return view('admin.category.index',['category' => $categ]);
    }
    public function createCateg()
    {
        return view('admin.category.create');
    }
    public function editCateg($id)
    {
        $find = Category::find($id);
        return view('admin.category.show',['details' => $find]);
    }
    public function storeCateg(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Isi Nama Kategori'
        ]);
        // dd($validated);
         Category::create([
            'name' => $request->name,
            'parentId' => 0
         ]);
        Session::flash('status', 'success');
        Session::flash('message', 'Kategori Ditambahkan');
        return redirect()->route('admin-category');
    }
    public function updateCateg(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'Isi Nama Kategori'
        ]);
        // dd($validated);
         Category::where('id', $id)->update([
            "name" => $request->name,
            "parentId" => 0
         ]);
        Session::flash('status', 'success');
        Session::flash('message', 'Kategori Diubah');
        return redirect()->route('admin-category');
    }
    public function show($id)
    {
        $details = User::with(['product'])->findOrFail($id);
        return view('admin.users.show', ['details' => $details]);
        // dd($details);
    }
    public function product(){
        $products = Product::all();
        return view('admin.product.index',['products'=>$products]);
    }
    public function changeStatus($id){
        // dd($id);
        $user = User::find($id);
        if($user->status == "verified"){
            $user->update(['status' => 'blocked']);
        }
        else{
            $user->update(['status' => 'verified']);
        }
        return back();
    }
    public function changeStatProduct($id){
        // dd($id);
        $product = Product::find($id);
        if($product->status == "verified"){
            $product->update(['status' => 'rejected']);
        }
        else{
            $product->update(['status' => 'verified']);
        }
        return back();
    }
    public function deleteCateg($id){
        // dd($id);
        $categ = Category::where('id',$id);
        $categ->delete();
        return back();
    }
}
