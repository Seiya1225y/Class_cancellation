<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class aController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from _gakusei')->get();

        return view('user.index', ['users' => $users]);
    }
}
