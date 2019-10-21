<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dept extends Model
{
    protected $timestamps = false;

    protected $primaryKey = "kamoku_cd";

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
