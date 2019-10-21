<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    protected $table = 'kamoku';

    protected $timestamps = false;

    public function dept()
    {
        return $this->belongsTo('App\Dept');
    }
}
