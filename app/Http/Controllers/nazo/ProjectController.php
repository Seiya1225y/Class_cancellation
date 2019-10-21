<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(){
        return view('project.project',['gakka'=>'']);
    }

    //public function post(Request $request){
        //return view('project.project',['gakka'=>$request->gakka]);
    //}


}
