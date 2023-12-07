<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function logout(Request $request)
    {
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/');
    }
    public function auth(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ],[
                'password.required' => 'Password harus diisi',
                'email.required' => 'Email harus diisi',
            ]);

        if(Auth::attempt($credentials)){
            // dd(Auth::user());
            if(Auth::user()->status != "verified"){
                if (Auth::user()->status == "blocked") {
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
    
                    Session::flash('status','failed');
                    Session::flash('message', 'Akun mu di Blokir');
                    return redirect('/login');
                }else{
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
    
                    Session::flash('status','failed');
                    Session::flash('message', 'Akun mu belum di verifikasi');
                    return redirect('/login');
                }
            } 
            
            $request->session()->regenerate();
            if(Auth::user()->role == 'SA'){
                // dd('admin');
               return redirect('/admin');
            }
            if(Auth::user()->role == 'seller'){
               return redirect('/seller');
            // dd('seller');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'E-mail atau Password salah');
        return redirect('/login');
    }
    public function registerProccess(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
            'email' => 'required|email',
        ],[
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal terdiri dari 8 huruf',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus berformat email yang valid',
        ]);
        $validated['password']= Hash::make($request->password);
        $user = User::create($validated);
        // dd($validated);
        Session::flash('status', 'success');
        Session::flash('message', 'Pendaftaran Berhasil');
        return redirect('/register');
    }
}
