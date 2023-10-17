<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// $request->validate([
//     'name'=>'required|string|max:255',
//     'email'=> 'required|string|email|max:255|unique:users',
//     'password'=>'required|string|email|min:8|confirmed',
// ]);

// $user = User::create($request->all());
// return response($user,200);