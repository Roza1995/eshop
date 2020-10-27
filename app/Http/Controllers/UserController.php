<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function register(Request $request){
    $user = new User();

    $user->id = $request->id;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

    return response()->json($user);
  }
}
