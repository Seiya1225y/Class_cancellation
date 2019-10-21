<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function model()
    {
        // Citiesモデルのインスタンス化
        $md = new Cities();
        // データ取得
        $data = $md->getData();

        // ビューを返す
        return view('sample.model', ['data' => $data]);
    }
}
