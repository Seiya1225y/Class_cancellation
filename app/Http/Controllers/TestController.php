<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class TestController extends Controller
{

    private $drinkModel;

    public function __construct(){
        $this->drinkModel = new Drink();
    }

	public function index(){

	    $name = '遠山';
	    $array = ['apple','banana','orange','桃'];

	    $drinks = $this->drinkModel->all();
        $drink = $this->drinkModel->get();

		return view('test')->with([
		    'name'=>$name,
            'hairetu'=>$array,
            'drinks' => $drinks,
            'drink' => $drink->drink_name,
        ]);
	}

	public function post(Request $request){
	    $post_date = $request->get('drink');
        return view('test2')->with([
            'drink'=>$post_date
        ]);
    }
}
