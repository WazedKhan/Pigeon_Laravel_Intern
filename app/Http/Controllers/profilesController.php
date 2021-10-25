<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index($user)
    {
        dd($user);
        return view('home');
    }
}
