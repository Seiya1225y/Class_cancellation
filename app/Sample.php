<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = '_gakusei';

    public function getAll(){
        $res = DB::select('
	            SELECT * FROM _gakusei
	        ');

        return $res;
    }
}
