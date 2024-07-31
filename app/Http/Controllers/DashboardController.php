<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index(){
            return view('welcome');
        }
        public function show($slug){
            $detail = Product::where('slug',$slug)->with('category')->firstOrFail();      
            $reccomendation = Product::where('category_id', $detail->category_id)
            ->where('slug', '!=' ,$slug)
            ->where('status', 'verified')
            ->with('category')
            ->get();
            return view('detail', compact('reccomendation'));
            // dd($reccomendation);
            // return response()->json($reccomendation);
        }
        public function getDataProduct(){
            $data= Product::with('category')
            ->where('status','verified')
            ->paginate(10);
            return response()->json($data);
        }
        
        public function getDetailProduct($slug){
            $data= Product::with('category')
            ->where('slug', $slug)
            ->firstOrFail();
            return response()->json($data);
        }
        
}
