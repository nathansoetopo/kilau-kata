<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView(){
        return view('admin.login');
    }

    public function storeLogin(Request $request){
        $data = User::where('email', $request->credential)->orWhere('username', $request->credential)->firstOrFail();

        if(Hash::check($request->password, $data->password)){
            Auth::login($data);
            return redirect('admin/dashboard');
        }

        return 'Login Failed';
    }

    public function logout(){
        Auth::logout();

        return redirect('login');
    }
}
