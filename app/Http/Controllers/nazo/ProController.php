<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProController extends Controller
{
    public function test1() {

        $test_1 = "テスト";

        return view('test.normal',compact('test_1'));
    }
}
