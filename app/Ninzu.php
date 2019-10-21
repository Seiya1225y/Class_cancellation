<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ninzu extends Model
{
    protected $table = 'kojinjouhou';

    protected $primaryKey = ('kojin_id');

    public $timestamps = false;

}
