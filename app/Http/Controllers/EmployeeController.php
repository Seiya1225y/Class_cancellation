<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function select(Request $request)
    {

       $a = $request->input('kamoku') ;

        // INNAR JOIN
        $employees = \DB::table('kamoku')
            ->join('kamokutantou', 'kamoku.kamoku_cd', '=', 'kamokutantou.kamoku_cd')
            ->where('kamoku_meishou','like','%'.$a.'%')
            ->get();

        return view('/all',[
            'employees' => $employees
        ]);
    }
}
