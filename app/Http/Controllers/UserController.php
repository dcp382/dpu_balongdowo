<?php

namespace App\Http\Controllers;

use PhpParser\Builder\Use_;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function data_user()
    {
        $user = User::all();
        return view('data_user.index',compact('user'));
    }
}
