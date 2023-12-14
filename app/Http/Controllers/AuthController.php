<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $credentials=$request->validate([
            'matricule'=>'required|string',
            'password'=>'required|string',
        ]);
        $user=User::where('matricule',$credentials['matricule'])->first();
        if($user &&  ($user->matricule == $credentials['matricule'] && $user->password == $credentials['password'])){
            Auth::login($user);
            $token = $request->user()->createToken("login_token");
            return response()->json([
              'status'=>true,
               "data"=>[
                    "token"=>$token->plainTextToken,
                    "user"=>$request->user()
                ],
              'message'=>'login success'
            ]);
        }

        return [
            "status"=>false,
            "data"=>null,
            "message"=>"Login failed"
        ];
    }
}
