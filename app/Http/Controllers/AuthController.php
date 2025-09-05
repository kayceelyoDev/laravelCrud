<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthRegisterRequest;

class AuthController extends Controller
{
    //
    public function register(AuthRegisterRequest $request){
            User::create($request -> validated());

            return redirect ('/TaskShow');
    }

    public function login(LoginRequest $request){
        $creds = $request -> validated();
        
        $Account = User::where('email', $creds['email'])->first();

        if($Account && Hash::check($creds['password'], $Account->password)){
            Auth::login($Account);
            $request -> session() -> regenerate();

            return redirect ('/TaskShow');
        }

        return back()->withErrors([
            'email' =>'invalid creds',
        ]);
    }


    public function logout(Request $request){
        
        auth()->logout();

        $request -> session() ->invalidate();

        $request -> session() -> regenerateToken();

        return redirect('/login');
    }
}
