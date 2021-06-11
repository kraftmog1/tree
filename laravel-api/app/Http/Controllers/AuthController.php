<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Hash;

class AuthController extends Controller
{
    public function postLogin(Request $request){
      if(Auth::attempt($request->only('email','passport'))){
          $user = Auth::user();
          $token = $user->createToken('admin')->accessToken;
          return [
            'token' => $token,
          ];
      }
      return response([
          'error' => 'Invalid Authorize'
      ], Response::HTTP_UNAUTHORIZED);
    }

    public function postRegister(RegisterRequest $request){
        $user = User::create(
            $request->only('name', 'email')
            + ['password' => Hash::make($request->input('password'))]
        );
        return response($user, Response::HTTP_CREATED);
    }
}
