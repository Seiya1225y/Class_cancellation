<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class SearchController extends Controller
{
    public function getIndex()
    {
        $data = test::get();
        return view('search.index', compact('data'));
    }
}
