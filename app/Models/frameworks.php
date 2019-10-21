<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class frameworks extends Model
{
    protected $table = '_gakusei';

    protected $guarded = array('gakusei_no');

    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}