<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function home(){
        return view('admin.home');
    }
}
