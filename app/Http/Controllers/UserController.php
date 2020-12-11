<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $user = User::all();
        return view('users.user', compact('user'));
    }
}
