<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;

class GreetingController extends Controller
{
    private $drinkModel;

    public function __construct(){
        $this->drinkModel = new Sample();
    }

    public function index() {
        $drinks = $this->drinkModel->all();
        $drink = $this->drinkModel->get();

        return view('all')->with([
            'drinks' => $drinks,
            'drink' => $drink->gakusei_no,
        ]);
    }

    public function post(Request $request){
        $post_date = $request->get('drink');
        return view('all')->with([
            'drink'=>$post_date
        ]);
    }
}
