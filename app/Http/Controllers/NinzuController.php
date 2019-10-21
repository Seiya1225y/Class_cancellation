<?php

namespace App\Http\Controllers;

use App\frameworks;
use Illuminate\Http\Request;
use App\Ninzu;
use App\Http\Requests;

class NinzuController extends Controller
{
    public function show(Request $request)
    {
        $kamokumei = $request->input('kamokumei');
        $kanjisei = $request->input('kanjisei');
        $kanjimei = $request->input('kanjimei');

        //$query = Ninzu::query();

        $query =frameworks::query();

        $query->join('kamoku','kamoku.kamoku_cd','=','kamokutantou.kamoku_cd')
            ->join('kyoushokuin','kamokutantou.kyoushokuin_no','=','kyoushokuin.kyoushokuin_no')
            ->join('jikanwarikouji','jikanwarikouji.kamoku_tantou_id','=','kamokutantou.kamoku_tantou_id')
            ->where("kamokutantou.rishuu_nendo","=","2018")
            ->distinct();

        /**$query->join('gakuseijouhou','kojinjouhou.kojin_id','=','gakuseijouhou.kojin_id')
            ->join('rishuujikanwari','gakuseijouhou.student_no','=','rishuujikanwari.student_no')
            ->join('jikanwarikouji','rishuujikanwari.jikanwari_no','=','jikanwarikouji.jikanwari_no')
            ->join('rishuukamoku','jikanwarikouji.gakki_cd','=','rishuukamoku.gakki_cd')
            ->join('kamokutantou','rishuukamoku.rishunendo','=','kamokutantou.rishuu_nendo')
            ->where("kamokutantou.kamoku_tantou_id","=","jikanwarikouji.kamoku_tantou_id")
            ->join('kyoushokuin','kamokutantou.kyoushokuin_no','=','kyoushokuin.kyoushokuin_no')
            ->join('kamoku','kamoku.kamoku_cd','=','kamokutantou.kamoku_cd')
            //->where('kamoku.kamoku_cd',$kamokumei)
            //->where('kyoushokuin.kanjisei',$kanjisei)
            //->where('kyoushokuin.kanjimei',$kanjimei)
            //->where('jikanwarikouji.youbi_cd',$youbi)
            ->where("rishuukamoku.rishunendo","=","2017")
            ->groupBy('gakuseijouhou.student_no');
         * */

        if ($request->has('kamokumei')){
            $query->where('kamoku.kamoku_cd',$kamokumei);
        }

        if ($request->has('kanjisei')) {
            $query->where('kyoushokuin.kanjisei',$kanjisei);
        }

        if ($request->has('kanjimei')) {
            $query->where('kyoushokuin.kanjimei',$kanjimei);
        }

        $data = $query->count('kamoku.kamoku_meishou');

        //$data = $query->paginate(20);

        return view('sample.show',[
            'data' => $data
        ]);
    }
}
