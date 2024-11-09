<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'password'  => 'required',
            'password_confirmation' => 'required|same:password',
            'role' => 'required'
        ]);

        $validate['password'] = bcrypt($request->password);

        $user = User::create($validate);
        $success['token'] = $user->createToken('MDPApp')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json($success, HttpFoundationResponse::HTTP_CREATED);
    }
}
