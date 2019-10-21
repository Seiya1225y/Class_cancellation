<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Drink extends Model
{
    protected $table = 'drink';

    public function getAll(){
        $res = DB::select('
	            SELECT * FROM drinks
	        ');

        return $res;
    }

    public function get(string $id){
        $res = DB::selectOne('
	            SELECT * FROM drinks
	            WHERE id = :id
	        ',[
            'id' => $id
        ]);

        return $res;
    }
}