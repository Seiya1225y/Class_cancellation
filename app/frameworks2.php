<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class frameworks2 extends Model
{
    public function employees()
    {
        return $this->hasMany('App\frameworks');
    }
}
