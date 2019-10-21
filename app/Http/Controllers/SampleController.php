<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frameworks;
use App\Ninzu;
use App\Http\Requests;


class SampleController extends Controller
{
    public function model(Request $request)
    {
        $youbi = $request->input('youbi');
        $zikan = $request->input('zikan');
        $gakki = $request->input('gakki');

        $query =frameworks::query();

        $query->join('kamoku','kamoku.kamoku_cd','=','kamokutantou.kamoku_cd')
              ->join('kyoushokuin','kamokutantou.kyoushokuin_no','=','kyoushokuin.kyoushokuin_no')
              ->join('jikanwarikouji','jikanwarikouji.kamoku_tantou_id','=','kamokutantou.kamoku_tantou_id')
              ->where("kamokutantou.rishuu_nendo","=","2018");

        if ($request->has('youbi')){
                $query->where('jikanwarikouji.youbi_cd',$youbi);
        }

        if ($request->has('zikan')) {
            $query->where('jikanwarikouji.kouji_cd', $zikan);
        }

        if ($request->has('gakki')) {
            $query->where('jikanwarikouji.gakki_cd', $gakki);
        }

        $data = $query->paginate(20);

        return view('sample.model',[
            'data' => $data
        ]);
    }
}