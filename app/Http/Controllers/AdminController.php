<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $user_pending = User::where('status', 'pending')->count();
        // $products = 
        return view('admin.index', ['user_count' => $user_count , 'user_pending' => $user_pending]);
    }
    public function users()
    {
        $user = User::all();
        return view('admin.users.index',['user' => $user]);
    }
    public function show($id)
    {
        $details = User::with(['product'])->findOrFail($id);
        return view('admin.users.show', ['details' => $details]);
        // dd($details);
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
}
