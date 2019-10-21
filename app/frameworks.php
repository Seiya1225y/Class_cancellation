<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class frameworks extends Model
{
    protected $table = 'kamokutantou';

    protected $primaryKey = ('kamoku_tantou_id');

    public $timestamps = false;

}