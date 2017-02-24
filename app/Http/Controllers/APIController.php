<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use JWTAuth;

class APIController extends Controller
{
    public function register(Request $request)
    {        
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        User::create($input);
        return response()->json(['result'=>true]);
    }
    
    public function login(Request $request)
    {  
        $response = array("error" => FALSE);
        $input = $request->all();

        if (!$token = JWTAuth::attempt($input)) {
            $response["error"] = TRUE;
            $response["error_msg"] = "Wrong email or password. Please try again!";
            return ($response);
        }

        $user = JWTAuth::toUser($token);
        return ($user);
    }
    
    public function get_user_details(Request $request)
    {
        $input = $request->all();
        $user = JWTAuth::toUser($input['token']);
        return response()->json(['result' => $user]);
    }
}
