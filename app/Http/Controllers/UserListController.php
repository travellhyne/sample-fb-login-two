<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUsers() {
        return User::all();
    }
    public function showUsers() {
        return view('users');
    }
}