<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
        ])) {
             $user = Auth::user();
        if($user->role == 'admin'){
            $success['token'] = $user->createToken('MDPApp', 
            ['create', 'read', 'update', 'delete'])->plainTextToken;
        } else {
            $success['token'] = $user->createToken('MDPApp', 
            ['read'])->plainTextToken;
        }
        $success['name'] = $user->name;
        return response()->json($success, 201);
    } else {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    }
}
