<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function login(Request $req){
        //$email=$req->json()->email;
        $email=$req->email;
        $password=$req->password;

        if(Auth::attempt(["email"=>$email, "password"=>$password])){//burayı geçen login oluyor
            $user=Auth::user();
            $success["token"]=$user->createToken("Login")->accessToken;
            return response()->json(['success' => $success], 200);
        }
        else{
            return response()->json(["error"=>"Unauthorised"], 401);
        }
    }
}
